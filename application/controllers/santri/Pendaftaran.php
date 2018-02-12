<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pendaftaran extends CI_Controller {
function __construct()
{
  parent::__construct();

  $this->load->model('back-end/pendaftaran/m_santri');
  $this->load->library('layout_pendaftaran');
}
/**
* Index Page for this controller.
*
* Maps to the following URL
*    http://example.com/index.php/welcome
*  - or -
*    http://example.com/index.php/welcome/index
*  - or -
* Since this controller is set as the default controller in
* config/routes.php, it's displayed at http://example.com/
*
* So any other public methods not prefixed with an underscore will
* map to /index.php/welcome/<method_name>
* @see https://codeigniter.com/user_guide/general/urls.html
*/
function index()
{

    $this->layout_pendaftaran->renderregister('calonsantri/register');
}

function dashboard()
{
    $this->layout_pendaftaran->renderfront('calonsantri/register');

}

function biodata()
{
    $this->layout_pendaftaran->renderfront('calonsantri/v_biodata');

}

function addakun()
{
  $tahun_ajaran = $this->m_santri->get_tahun_ajaran();
  $tgl_daftar = date('Y-m-d');
  $today = date('Ymd').'0000';
  $cur_row = $this->m_santri->get_count_biodata();
  if($cur_row > 0){
    $last_bio = $this->m_santri->get_last_biodata();
    $next =  $last_bio + 1;

    $id_pendaftar = $today + $next;
  } else {

    $id_pendaftar = $today + 1;
  }
    if ($this->input->post()){
      $array=array(
        'email_pendaftar'=> $this->input->post('email'),
        'kata_sandi'=> $this->input->post('sandi'),
        'status_pendaftaran'=> ('tidak lengkap'),
        'status_biodata'=> ('tidak lengkap'),
        'status_berkas'=> ('tidak lengkap'),
        'status_pembayaran'=> ('tidak lengkap'),
        'jenis_pendaftaran'=> $this->input->post('tingkat'),
        'tanggal_daftar'=> $tgl_daftar,
        'status_akun'=>('tidak aktif'),
        'tahun_ajaran'=> $tahun_ajaran
      );
      if ($this->m_santri->cekdata($this->input->post('email'))==0) {
        $exec = $this->m_santri->tambahakun($array);
        if ($exec) {
          $email = $this->input->post('email');
          $array_bio = array(
            'id_biodata' => $id_pendaftar,
            'email_pendaftar' => $email
          );
          $this->m_santri->tambahbio($array_bio);
          redirect(base_url("santri/pendaftaran/index?msg=1"));

        }
        else {
          redirect(base_url("santri/pendaftaran/index?msg=0"));
        }

      } else {
        redirect(base_url("santri/pendaftaran/index?msg=0"));
      }
    } else
      redirect(base_url("santri/pendaftaran/index"));
}



}
