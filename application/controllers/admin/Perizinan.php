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

  function datadenda()
  {
      $variabel['data'] = $this->m_denda->lihatdata();
      $this->layout->renderizin('back-end/perizinan/v_denda',$variabel,'back-end/perizinan/denda_js');
  }

  function riwayatbayardenda()
  {
      $nis = $this->input->get("nis");
      $variabel['data'] = $this->m_denda->lihatbayar($nis);
      $this->layout->renderizin('back-end/perizinan/v_data_bayar_denda',$variabel,'back-end/perizinan/denda_js');
  }

  function suratizin()
  {
      $variabel = '';
      $this->layout->renderizin('back-end/perizinan/v_suratizin',$variabel,'back-end/perizinan/denda_js');
  }
}
?>
