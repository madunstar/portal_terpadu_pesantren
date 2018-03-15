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

  function datakeluar()
  {
      $variabel['data'] = $this->m_perizinan->lihatdata();
      $this->layout->renderizin('back-end/perizinan/data_keluar',$variabel,'back-end/perizinan/denda_js');
  }

  function keluar()
  {
      $variabel = '';
      $this->layout->renderizin('back-end/perizinan/keluarpondok',$variabel);
  }

  function datakembali()
  {
      $variabel = '';
      $this->layout->renderizin('back-end/perizinan/data_kembali',$variabel,'back-end/perizinan/denda_js');
  }

  function kembali()
  {
      $variabel = '';
      $this->layout->renderizin('back-end/perizinan/kembalipondok',$variabel);
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
///////////////////////////akhiri semua denda ini!! ///////////////////////////////////////////


  function suratizin()
  {
      $variabel = '';
      $this->layout->renderizin('back-end/perizinan/v_suratizin',$variabel,'back-end/perizinan/denda_js');
  }
}
?>
