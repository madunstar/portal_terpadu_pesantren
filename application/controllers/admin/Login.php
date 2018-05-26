<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Login extends CI_Controller{
  function __construct(){
  	parent::__construct();
  	$this->load->model('back-end/m_login');
	}

	function index(){
		$this->layout->renderlogin('back-end/v_login');
  }

	function ceklogin(){
    if ($this->input->post()){
      $nama_akun = $this->input->post('nama_akun', TRUE);
      $kata_sandi = $this->input->post('kata_sandi', TRUE);
      $encrypt_sandi = md5($kata_sandi);
      $cekakun = $this->m_login->cekakun($nama_akun)->num_rows();
      if ($cekakun > 0){
        $cek = $this->m_login->ceklogin($nama_akun, $encrypt_sandi);
        if ($cek->num_rows() > 0) {
          foreach ($cek->result_array() as $datauser) {
            //$sess_data['logged_in'] = TRUE;
            $sess_data['nip_staff_admin'] = $datauser['nip_staff_admin'];
            $sess_data['nama_akun'] = $datauser['nama_akun'];
  					$sess_data['kode_role_admin'] = $datauser['kode_role_admin'];
            $sess_data['password'] = $datauser['kata_sandi'];
            $this->session->set_userdata($sess_data);
          }
          if ($this->session->userdata('kode_role_admin')=='adm_pd') {
  					redirect('admin/pendaftaran');
  				}
  				else if ($this->session->userdata('kode_role_admin')=='akd') {
  					redirect('admin/datamaster');
  				}
  				elseif ($this->session->userdata('kode_role_admin')=='adm_prz') {
  					redirect('admin/perizinan');
  				}
          elseif ($this->session->userdata('kode_role_admin')=='akdputra') {
  					redirect('admin/santriakd');
  				}
          elseif ($this->session->userdata('kode_role_admin')=='akdputri') {
  					redirect('admin/santriwatiakd');
  				}
        } else {
          redirect(base_url("admin/login?msg=2"));
        }
      }
      else {
        redirect(base_url("admin/login?msg=0"));
      }
    }
  }

	function logout(){
		$this->session->sess_destroy();
		redirect('admin/login');
	}
}
?>
