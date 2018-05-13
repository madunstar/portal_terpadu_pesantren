<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Register extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('back-end/orangtua/m_akunortu');
    $this->load->library('layout_pendaftaran');
  }

  function index(){
    $this->layout_pendaftaran->renderregister('orangtua/v_register');
  }

  function addakun(){
    $kata_sandi = $this->input->post('kata_sandi');
    $encrypt_sandi = md5($kata_sandi);
    $tgl_daftar = date('Ymd').'0000';
    $cur_row = $this->m_akunortu->get_count_akun();
    if($cur_row > 0){
      $last_akun = $this->m_akunortu->get_last_akun();
      $next = $last_akun + 1;
      $id_ortu = $tgl_daftar + $next;
    } else {
      $id_ortu = $tgl_daftar + 1;
    }
    if ($this->input->post()){
      $array=array(
        'id_ortu' => $id_ortu,
        'nis_lokal' => $this->input->post('nis_lokal'),
        'nama_ortu' => $this->input->post('nama_ortu'),
        'kata_sandi' => $encrypt_sandi
      );
      if ($this->m_akunortu->cekdata($this->input->post('nis_lokal'))==1){
        $exec = $this->m_akunortu->tambahakun($array);
        redirect(base_url("orangtua/login"));
      } else{
        redirect(base_url("orangtua/register?msg=0"));
      }
    } else{
      redirect(base_url("orangtua/register"));
    }
  }
}
