<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Login extends CI_Controller{
    function __construct(){
		parent::__construct();
		$this->load->model('back-end/orangtua/m_login');
		//$this->load->library(array('form_validation','session'));
		// $this->load->helper('url');
		// $this->load->helper(array('form', 'url'));
		// $this->load->database();
    $this->load->library('layout_pendaftaran');
	}

	function index(){
		$this->layout_pendaftaran->renderregister('orangtua/v_login');
  }

  function ceklogin(){
    if ($this->input->post()){
      $kata_sandi = $this->input->post('kata_sandi', TRUE);
      $encrypt_sandi = md5($kata_sandi);
      $id_ortu = $this->input->post('id_ortu', TRUE);
      $cekid = $this->m_login->cekid($id_ortu)->num_rows();
      if ($cekid > 0){
        $cekstatusakun =$this->m_login->cekid($id_ortu);
        foreach ($cekstatusakun->result_array() as $akun) {
            $statusakun = $akun['status_akun'];
          }
        if ($statusakun == "tidak aktif"){
          redirect(base_url("orangtua/login?msgid=0"));
        }
        elseif ($statusakun == "aktif"){
          $cek = $this->m_login->ceklogin($id_ortu, $encrypt_sandi);
          if ($cek->num_rows() > 0) {
            foreach ($cek->result_array() as $datauser) {
              $sess_data['id_ortu'] = $datauser['id_ortu'];
              $sess_data['nama_ortu'] = $datauser['nama_ortu'];
              $this->session->set_userdata($sess_data);
            }
            redirect(base_url("orangtua/portal_ortu/dashboard"));
          } else { redirect(base_url("orangtua/login?msg=2"));}
        }
      }
      else {
        redirect(base_url("orangtua/login?msg=0"));
      }
    }
  }

  function logout(){
        $this->session->sess_destroy();
        redirect(base_url("orangtua/login"));
  }
}
?>
