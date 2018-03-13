<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Perizinan extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('back-end/perizinan/m_denda');
    $this->load->library('layout_pendaftaran');
    if ($this->session->userdata('nama_akun')=="") {
        redirect('admin/login/loginhalaman');
    }
    if ($this->session->userdata('kode_role_admin') != 'adm_prz') {
        redirect('admin/pendaftaran');
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

  function index()
  {
      $variabel = '';
      $this->layout->renderizin('back-end/perizinan/dashboard',$variabel);
  }

  function datakeluar()
  {
      $variabel = '';
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
          $exec = $this->m_denda->tambahbayar($array);
          if ($exec) redirect(base_url("admin/perizinan/riwayatbayardenda?nis=".$nis."&denda=".$id_denda."&msg=1"));
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
