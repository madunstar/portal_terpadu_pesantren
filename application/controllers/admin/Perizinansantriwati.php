<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Perizinansantriwati extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    $this->load->model('back-end/perizinan/m_dashboard');
    $this->load->model('back-end/perizinan/m_perizinan_p');
    $this->load->model('back-end/perizinan/m_denda_p');
    $this->load->model('back-end/datamaster/m_santriwati');
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
    else if ($this->session->userdata('kode_role_admin') == 'przputra') {
      redirect('admin/perizinansantri');
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
              $this->layout->renderizinp('back-end/perizinan_p/v_ubah_sandi',$variabel);
          } else if ($kata_sandibr!=$rekata_sandibr){
               $variabel['rekata_sandibr'] =$this->input->post('rekata_sandibr');
               $variabel['data'] = $array;
               $this->layout->renderizinp('back-end/perizinan_p/v_ubah_sandi',$variabel);
          } else {
              $exec = $this->m_dashboard->ubahsandi($nama_akun,$kata_sandi,$kata_sandibr);
              if ($exec){
                  redirect(base_url("admin/perizinan_p/ubahsandiadmin?nama_akun=".$nama_akun."&msg=1"));
              }
          }
      } else {
          $nama_akun = $this->input->get("nama_akun");
          $exec = $this->m_dashboard->lihatubahsandi($nama_akun);
          if ($exec->num_rows()>0){
              $variabel['data'] = $exec ->row_array();
              $this->layout->renderizinp('back-end/perizinan_p/v_ubah_sandi',$variabel);
          } else {
              redirect(base_url("admin/perizinan_p"));
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
      $this->layout->renderizinp('back-end/perizinan_p/v_dashboard',$variabel,'back-end/perizinan_p/denda_js');
  }
  //santriwati//
  function santriwati()
  {
      $variabel['data'] = $this->m_santriwati->lihatdata();
      $this->layout->renderizinp2('back-end/perizinan_p/santriwati/v_santri',$variabel,'back-end/perizinan_p/santriwati/v_santri_js');
  }

  function santriwatilihat()
  {
      $nis = $this->input->get("nis");
      $exec = $this->m_santriwati->lihatdatasatu($nis);
      if ($exec->num_rows()>0){
          $variabel['data'] = $exec ->row_array();
          $variabel['tingkat'] = $this->m_santriwati->lihattingkatan($nis); ;
          $variabel['tingkatpondokan'] = $this->m_santriwati->lihattingkatanpondokan($nis); ;
          $this->layout->renderizinp('back-end/perizinan_p/santriwati/v_santri_lihat',$variabel,'back-end/perizinan_p/santriwati/v_santri_js');
      } else {
          redirect(base_url("admin/perizinan_santriwati/santriwati"));
      }

  }

  function santriwatitingkat()
  {
      $nis = $this->input->post("nis");
      $variabel['tingkat'] = $this->m_santriwati->lihattingkatan($nis);
      $this->load->view('back-end/perizinan_p/santriwati/v_santri_tingkat',$variabel);
  }

  function santriwatitingkatpondokan()
  {
      $nis = $this->input->post("nis");
      $variabel['tingkat'] = $this->m_santriwati->lihattingkatanpondokan($nis);
      $this->load->view('back-end/perizinan_p/santriwati/v_santri_tingkatpondokan',$variabel);
  }

  function santriwatiberkas()
  {
      $nis = $this->input->get("nis");
      $exec = $this->m_santriwati->lihatdatasatu($nis);
      if ($exec->num_rows()>0){
          $variabel['santriwati'] = $exec->row_array();
          $variabel['data'] = $this->m_santriwati->lihatdataberkas($nis);
          $this->layout->renderizinp2('back-end/perizinan_p/santriwati/v_santriberkas',$variabel,'back-end/perizinan_p/santriwati/v_santriberkas_js');
      } else {
          redirect(base_url("admin/perizinansantriwati/santriwati"));
      }

  }
  //akhir//
//Bagian Utak Atik By Ilyas
  function datakeluar(){
      $variabel['data'] = $this->m_perizinan_p->lihatdata();
      $this->layout->renderizinp2('back-end/perizinan_p/v_data_keluar',$variabel,'back-end/perizinan_p/keluar_js');
  }

  function lihatdatakeluar(){
      $id_keluar = $this->input->post("id");
      $variabel['lihat'] = $this->m_perizinan_p->lihatdatasatuan($id_keluar)->row_array();
      $this->load->view('back-end/perizinan_p/v_lihat_data_keluar',$variabel);
  }

  function datasantritampil(){
      $id=$this->input->post('id');
      $data=$this->m_perizinan_p->tampildatasantri($id)->result();
      echo json_encode($data);
  }

  function datapenjemputtampil(){
      $id=$this->input->post('id');
      $data=$this->m_perizinan_p->tampildatapenjemput($id)->result();
      echo json_encode($data);
  }

  function ceknissantri(){
    $nis_santri = $this->input->post('nis_santri');
    if ($this->m_perizinan_p->cekdatasantri($nis_santri) == 1){
      echo 1;
    }
    else{
      echo 0;
    }
  }

  function cekjatahizin(){
    $nis_santri = $this->input->post('nis_santri');
    $tgl_sekarang = strtotime(date("Y-m-d H:i:s")); //strtotime untuk mengubah menjadi detik
    $ambiltglkeluar = $this->m_perizinan_p->ambiltglkeluar($nis_santri)->tanggal_keluar;
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
          $ceknis = $this->m_perizinan_p->cekdatasantri($nis);
          if ($ceknis > 0){
              if ($id_penjemput=='Baru'){
                  $exectambahpenjemput = $this->m_perizinan_p->tambahdatapenjemput($penjemput);
                  $ambilidpenjemput = $this->m_perizinan_p->ambilidpenjemput($no_identitas);
                  $izinkeluarpb=array(
                      'nis_santri'=> $this->input->post('nis_santri'),
                      'tanggal_keluar'=> $this->input->post('tanggal_keluar'),
                      'harus_kembali'=> $this->input->post('harus_kembali'),
                      'keperluan'=> $this->input->post('keperluan'),
                      'id_penjemput'=> $ambilidpenjemput->id_penjemput,
                      'petugas'=> $nip_admin,
                      'status_keluar'=> $status_keluar,
                  );
                  $exectambahizin = $this->m_perizinan_p->tambahizinkeluar($izinkeluarpb);
                  redirect('admin/perizinan/suratizin');
              }
              else{
                  $exectambahizin = $this->m_perizinan_p->tambahizinkeluar($izinkeluar);
                  redirect('admin/perizinansantriwati/suratizin');
              }
          }
          else {
            redirect(base_url("admin/perizinan/keluar?msgnis=0"));
          }
      }

      else{
          $variabel['id_penjemput']=$this->m_perizinan_p->ambildatapenjemput();
          $this->layout->renderizinp('back-end/perizinan_p/v_keluarpondok',$variabel,'back-end/perizinan_p/keluar_js');
      }
  }

  function suratizin(){
      $execsuratizin = $this->m_perizinan_p->tampilsuratizin();
      $variabel['datasurat'] = $execsuratizin->row_array();
      $this->layout->renderizinp('back-end/perizinan_p/v_suratizin',$variabel,'back-end/perizinan_p/keluar_js');
  }

  function cetak_suratizin(){
      $id_keluar = $this->input->get("id");
      $execsuratizin = $this->m_perizinan_p->tampilsuratizinsatuan($id_keluar);
      $variabel['datasurat'] = $execsuratizin->row_array();
      $this->layout->renderizinp('back-end/perizinan_p/v_suratizin',$variabel,'back-end/perizinan_p/keluar_js');
  }

  function izinhapus(){
      $id_keluar = $this->input->get("id");
      $exec = $this->m_perizinan_p->hapus($id_keluar);
      redirect(base_url()."admin/perizinansantriwati/datakeluar?msg=1");
  }

  function penjemputhapus(){
      $id_penjemput = $this->input->get("id");
      $exec = $this->m_perizinan_p->jemputhapus($id_penjemput);
      redirect(base_url()."admin/perizinansantriwati/keluar?msg=1");
  }

  function laporankeluar(){
    $tahun = $this->input->post('tahun');
    $bulan = $this->input->post('bulan');
    $variabel['tahun'] = $tahun;
    $variabel['bulan'] = $bulan;
    $variabel['totkeluar'] = $this->m_perizinan_p->totalkeluar($tahun,$bulan);;
    $variabel['data'] = $this->m_perizinan_p->laporankeluar($tahun,$bulan);
    $this->layout->renderlaporanp('back-end/perizinan_p/v_lap_keluar',$variabel);
  }
//Sampai Sini Bagian Utak Atik By Ilyas

  function datakembali()
  {
      $variabel['santrikembali'] = $this->m_perizinan_p->datasantrikembali();
      $this->layout->renderizinp2('back-end/perizinan_p/data_kembali',$variabel,'back-end/perizinan_p/denda_js');
  }

  function kembali()
  {
      $variabel['santrikeluar'] = $this->m_perizinan_p->datasantrikeluar();
      $this->layout->renderizinp('back-end/perizinan_p/kembalipondok',$variabel);
  }

  function kembalidenda()
  {
    $id_keluar = $this->input->post("id_keluar");
    $datadenda = $this->m_denda_p->aturdenda();
    foreach ($datadenda->result_array() as $row) {
        $denda = $row['denda_perjam'];
        $dendamaks = $row['denda_maks'];
      }
    $santrikeluar = $this->m_perizinan_p->datasantrikeluarsatu($id_keluar);
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
    $variabel['santrikeluarlagi'] = $this->m_perizinan_p->datasantrikeluar();
    $this->layout->renderizinp('back-end/perizinan_p/kembalipondok1',$variabel);
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
      $exec = $this->m_perizinan_p->tambahdatakembali($arraykembali);
      $exec1 = $this->m_perizinan_p->updatedatakeluar($id_keluar);
      if ($denda > 0){
        $ambiliddatakembali = $this->m_perizinan_p->ambilidkembaliterakhir();
        foreach ($ambiliddatakembali->result_array() as $row) {
            $id_kembali = $row['id_kembali'];
          }
        $arraydenda=array(
          'id_kembali' => $id_kembali,
          'besar_denda' => $denda,
          'status_pembayaran' => $status_pembayaran
        );
        $exec2= $this->m_perizinan_p->tambahdatadenda($arraydenda);
      }
      redirect(base_url("admin/perizinansantriwati/datakembali"));

  }

  function laporankembali(){

    $tahun = $this->input->post('tahun');
    $bulan = $this->input->post('bulan');
    $variabel['bulan'] = $bulan;
    $variabel['tahun'] = $tahun;
    $variabel['semuadenda'] = $this->m_denda_p->semuadenda($tahun,$bulan);
    $variabel['kenadenda'] = $this->m_perizinan_p->kenadenda($tahun,$bulan);
    $variabel['data'] = $this->m_perizinan_p->laporankembali($tahun,$bulan);
    $this->layout->renderlaporanp('back-end/perizinan_p/v_lap_kembali',$variabel,'back-end/perizinan_p/denda_js');
  }

///////////////////denda ini denda//////////////////////////

  function datadenda()
  {
      $variabel['data'] = $this->m_denda_p->lihatdata();
      $this->layout->renderizinp2('back-end/perizinan_p/v_denda',$variabel,'back-end/perizinan_p/denda_js');
  }

  function riwayatbayardenda()
  {
      $nis = $this->input->get("nis");
      $denda = $this->input->get("denda");
      $variabel['id_denda'] = $this->input->get("denda");
      $variabel['nis'] = $this->input->get("nis");
      $variabel['totalbayar'] = $this->m_denda_p->totalbayar($denda);
      $variabel['statusdenda'] = $this->m_denda_p->statusdenda($denda);
      $variabel['data'] = $this->m_denda_p->lihatbayar($nis);
      $this->layout->renderizinp('back-end/perizinan_p/v_data_bayar_denda',$variabel,'back-end/perizinan_p/denda_js');
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
        $besardenda = $this->m_denda_p->besardenda($id_denda);
          $exec = $this->m_denda_p->tambahbayar($array);
          if ($exec) {
            $totalbayar = $this->m_denda_p->jumlahbayar($id_denda);
            if ($totalbayar >= $besardenda){
              $arrayupdate=array(
                'status_pembayaran' => 'lunas'
              );
              $this->m_denda_p->editdenda($id_denda,$arrayupdate);
              redirect(base_url("admin/perizinansantriwati/riwayatbayardenda?nis=".$nis."&denda=".$id_denda."&msg=1"));
            } else
            redirect(base_url("admin/perizinansantriwati/riwayatbayardenda?nis=".$nis."&denda=".$id_denda."&msg=1"));

          }
          else redirect(base_url("admin/perizinansantriwati/riwayatbayardenda?nis=".$nis."&denda=".$id_denda."&msg=0"));
      }

  }

  function bayardendahapus(){
    $nis = $this->input->get("nis");
    $id_denda = $this->input->get("id_denda");
    $id_bayar = $this->input->get("id_bayar");
    $besardenda = $this->m_denda_p->besardenda($id_denda);
    $exec = $this->m_denda_p->hapus($id_bayar);
    if ($exec){
      $totalbayar = $this->m_denda_p->jumlahbayar($id_denda);
      if ($totalbayar < $besardenda){
        $arrayupdate=array(
          'status_pembayaran' => 'hutang'
        );
        $this->m_denda_p->editdenda($id_denda,$arrayupdate);
        redirect(base_url("admin/perizinansantriwati/riwayatbayardenda?nis=".$nis."&denda=".$id_denda."&hps=1"));
    } else redirect(base_url("admin/perizinansantriwati/riwayatbayardenda?nis=".$nis."&denda=".$id_denda."&hps=1"));
  } else redirect(base_url("admin/perizinansantriwati/riwayatbayardenda?nis=".$nis."&denda=".$id_denda."&hps=0"));
  }


function laporandenda(){

  $tahun = $this->input->post('tahun');
  $bulan = $this->input->post('bulan');
  $variabel['bulan'] = $bulan;
  $variabel['tahun'] = $tahun;
  $variabel['semuadenda'] = $this->m_denda_p->semuadenda($tahun,$bulan);
  $variabel['dendalunas'] = $this->m_denda_p->dendalunas($tahun,$bulan);
  $variabel['dendahutang'] = $this->m_denda_p->dendahutang($tahun,$bulan);
  $variabel['data'] = $this->m_denda_p->laporandenda($tahun,$bulan);
  $this->layout->renderlaporanp('back-end/perizinan_p/v_lap_denda',$variabel,'back-end/perizinan_p/denda_js');
}

  function aturdenda(){
    $datadenda = $this->m_denda_p->aturdenda();
    $variabel['datadenda'] = $datadenda->row();
    $this->layout->renderizinp('back-end/perizinan_p/pengaturandenda',$variabel,'back-end/perizinan_p/denda_js');

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
        $exec = $this->m_denda_p->updateaturdenda($arrayupdate);
        redirect(base_url("admin/perizinan_p/aturdenda?&msg=1"));
      }
      else{
        redirect(base_url("admin/perizinan_p/aturdenda?&msg=0"));
      }}
      else{
        redirect(base_url("admin/perizinan_p/aturdenda?&msg=2"));
      }
  }

///////////////////////////akhiri semua denda ini!! ///////////////////////////////////////////
}
?>
