<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Perizinan extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    $this->load->model('back-end/perizinan/m_dashboard');
    $this->load->model('back-end/perizinan/m_perizinan');
    $this->load->model('back-end/perizinan/m_denda');
    $this->load->library('layout_pendaftaran');
    $this->load->helper('indo_helper');
    if ($this->session->userdata('nama_akun')=="") {
        redirect('admin/login/loginhalaman');
    }
    else if ($this->session->userdata('kode_role_admin') == 'adm_pd') {
        redirect('admin/pendaftaran');
    }
    else if ($this->session->userdata('kode_role_admin') == 'akd') {
        redirect('admin/datamaster');
    }
    $this->load->helper('text');
    setlocale(LC_ALL, 'INDONESIA');
  }

  function logout(){
      $this->session->unset_userdata('nip_staff_admin');
      $this->session->unset_userdata('nama_akun');
      $this->session->unset_userdata('kode_role_admin');
      session_destroy();
      redirect('admin/login/loginhalaman');
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
              $this->layout->render('back-end/perizinan/v_ubah_sandi',$variabel);
          } else if ($kata_sandibr!=$rekata_sandibr){
               $variabel['rekata_sandibr'] =$this->input->post('rekata_sandibr');
               $variabel['data'] = $array;
               $this->layout->render('back-end/perizinan/v_ubah_sandi',$variabel);
          } else {
              $exec = $this->m_dashboard->ubahsandi($nama_akun,$kata_sandi,$kata_sandibr);
              if ($exec){
                  redirect(base_url("admin/perizinan/ubahsandiadmin?nama_akun=".$nama_akun."&msg=1"));
              }
          }
      } else {
          $nama_akun = $this->input->get("nama_akun");
          $exec = $this->m_dashboard->lihatubahsandi($nama_akun);
          if ($exec->num_rows()>0){
              $variabel['data'] = $exec ->row_array();
              $this->layout->render('back-end/perizinan/v_ubah_sandi',$variabel);
          } else {
              redirect(base_url("admin/perizinan/dashboard"));
          }
      }
  }

  function index()
  {
      $variabel['nama_akun'] = $this->session->userdata('nama_akun');
      $this->layout->renderizin('back-end/perizinan/dashboard',$variabel);
  }

//Bagian Utak Atik By Ilyas
  function datakeluar()
  {
      $variabel['data'] = $this->m_perizinan->lihatdata();
      $this->layout->renderizin('back-end/perizinan/data_keluar',$variabel,'back-end/perizinan/denda_js');
  }

  function datasantritampil()
  {
      $id=$this->input->post('id');
      $data=$this->m_perizinan->tampildatasantri($id)->result();
      echo json_encode($data);
  }

  function datapenjemputtampil()
  {
      $id=$this->input->post('id');
      $data=$this->m_perizinan->tampildatapenjemput($id)->result();
      echo json_encode($data);
  }

  function keluar()
  {
      $nip_admin = $this->session->userdata('nip_staff_admin');
      $id_penjemput = $this->input->post('id_penjemput');
      $no_identitas = $this->input->post('no_identitas');
      $status_keluar = "keluar";
      if ($this->input->post()){
          $izinkeluar=array(
              'nis_santri'=> $this->input->post('nis_santri'),
              'tanggal_keluar'=> $this->input->post('tanggal_keluar'),
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
          //if ($this->m_perizinan->cekdatasantri($nis)==0) {
          // if($this->input->post('id_penjemput')==0){
          //   $this->no_identitas->ReadOnly = TRUE;
          // }
          if ($id_penjemput=='Baru'){
              $exectambahpenjemput = $this->m_perizinan->tambahdatapenjemput($penjemput);
              $ambilidpenjemput = $this->m_perizinan->ambilidpenjemput($no_identitas);
              $izinkeluarpb=array(
                  'nis_santri'=> $this->input->post('nis_santri'),
                  'tanggal_keluar'=> $this->input->post('tanggal_keluar'),
                  'keperluan'=> $this->input->post('keperluan'),
                  'id_penjemput'=> $ambilidpenjemput->id_penjemput,
                  'petugas'=> $nip_admin,
                  'status_keluar'=> $status_keluar,
              );
              $exectambahizin = $this->m_perizinan->tambahizinkeluar($izinkeluarpb);
              redirect('admin/perizinan/suratizin');
          }
          else{
              // $cek = $this->m_perizinan->cekdatasantri($nis);
              // $json_array = json_encode($cek);


              //if ($this->m_perizinan->cekdatasantri($nis)==0) {
              // if($this->input->post('id_penjemput')==0){
              //   $this->no_identitas->ReadOnly = TRUE;
              // }
              $exectambahizin = $this->m_perizinan->tambahizinkeluar($izinkeluar);

              //$exec2 = $this->m_perizinan->tambahdatapenjemput($penjemput);
              //$this->layout->renderizin('back-end/perizinan/keluarpondok','back-end/perizinan/keluar_js');
              redirect('admin/perizinan/suratizin');
          }
      }

      else{
          $variabel['id_penjemput']=$this->m_perizinan->ambildatapenjemput();
          $this->layout->renderizin('back-end/perizinan/keluarpondok',$variabel,'back-end/perizinan/keluar_js');
      }
  }

  function suratizin()
  {
      $execsuratizin = $this->m_perizinan->tampilsuratizin();
      $variabel['datasurat'] = $execsuratizin->row_array();
      $this->layout->renderizin('back-end/perizinan/v_suratizin',$variabel,'back-end/perizinan/keluar_js');
  }

  function penjemputhapus()
  {
      $id_penjemput = $this->input->get("id_penjemput");
      $exec = $this->m_perizinan->jemputhapus($id_penjemput);
      redirect(base_url()."admin/perizinan/keluar?msg=1");
  }
//Sampai Sini Bagian Utak Atik By Ilyas

  function datakembali()
  {
      $variabel['santrikembali'] = $this->m_perizinan->datasantrikembali();
      $this->layout->renderizin('back-end/perizinan/data_kembali',$variabel,'back-end/perizinan/denda_js');
  }

  function kembali()
  {
      $variabel['santrikeluar'] = $this->m_perizinan->datasantrikeluar();
      $this->layout->renderizin('back-end/perizinan/kembalipondok',$variabel);
  }

  function kembalidenda()
  {
    $nis_santri = $this->input->post("id_santri");
    $datadenda = $this->m_denda->aturdenda();
    foreach ($datadenda->result_array() as $row) {
        $denda = $row['denda_perjam'];
        $dendamaks = $row['denda_maks'];
      }
    $santrikeluar = $this->m_perizinan->datasantrikeluarsatu($nis_santri);
    foreach ($santrikeluar->result_array() as $santri) {
        $tanggalkeluar = $santri['tanggal_keluar'];
      }
      $tglkmblshrsny = date('Y-m-d H:i:s', strtotime('+1 days 07:00:00', strtotime($tanggalkeluar)));
      $tglkmblshrsny2 = date('Y-m-d H:i:s', strtotime('+2 days 07:00:00', strtotime($tanggalkeluar)));
      $today = date("Y-m-d H:i:s");
      if ($today > $tglkmblshrsny) {
        if ($today < $tglkmblshrsny2){
        $jamtoday = date("H:i");
        $jamtoday = new DateTime($jamtoday);
        $jamkembali = new DateTime("07:00");
        $selisihjam = $jamkembali->diff($jamtoday);
        $jamselisih = $selisihjam->format('%h');
        $totaldenda = $jamselisih*$denda;
        if ($totaldenda < $dendamaks){
          $bayardenda = $totaldenda;
        }
        elseif ($totaldenda >= $dendamaks) {
          $bayardenda = $dendamaks;
        }
      }
      elseif ($today > $tglkmblshrsny2 ) {
         $bayardenda = $dendamaks;
      }
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
      redirect(base_url("admin/perizinan/datakembali"));

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
      $this->layout->renderizin('back-end/perizinan/v_denda',$variabel,'back-end/perizinan/denda_js');
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
              redirect(base_url("admin/perizinan/riwayatbayardenda?nis=".$nis."&denda=".$id_denda."&msg=1"));
            } else
            redirect(base_url("admin/perizinan/riwayatbayardenda?nis=".$nis."&denda=".$id_denda."&msg=1"));

          }
          else redirect(base_url("admin/perizinan/riwayatbayardenda?nis=".$nis."&denda=".$id_denda."&msg=0"));
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
        redirect(base_url("admin/perizinan/riwayatbayardenda?nis=".$nis."&denda=".$id_denda."&hps=1"));
    } else redirect(base_url("admin/perizinan/riwayatbayardenda?nis=".$nis."&denda=".$id_denda."&hps=1"));
  } else redirect(base_url("admin/perizinan/riwayatbayardenda?nis=".$nis."&denda=".$id_denda."&hps=0"));
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
        redirect(base_url("admin/perizinan/aturdenda?&msg=1"));
      }
      else{
        redirect(base_url("admin/perizinan/aturdenda?&msg=0"));
      }}
      else{
        redirect(base_url("admin/perizinan/aturdenda?&msg=2"));
      }
  }

///////////////////////////akhiri semua denda ini!! ///////////////////////////////////////////
}
?>
