<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class portal_ortu_p extends CI_Controller {
  public $id = '';
  public function __construct(){
    parent::__construct();
    $this->id = $this->session->userdata('id_ortu');
    $this->load->model('back-end/datamaster/m_santriwati');
    $this->load->model('back-end/orangtua_p/m_prestasi_pelanggaran_p');
    $this->load->model('back-end/orangtua_p/m_biodatasantri_p');
    $this->load->model('back-end/orangtua_p/m_infaq_p');
    $this->load->model('back-end/orangtua_p/m_perizinan_p');
    $this->load->model('back-end/orangtua_p/m_informasi');
    $this->load->model('back-end/orangtua_p/m_dashboard_p');
    $this->load->library('layout_ortu');
    $this->load->helper('indo_helper');
    if ($this->session->userdata('id_ortu')=='') {
        redirect('orangtua/login');
    }
  }

  public function index(){
    $variabel['nama_ortu'] = $this->session->userdata('nama_ortu');
    $variabel['id_ortu'] = $this->session->userdata('id_ortu');
    redirect(base_url('orangtua/portal_ortu_p/dashboard'));
  }

  function logout(){
    $this->session->unset_userdata('id_ortu');
    $this->session->unset_userdata('nama_ortu');
    session_destroy();
    redirect('orangtua/login');
  }

  function ubahsandi(){
      if ($this->input->post()) {
        $array=array(
            'id_ortu'=> $this->input->post('id_ortu'),
            'nama_ortu'=> $this->input->post('nama_ortu'),
            'kata_sandi'=> $this->input->post('kata_sandi'),
            'email_ortu'=> $this->input->post('email_ortu')
            );
          $id_ortu = $this->input->post('id_ortu');
          $kata_sandi = md5($this->input->post('kata_sandi'));
          $kata_sandibr = md5($this->input->post('kata_sandibr'));
          $rekata_sandibr = md5($this->input->post('rekata_sandibr'));
          $query = $this->m_dashboard_p->cekubahsandi($id_ortu);
          if ($query->kata_sandi!=$kata_sandi) {
              $variabel['kata_sandi'] =$this->input->post('kata_sandi');
              $variabel['data'] = $array;
              $this->layout_ortu->render('orangtua_p/v_ubah_sandi',$variabel);
          } else if ($kata_sandibr!=$rekata_sandibr){
               $variabel['rekata_sandibr'] =$this->input->post('rekata_sandibr');
               $variabel['data'] = $array;
               $this->layout_ortu->render('orangtua_p/v_ubah_sandi',$variabel);
          } else {
              $exec = $this->m_dashboard_p->ubahsandi($id_ortu,$kata_sandi,$kata_sandibr);
              if ($exec){
                  redirect(base_url('orangtua/portal_ortu_p/ubahsandi?id='.$id_ortu.'&msg=1'));
              }
          }
      } else {
          $exec = $this->m_dashboard_p->lihatubahsandi($this->id);
          if ($exec->num_rows()>0){
              $variabel['data'] = $exec->row_array();
              $this->layout_ortu->render('orangtua_p/v_ubah_sandi',$variabel);
          } else {
              redirect(base_url('orangtua/portal_ortu_p/dashboard'));
          }
      }
  }

  function dashboard(){
    $exec = $this->m_santriwati->lihatdatasatu($this->id);
    $bulanini = date('m');
    $tahunini = date('Y');
    $variabel['santri'] = $exec->row_array();
    $variabel['dataspp'] = $this->m_dashboard_p->bayarspp($this->id,$bulanini,$tahunini);
    $variabel['datainfo'] = $this->m_dashboard_p->lihatinfo();
    $variabel['dataizin'] = $this->m_dashboard_p->datakeluarterakhir($this->id);
    $this->layout_ortu->render('orangtua_p/v_dashboard',$variabel,'orangtua_p/v_orangtua_js');
  }

  function prestasidanpelanggaran(){
    $exec = $this->m_santriwati->lihatdatasatu($this->id);
    $variabel['santri'] = $exec->row_array();
    $variabel['dataprestasi'] = $this->m_prestasi_pelanggaran_p->lihatprestasi($this->id);
    $variabel['datapelanggaran'] = $this->m_prestasi_pelanggaran_p->lihatpelanggaran($this->id);
    $this->layout_ortu->render('orangtua_p/v_prestasi_pelanggaran',$variabel,'orangtua_p/v_orangtua_js');
  }

  function biodata(){
    $exec = $this->m_biodatasantri->lihatdatasatu($this->id);
    if ($exec->num_rows()>0){
        $variabel['data'] = $exec ->row_array();
        $variabel['tingkat'] = $this->m_biodatasantri->lihattingkatan($this->id); ;
        $variabel['tingkatpondokan'] = $this->m_biodatasantri->lihattingkatanpondokan($this->id); ;
        $this->layout_ortu->render('orangtua_p/v_biodata',$variabel,'orangtua_p/v_orangtua_js');
    } else {
        redirect(base_url('santri/orangtua/biodata'));
    }
  }

  function databayarinfaq(){
    $variabel['data'] = $this->m_infaq_p->lihatdatasatu($this->id);
    $this->layout_ortu->render('orangtua_p/v_data_infaq',$variabel,'orangtua_p/v_orangtua_js');
  }

  function statusperizinan(){
    $exec = $this->m_santriwati->lihatdatasatu($this->id);
    $variabel['santri'] = $exec->row_array();
    $variabel['dataizin'] = $this->m_perizinan_p->lihatperizinan($this->id);
    $variabel['datadenda'] = $this->m_perizinan_p->lihatdenda($this->id);
      $this->layout_ortu->render('orangtua_p/v_status_izin',$variabel,'orangtua_p/v_orangtua_js');
  }

  function informasi(){
    $variabel['data'] = $this->m_informasi->lihatpengumuman();
    $this->layout_ortu->render('orangtua_p/v_pengumuman',$variabel,'orangtua_p/v_orangtua_js');
  }

}
