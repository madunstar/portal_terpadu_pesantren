<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Login extends CI_Controller{
    function __construct(){
		parent::__construct();
		$this->load->model('back-end/M_login');
		$this->load->library(array('form_validation','session'));
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		$this->load->database();
	}

	function index(){
		//$this->layout->render('back-end/v_login');
		$this->load->view('back-end/v_login');
    }

	function loginhalaman(){
		$this->form_validation->set_rules('nama_akun','Nama Akun','required|trim');
		$this->form_validation->set_rules('kata_sandi','Kata Sandi','required');
		if ($this->form_validation->run()==FALSE){
			$this->layout->render('back-end/v_login');
		}else{
			$data = array('nama_akun' => $this->input->post('nama_akun', TRUE),
						        'kata_sandi' => md5($this->input->post('kata_sandi', TRUE)));
			$cek = $this->M_login->mloginaksi($data);
			if ($cek->num_rows() == 1) {
				foreach ($cek->result() as $sess) {
					$sess_data['logged_in'] = TRUE; //'Sudah Login'
          $sess_data['nip_staff_admin'] = $sess->nip_staff_admin;
          $sess_data['nama_akun'] = $sess->nama_akun;
					$sess_data['kode_role_admin'] = $sess->kode_role_admin;
					$this->session->set_userdata($sess_data);
					//return TRUE;
				}
				if ($this->session->userdata('kode_role_admin')=='adm_pd') {
					redirect('admin/Pendaftaran');
				}
				else if ($this->session->userdata('kode_role_admin')=='akd') {
					redirect('admin/Datamaster');
				}
				elseif ($this->session->userdata('kode_role_admin')=='keu') {
					redirect('admin/Pendaftaran');
				}
			}
			else {
				echo "<script>
						alert('Gagal Login :  Cek username  dan password anda!');
						history.go(-1);
			 		  </script>";
			}
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/Login/loginhalaman');
	}
}
?>
