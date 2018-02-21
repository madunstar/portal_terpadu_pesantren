<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Register extends CI_Controller {
function __construct()
{
 parent::__construct();
 $this->load->model('back-end/pendaftaran/m_akunsantri');
 $this->load->library('layout_pendaftaran');
}

function index()
{
    $aktif = $this->m_akunsantri->get_pengaturan();
    if ($aktif == 0) {
      $this->load->view('pendaftarannotfound');
    } else if ($aktif == 1) {
        $this->layout_pendaftaran->renderregister('calonsantri/register');
      }
}
//membuat akun santri//
function addakun()
{
  $kata_sandi = $this->input->post('sandi');
  $encrypt_sandi = md5($kata_sandi);
  $tahun_ajaran = $this->m_akunsantri->get_tahun_ajaran();
  $tgl_daftar = date('Y-m-d');
  $today = date('Ymd').'0000';
  $cur_row = $this->m_akunsantri->get_count_biodata();
  if($cur_row > 0){
    $last_bio = $this->m_akunsantri->get_last_biodata();
    $next =  $last_bio + 1;

    $id_pendaftar = $today + $next;
  } else {

    $id_pendaftar = $today + 1;
  }
    if ($this->input->post()){
      $array=array(
        'email_pendaftar'=> $this->input->post('email'),
        'kata_sandi'=> $encrypt_sandi,
        'status_pendaftaran'=> ('tidak lengkap'),
        'status_biodata'=> ('tidak lengkap'),
        'status_berkas'=> ('tidak lengkap'),
        'status_pembayaran'=> ('tidak lengkap'),
        'jenis_pendaftaran'=> $this->input->post('tingkat'),
        'tanggal_daftar'=> $tgl_daftar,
        'status_akun'=>('tidak aktif'),
        'tahun_ajaran'=> $tahun_ajaran
      );
      if ($this->m_akunsantri->cekdata($this->input->post('email'))==0) {
        $exec = $this->m_akunsantri->tambahakun($array);
        if ($exec) {
          $email = $this->input->post('email');
          $array_bio = array(
            'id_biodata' => $id_pendaftar,
            'email_pendaftar' => $email
          );
          $array_bayar = array(
            'id_pembayaran' => $id_pendaftar,
            'email_pendaftar' => $email
          );
          $this->m_akunsantri->tambahbio($array_bio);
          $this->m_akunsantri->tambahbayar($array_bayar);
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
//akhir add akun santri
}
