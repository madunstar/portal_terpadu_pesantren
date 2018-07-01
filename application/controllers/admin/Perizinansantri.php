<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Perizinansantri extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    $this->load->model('back-end/perizinan/m_dashboard');
    $this->load->model('back-end/perizinan/m_perizinan');
    $this->load->model('back-end/perizinan/m_denda');
    $this->load->model('back-end/datamaster/m_santri');
    $this->load->library('layout_pendaftaran');
    $this->load->helper('indo_helper');
    if ($this->session->userdata('nama_akun') == '') {
        redirect('admin/login');
    }
    else if ($this->session->userdata('kode_role_admin') == '') {
        redirect('admin/login');
    }
    else if ($this->session->userdata('kode_role_admin') == 'adm_pd') {
        redirect('admin/pendaftaran');
    }
    else if ($this->session->userdata('kode_role_admin') == 'adm_dms') {
        redirect('admin/datamaster');
    }
    else if ($this->session->userdata('kode_role_admin') == 'przputri') {
      redirect('admin/perizinansantriwati');
    }
    else if ($this->session->userdata('kode_role_admin') == 'akdputra') {
      redirect('admin/santriakd');
    }
    else if ($this->session->userdata('kode_role_admin') == 'akdputri') {
      redirect('admin/santriwatiakd');
    }
    $this->load->helper('text');
    setlocale(LC_ALL, 'INDONESIA');
  }

  function logout(){
      $this->session->unset_userdata('nip_staff_admin');
      $this->session->unset_userdata('nama_akun');
      $this->session->unset_userdata('kode_role_admin');
      session_destroy();
      redirect('admin/login');
  }

  function ubahsandiadmin(){
      if ($this->input->post()) {
        $array=array(
            'nama_role'=> $this->input->post('nama_role'),
            'nip_staff_admin'=> $this->input->post('nip_staff_admin'),
            'nama_lengkap'=> $this->input->post('nama_lengkap'),
            'nama_akun'=> $this->input->post('nama_akun'),
            'kata_sandi'=> $this->input->post('kata_sandi'),
            );
          $nama_akun = $this->input->post("nama_akun");
          $kata_sandi = md5($this->input->post("kata_sandi"));
          $kata_sandibr = md5($this->input->post("kata_sandibr"));
          $rekata_sandibr = md5($this->input->post("rekata_sandibr"));
          $query = $this->m_dashboard->cekubahsandi($nama_akun);
          if ($query->kata_sandi!=$kata_sandi) {
              $variabel['kata_sandi'] =$this->input->post('kata_sandi');
              $variabel['data'] = $array;
              $this->layout->renderizin('back-end/perizinan/v_ubah_sandi',$variabel);
          } else if ($kata_sandibr!=$rekata_sandibr){
               $variabel['rekata_sandibr'] =$this->input->post('rekata_sandibr');
               $variabel['data'] = $array;
               $this->layout->renderizin('back-end/perizinan/v_ubah_sandi',$variabel);
          } else {
              $exec = $this->m_dashboard->ubahsandi($nama_akun,$kata_sandi,$kata_sandibr);
              if ($exec){
                  redirect(base_url("admin/perizinansantri/ubahsandiadmin?nama_akun=".$nama_akun."&msg=1"));
              }
          }
      } else {
          $nama_akun = $this->input->get("nama_akun");
          $exec = $this->m_dashboard->lihatubahsandi($nama_akun);
          if ($exec->num_rows()>0){
              $variabel['data'] = $exec ->row_array();
              $this->layout->renderizin('back-end/perizinan/v_ubah_sandi',$variabel);
          } else {
              redirect(base_url("admin/perizinansantri"));
          }
      }
  }

  function index()
  {
      $tahunini = date('Y');
      $bulanini = date('m');
      $tahunsemalam = $tahunini - 1;
      $tahunbelakang = $tahunsemalam - 1;

      $variabel['nama_akun'] = $this->session->userdata('nama_akun');
      $variabel['data'] = $this->m_dashboard->datakeluarterakhir();
      $variabel['datadenda'] = $this->m_dashboard->datadendaterakhir();

      $variabel['tahunsekarang'] = $tahunini;
      $variabel['datatahunini'] = $this->m_dashboard->datatahunini($tahunini);
      $variabel['bayartahunini'] = $this->m_dashboard->bayartahunini($tahunini);
      $variabel['dendatahunini'] = $this->m_dashboard->dendatahunini($tahunini);

      $variabel['tahunlalu'] = $tahunsemalam;
      $variabel['datatahunlalu'] = $this->m_dashboard->datatahunlalu($tahunsemalam);
      $variabel['bayartahunlalu'] = $this->m_dashboard->bayartahunlalu($tahunsemalam);
      $variabel['dendatahunlalu'] = $this->m_dashboard->dendatahunlalu($tahunsemalam);

      $variabel['tahunbelakang'] = $tahunbelakang;
      $variabel['datatahunbelakang'] = $this->m_dashboard->datatahunbelakang($tahunbelakang);
      $variabel['bayartahunbelakang'] = $this->m_dashboard->bayartahunbelakang($tahunbelakang);
      $variabel['dendatahunbelakang'] = $this->m_dashboard->dendatahunbelakang($tahunbelakang);

      $variabel['bulanini'] = $bulanini;
      // $exec = $this->m_dashboard->dendabulanini($tahunini,$bulanini)->row_array();
      // $exec2 = $this->m_dashboard->bayarbulanini($tahunini,$bulanini)->row_array();
      // $besardendabulanini = $exec['total'];
      // $besarhutangbulanini = $besardendabulanini - $besarbayarbulanini;
      $variabel['databulanini'] = $this->m_dashboard->databulanini($tahunini,$bulanini);
      $variabel['bayarbulanini'] = $this->m_dashboard->bayarbulanini($tahunini,$bulanini);
      $variabel['dendabulanini'] = $this->m_dashboard->dendabulanini($tahunini,$bulanini);
      //$variabel['hutangbulanini'] = $besarhutangbulanini;
      $this->layout->renderizin('back-end/perizinan/v_dashboard',$variabel,'back-end/perizinan/denda_js');
  }

  //santri//
  function santri()
  {
      $variabel['data'] = $this->m_santri->lihatdata();
      $this->layout->renderizin2('back-end/perizinan/santri/v_santri',$variabel,'back-end/perizinan/santri/v_santri_js');
  }

  function santrilihat()
  {
      $nis = $this->input->get("nis");
      $exec = $this->m_santri->lihatdatasatu($nis);
      if ($exec->num_rows()>0){
          $variabel['data'] = $exec ->row_array();
          $variabel['tingkat'] = $this->m_santri->lihattingkatan($nis); ;
          $variabel['tingkatpondokan'] = $this->m_santri->lihattingkatanpondokan($nis); ;
          $this->layout->renderizin('back-end/perizinan/santri/v_santri_lihat',$variabel,'back-end/perizinan/santri/v_santri_js');
      } else {
          redirect(base_url("admin/perizinansantri/santri"));
      }

  }

  function santritingkat()
  {
      $nis = $this->input->post("nis");
      $variabel['tingkat'] = $this->m_santri->lihattingkatan($nis);
      $this->load->view('back-end/perizinan/santri/v_santri_tingkat',$variabel);
  }

  function santritingkatpondokan()
  {
      $nis = $this->input->post("nis");
      $variabel['tingkat'] = $this->m_santri->lihattingkatanpondokan($nis);
      $this->load->view('back-end/perizinan/santri/v_santri_tingkatpondokan',$variabel);
  }

  function santriberkas()
  {
      $nis = $this->input->get("nis");
      $exec = $this->m_santri->lihatdatasatu($nis);
      if ($exec->num_rows()>0){
          $variabel['santri'] = $exec->row_array();
          $variabel['data'] = $this->m_santri->lihatdataberkas($nis);
          $this->layout->renderizin2('back-end/perizinan/santri/v_santriberkas',$variabel,'back-end/perizinan/santri/v_santriberkas_js');
      } else {
          redirect(base_url("admin/perizinansantri/santri"));
      }

  }
  //akhir//

//Bagian Utak Atik By Ilyas
  function datakeluar(){
      $variabel['data'] = $this->m_perizinan->lihatdata();
      $this->layout->renderizin2('back-end/perizinan/v_data_keluar',$variabel,'back-end/perizinan/keluar_js');
  }

  function lihatdatakeluar(){
      $id_keluar = $this->input->post("id");
      $variabel['lihat'] = $this->m_perizinan->lihatdatasatuan($id_keluar)->row_array();
      $this->load->view('back-end/perizinan/v_lihat_data_keluar',$variabel);
  }

  function datasantritampil(){
      $id=$this->input->post('id');
      $data=$this->m_perizinan->tampildatasantri($id)->result();
      echo json_encode($data);
  }

  function datapenjemputtampil(){
      $id=$this->input->post('id');
      $data=$this->m_perizinan->tampildatapenjemput($id)->result();
      echo json_encode($data);
  }

  function ceknissantri(){
    $nis_santri = $this->input->post('nis_santri');
    if ($this->m_perizinan->cekdatasantri($nis_santri) == 1){
      echo 1;
    }
    else{
      echo 0;
    }
  }

  function cekjatahizin(){
    $nis_santri = $this->input->post('nis_santri');
    $tgl_sekarang = strtotime(date("Y-m-d H:i:s")); //strtotime untuk mengubah menjadi detik
    $ambiltglkeluar = $this->m_perizinan->ambiltglkeluar($nis_santri)->tanggal_keluar;
    $tgl_keluar = strtotime($ambiltglkeluar);
    $detik = $tgl_sekarang - $tgl_keluar;
    $selisih_hari = $detik / 86400;
    if ($selisih_hari >= 30){
      echo 1;
    }
    else{
      echo 0;
    }
  }

  function keluar(){
      $nip_admin = $this->session->userdata('nip_staff_admin');
      $id_penjemput = $this->input->post('id_penjemput');
      $no_identitas = $this->input->post('no_identitas');
      $status_keluar = "keluar";
      if ($this->input->post()){
          $izinkeluar=array(
              'nis_santri'=> $this->input->post('nis_santri'),
              'tanggal_keluar'=> $this->input->post('tanggal_keluar'),
              'harus_kembali'=> $this->input->post('harus_kembali'),
              'keperluan'=> $this->input->post('keperluan'),
              'id_penjemput'=> $id_penjemput,
              'petugas'=> $nip_admin,
              'status_keluar'=> $status_keluar,
          );
          $penjemput=array(
              'no_identitas'=> $no_identitas,
              'nama_penjemput'=> $this->input->post('nama_penjemput'),
              'no_telp'=> $this->input->post('no_telp'),
              'alamat_penjemput'=> $this->input->post('alamat_penjemput'),
              'hubungan_penjemput'=> $this->input->post('hubungan_penjemput')
          );
          $nis = $this->input->post('nis_santri');
          $tanggal_keluar = $this->input->post('tanggal_keluar');
          $ceknis = $this->m_perizinan->cekdatasantri($nis);
          if ($ceknis > 0){
              if ($id_penjemput=='Baru'){
                  $exectambahpenjemput = $this->m_perizinan->tambahdatapenjemput($penjemput);
                  $ambilidpenjemput = $this->m_perizinan->ambilidpenjemput($no_identitas);
                  $izinkeluarpb=array(
                      'nis_santri'=> $this->input->post('nis_santri'),
                      'tanggal_keluar'=> $this->input->post('tanggal_keluar'),
                      'harus_kembali'=> $this->input->post('harus_kembali'),
                      'keperluan'=> $this->input->post('keperluan'),
                      'id_penjemput'=> $ambilidpenjemput->id_penjemput,
                      'petugas'=> $nip_admin,
                      'status_keluar'=> $status_keluar,
                  );
                  $exectambahizin = $this->m_perizinan->tambahizinkeluar($izinkeluarpb);
                  redirect('admin/perizinansantri/suratizin');
              }
              else{
                  $exectambahizin = $this->m_perizinan->tambahizinkeluar($izinkeluar);
                  redirect('admin/perizinansantri/suratizin');
              }
          }
          else {
            redirect(base_url("admin/perizinansantri/keluar?msgnis=0"));
          }
      }

      else{
          $variabel['id_penjemput']=$this->m_perizinan->ambildatapenjemput();
          $this->layout->renderizin2('back-end/perizinan/v_keluarpondok',$variabel,'back-end/perizinan/keluar_js');
      }
  }

  function suratizin(){
      $execsuratizin = $this->m_perizinan->tampilsuratizin();
      $variabel['datasurat'] = $execsuratizin->row_array();
      $this->layout->renderizin('back-end/perizinan/v_suratizin',$variabel,'back-end/perizinan/keluar_js');
  }

  function cetak_suratizin(){
      $id_keluar = $this->input->get("id");
      $execsuratizin = $this->m_perizinan->tampilsuratizinsatuan($id_keluar);
      $variabel['datasurat'] = $execsuratizin->row_array();
      $this->layout->renderizin('back-end/perizinan/v_suratizin',$variabel,'back-end/perizinan/keluar_js');
  }

  function izinhapus(){
      $id_keluar = $this->input->get("id");
      $exec = $this->m_perizinan->hapus($id_keluar);
      redirect(base_url()."admin/perizinansantri/datakeluar?msg=1");
  }

  function penjemputhapus(){
      $id_penjemput = $this->input->get("id");
      $exec = $this->m_perizinan->jemputhapus($id_penjemput);
      redirect(base_url()."admin/perizinansantri/keluar?msg=1");
  }

  function laporankeluar(){
    $tahun = $this->input->post('tahun');
    $bulan = $this->input->post('bulan');
    $variabel['tahun'] = $tahun;
    $variabel['bulan'] = $bulan;
    $variabel['totkeluar'] = $this->m_perizinan->totalkeluar($tahun,$bulan);;
    $variabel['data'] = $this->m_perizinan->laporankeluar($tahun,$bulan);
    $this->layout->renderlaporan('back-end/perizinan/v_lap_keluar',$variabel);
  }
//Sampai Sini Bagian Utak Atik By Ilyas

  function datakembali()
  {
      $variabel['santrikembali'] = $this->m_perizinan->datasantrikembali();
      $this->layout->renderizin2('back-end/perizinan/data_kembali',$variabel,'back-end/perizinan/denda_js');
  }

  function kembali()
  {
      $variabel['santrikeluar'] = $this->m_perizinan->datasantrikeluar();
      $this->layout->renderizin('back-end/perizinan/kembalipondok',$variabel);
  }

  function kembalidenda()
  {
	$id_keluar = $this->input->post("id_keluar");
    $datadenda = $this->m_denda->aturdenda();
    foreach ($datadenda->result_array() as $row) {
        $denda = $row['denda_perjam'];
        $dendamaks = $row['denda_maks'];
      }
    $santrikeluar = $this->m_perizinan->datasantrikeluarsatu($id_keluar);
    foreach ($santrikeluar->result_array() as $santri) {
        $tanggalkeluar = $santri['tanggal_keluar'];
		$tanggalkembali = $santri['harus_kembali'];
      }
      $today = date("Y-m-d H:i:s");
      if ($today > $tanggalkembali) {
         $bayardenda = $dendamaks;
      }
      else {
        $bayardenda = 0;
      }
    $variabel['santrikeluar'] = $santrikeluar->row();
    $variabel['totaldenda'] = $bayardenda;
    $variabel['santrikeluarlagi'] = $this->m_perizinan->datasantrikeluar();
    $this->layout->renderizin('back-end/perizinan/kembalipondok1',$variabel);
  }

  function tambahdatakembali(){
    $petugas = $this->session->userdata('nama_akun');
    $denda = $this->input->post('total_denda');
    $id_keluar = $this->input->post('id_keluar');
    if ($denda == 0){
      $statusdenda = "0";
    }
    elseif ($denda > 0) {
      $statusdenda = "1";
      $status_pembayaran = "hutang";
    }
    if ($this->input->post()){
        $arraykembali=array(
          'id_keluar' => $this->input->post('id_keluar'),
          'tanggal_kembali' => $this->input->post('tanggal_kembali'),
          'status_denda' => $statusdenda,
          'petugas' => $petugas
        );
      }
      $exec = $this->m_perizinan->tambahdatakembali($arraykembali);
      $exec1 = $this->m_perizinan->updatedatakeluar($id_keluar);
      if ($denda > 0){
        $ambiliddatakembali = $this->m_perizinan->ambilidkembaliterakhir();
        foreach ($ambiliddatakembali->result_array() as $row) {
            $id_kembali = $row['id_kembali'];
          }
        $arraydenda=array(
          'id_kembali' => $id_kembali,
          'besar_denda' => $denda,
          'status_pembayaran' => $status_pembayaran
        );
        $exec2= $this->m_perizinan->tambahdatadenda($arraydenda);
      }
      redirect(base_url("admin/perizinansantri/datakembali"));

  }

  function laporankembali(){

    $tahun = $this->input->post('tahun');
    $bulan = $this->input->post('bulan');
    $variabel['bulan'] = $bulan;
    $variabel['tahun'] = $tahun;
    $variabel['semuadenda'] = $this->m_denda->semuadenda($tahun,$bulan);
    $variabel['kenadenda'] = $this->m_perizinan->kenadenda($tahun,$bulan);
    $variabel['data'] = $this->m_perizinan->laporankembali($tahun,$bulan);
    $this->layout->renderlaporan('back-end/perizinan/v_lap_kembali',$variabel,'back-end/perizinan/denda_js');
  }

///////////////////denda ini denda//////////////////////////

  function datadenda()
  {
      $variabel['data'] = $this->m_denda->lihatdata();
      $this->layout->renderizin2('back-end/perizinan/v_denda',$variabel,'back-end/perizinan/denda_js');
  }

  function riwayatbayardenda()
  {
      $nis = $this->input->get("nis");
      $denda = $this->input->get("denda");
      $variabel['id_denda'] = $this->input->get("denda");
      $variabel['nis'] = $this->input->get("nis");
      $variabel['totalbayar'] = $this->m_denda->totalbayar($denda);
      $variabel['statusdenda'] = $this->m_denda->statusdenda($denda);
      $variabel['data'] = $this->m_denda->lihatbayar($nis);
      $this->layout->renderizin('back-end/perizinan/v_data_bayar_denda',$variabel,'back-end/perizinan/denda_js');
  }

  function bayardenda(){
    $tgl_bayar = date('Y-m-d');
    $petugas = $this->session->userdata('nama_akun');
    if ($this->input->post()){
        $array=array(
          'id_denda' => $this->input->post('id_denda'),
          'besar_bayar' => $this->input->post('besar_bayar'),
          'tanggal_bayar' => $tgl_bayar,
          'petugas' => $petugas
        );
        $id_denda = $this->input->post('id_denda');
        $nis = $this->input->post('nis');
        $besardenda = $this->m_denda->besardenda($id_denda);
          $exec = $this->m_denda->tambahbayar($array);
          if ($exec) {
            $totalbayar = $this->m_denda->jumlahbayar($id_denda);
            if ($totalbayar >= $besardenda){
              $arrayupdate=array(
                'status_pembayaran' => 'lunas'
              );
              $this->m_denda->editdenda($id_denda,$arrayupdate);
              redirect(base_url("admin/perizinansantri/riwayatbayardenda?nis=".$nis."&denda=".$id_denda."&msg=1"));
            } else
            redirect(base_url("admin/perizinansantri/riwayatbayardenda?nis=".$nis."&denda=".$id_denda."&msg=1"));

          }
          else redirect(base_url("admin/perizinansantri/riwayatbayardenda?nis=".$nis."&denda=".$id_denda."&msg=0"));
      }

  }

  function bayardendahapus(){
    $nis = $this->input->get("nis");
    $id_denda = $this->input->get("id_denda");
    $id_bayar = $this->input->get("id_bayar");
    $besardenda = $this->m_denda->besardenda($id_denda);
    $exec = $this->m_denda->hapus($id_bayar);
    if ($exec){
      $totalbayar = $this->m_denda->jumlahbayar($id_denda);
      if ($totalbayar < $besardenda){
        $arrayupdate=array(
          'status_pembayaran' => 'hutang'
        );
        $this->m_denda->editdenda($id_denda,$arrayupdate);
        redirect(base_url("admin/perizinansantri/riwayatbayardenda?nis=".$nis."&denda=".$id_denda."&hps=1"));
    } else redirect(base_url("admin/perizinansantri/riwayatbayardenda?nis=".$nis."&denda=".$id_denda."&hps=1"));
  } else redirect(base_url("admin/perizinansantri/riwayatbayardenda?nis=".$nis."&denda=".$id_denda."&hps=0"));
  }


function laporandenda(){

  $tahun = $this->input->post('tahun');
  $bulan = $this->input->post('bulan');
  $variabel['bulan'] = $bulan;
  $variabel['tahun'] = $tahun;
  $variabel['semuadenda'] = $this->m_denda->semuadenda($tahun,$bulan);
  $variabel['dendalunas'] = $this->m_denda->dendalunas($tahun,$bulan);
  $variabel['dendahutang'] = $this->m_denda->dendahutang($tahun,$bulan);
  $variabel['data'] = $this->m_denda->laporandenda($tahun,$bulan);
  $this->layout->renderlaporan('back-end/perizinan/v_lap_denda',$variabel,'back-end/perizinan/denda_js');
}

  function aturdenda(){
    $datadenda = $this->m_denda->aturdenda();
    $variabel['datadenda'] = $datadenda->row();
    $this->layout->renderizin('back-end/perizinan/pengaturandenda',$variabel,'back-end/perizinan/denda_js');

  }

  function updateaturdenda(){

    $password = $this->session->userdata('password');
    $kata_sandi = md5($this->input->post('password'));
    $kata_sandi2 = md5($this->input->post('password2'));

    if ($kata_sandi == $kata_sandi2){
      if ($kata_sandi == $password) {
        $arrayupdate=array(
          'denda_perjam' => $this->input->post('dendajam'),
          'denda_maks' => $this->input->post('dendamaks'),
        );
        $exec = $this->m_denda->updateaturdenda($arrayupdate);
        redirect(base_url("admin/perizinansantri/aturdenda?&msg=1"));
      }
      else{
        redirect(base_url("admin/perizinansantri/aturdenda?&msg=0"));
      }}
      else{
        redirect(base_url("admin/perizinansantri/aturdenda?&msg=2"));
      }
  }

///////////////////////////akhiri semua denda ini!! ///////////////////////////////////////////
}
?>
