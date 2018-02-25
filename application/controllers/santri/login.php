<?php defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller {
function __construct()
{
  parent::__construct();
  $this->load->model('back-end/pendaftaran/m_santri');
  $this->load->model('back-end/pendaftaran/m_pembayaran');
  $this->load->model('back-end/pendaftaran/m_berkas');
  $this->load->model('back-end/pendaftaran/m_akunsantri');
  $this->load->model('back-end/pendaftaran/m_pengumuman');
  $this->load->model('back-end/pendaftaran/m_loginsantri');
  $this->load->model('back-end/pendaftaran/m_dashboard');
  $this->load->library('layout_pendaftaran');
}


function index(){
  $aktif = $this->m_akunsantri->get_pengaturan();
  if ($aktif == 0) {
    redirect(base_url("santri/daftarnotfound"));
  } else if ($aktif == 1) {
  $this->layout_pendaftaran->renderregister('calonsantri/login');
}

}

function ceklogin()
{
  if ($this->input->post()) {
    $sandi = $this->input->post('sandi');
    $katasandi = md5($sandi);
    $email = $this->input->post('email');
    $cekemail = $this->m_loginsantri->cekemail($email)->num_rows();

    if ($cekemail > 0) {
      $cekstatusakun =$this->m_loginsantri->cekemail($email);
      foreach ($cekstatusakun->result_array() as $akun) {
          $statusakun = $akun['status_akun'];
        }
      if ($statusakun == "tidak aktif"){
        redirect(base_url("santri/login?akun=0"));
      }
      elseif ($statusakun == "aktif"){
            $cek = $this->m_loginsantri->ceklogin($email, $katasandi);
            if ($cek->num_rows() > 0) {
              foreach ($cek->result_array() as $datasandi) {
            //login berhasil, buat session
              $sess_data['email'] = $datasandi['email_pendaftar'];
              $sess_data['user'] = $datasandi['email_pendaftar'];
              $sess_data['status'] = "loginsantri";
              $this->session->set_userdata($sess_data);
            }
            redirect(base_url("santri/pendaftaran/dashboard"));
        } else { redirect(base_url("santri/login?msg=2"));}
      }
    }
    else {
        redirect(base_url("santri/login?msg=0"));
      }
}
}

function logout(){
      $this->session->sess_destroy();
      redirect(base_url("santri/login"));
}
}
?>
