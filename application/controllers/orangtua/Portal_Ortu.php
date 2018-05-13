<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class portal_ortu extends CI_Controller {
  public $nis = '';
  public function __construct(){
    parent::__construct();
    $this->nis = $this->session->userdata('nis_lokal');
    $this->load->model('back-end/datamaster/m_santri');
    $this->load->model('back-end/orangtua/m_prestasi_pelanggaran');
    $this->load->model('back-end/orangtua/m_biodatasantri');
    $this->load->model('back-end/orangtua/m_infaq');
    $this->load->model('back-end/orangtua/m_perizinan');
    $this->load->model('back-end/orangtua/m_informasi');
    $this->load->model('back-end/orangtua/m_dashboard');
    $this->load->library('layout_ortu');
    $this->load->helper('indo_helper');
    if ($this->session->userdata('nis_lokal')=='') {
        redirect('orangtua/login');
    }
  }

  public function index(){
    $variabel['nama_ortu'] = $this->session->userdata('nama_ortu');
    $variabel['nis_lokal'] = $this->session->userdata('nis_lokal');
    redirect(base_url('orangtua/portal_ortu/dashboard'));
  }

  function logout(){
    $this->session->unset_userdata('nis_lokal');
    $this->session->unset_userdata('nama_ortu');
    session_destroy();
    redirect('orangtua/login');
  }

  function ubahsandi(){
      if ($this->input->post()) {
        $array=array(
            'nis_lokal'=> $this->input->post('nis_lokal'),
            'nama_ortu'=> $this->input->post('nama_ortu'),
            'kata_sandi'=> $this->input->post('kata_sandi')
            );
          $nis_lokal = $this->input->post('nis_lokal');
          $kata_sandi = md5($this->input->post('kata_sandi'));
          $kata_sandibr = md5($this->input->post('kata_sandibr'));
          $rekata_sandibr = md5($this->input->post('rekata_sandibr'));
          $query = $this->m_dashboard->cekubahsandi($nis_lokal);
          if ($query->kata_sandi!=$kata_sandi) {
              $variabel['kata_sandi'] =$this->input->post('kata_sandi');
              $variabel['data'] = $array;
              $this->layout_ortu->render('orangtua/v_ubah_sandi',$variabel);
          } else if ($kata_sandibr!=$rekata_sandibr){
               $variabel['rekata_sandibr'] =$this->input->post('rekata_sandibr');
               $variabel['data'] = $array;
               $this->layout_ortu->render('orangtua/v_ubah_sandi',$variabel);
          } else {
              $exec = $this->m_dashboard->ubahsandi($nis_lokal,$kata_sandi,$kata_sandibr);
              if ($exec){
                  redirect(base_url('orangtua/portal_ortu/ubahsandi?nis='.$nis_lokal.'&msg=1'));
              }
          }
      } else {
          $exec = $this->m_dashboard->lihatubahsandi($this->nis);
          if ($exec->num_rows()>0){
              $variabel['data'] = $exec->row_array();
              $this->layout_ortu->render('orangtua/v_ubah_sandi',$variabel);
          } else {
              redirect(base_url('orangtua/portal_ortu/dashboard'));
          }
      }
  }

  function dashboard(){
    $exec = $this->m_santri->lihatdatasatu($this->nis);
    $bulanini = date('m');
    $tahunini = date('Y');
    $variabel['santri'] = $exec->row_array();
    $variabel['dataspp'] = $this->m_dashboard->bayarspp($this->nis,$bulanini,$tahunini);
    $variabel['datainfo'] = $this->m_dashboard->lihatinfo();
    $this->layout_ortu->render('orangtua/v_dashboard',$variabel,'orangtua/v_orangtua_js');
  }

  function prestasidanpelanggaran(){
    $exec = $this->m_santri->lihatdatasatu($this->nis);
    $variabel['santri'] = $exec->row_array();
    $variabel['dataprestasi'] = $this->m_prestasi_pelanggaran->lihatprestasi($this->nis);
    $variabel['datapelanggaran'] = $this->m_prestasi_pelanggaran->lihatpelanggaran($this->nis);
    $this->layout_ortu->render('orangtua/v_prestasi_pelanggaran',$variabel,'orangtua/v_orangtua_js');
  }

  function biodata(){
    $exec = $this->m_biodatasantri->lihatdatasatu($this->nis);
    if ($exec->num_rows()>0){
        $variabel['data'] = $exec ->row_array();
        $variabel['tingkat'] = $this->m_biodatasantri->lihattingkatan($this->nis); ;
        $variabel['tingkatpondokan'] = $this->m_biodatasantri->lihattingkatanpondokan($this->nis); ;
        $this->layout_ortu->render('orangtua/v_biodata',$variabel,'orangtua/v_orangtua_js');
    } else {
        redirect(base_url('santri/orangtua/biodata'));
    }
  }

  function databayarinfaq(){
    $variabel['data'] = $this->m_infaq->lihatdatasatu($this->nis);
    $this->layout_ortu->render('orangtua/v_data_infaq',$variabel,'orangtua/v_orangtua_js');
  }

  function statusperizinan(){
    $exec = $this->m_santri->lihatdatasatu($this->nis);
    $variabel['santri'] = $exec->row_array();
    $variabel['dataizin'] = $this->m_perizinan->lihatperizinan($this->nis);
    $variabel['datadenda'] = $this->m_perizinan->lihatdenda($this->nis);
      $this->layout_ortu->render('orangtua/v_status_izin',$variabel,'orangtua/v_orangtua_js');
  }

  function informasi(){
    $variabel['data'] = $this->m_informasi->lihatpengumuman();
    $this->layout_ortu->render('orangtua/v_pengumuman',$variabel,'orangtua/v_orangtua_js');
  }

}
