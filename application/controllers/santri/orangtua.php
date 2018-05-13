<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Orangtua extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('back-end/datamaster/m_santri');
    $this->load->model('back-end/orangtua/m_prestasi_pelanggaran');
    $this->load->model('back-end/orangtua/m_biodatasantri');
    $this->load->model('back-end/orangtua/m_infaq');
    $this->load->model('back-end/orangtua/m_perizinan');
    $this->load->model('back-end/orangtua/m_informasi');
    $this->load->model('back-end/orangtua/m_dashboard');
    $this->load->library('layout_ortu');
    $this->load->helper('indo_helper');
  }

  public function index()
  {
    redirect(base_url("santri/orangtua/dashboard"));
  }

  function dashboard(){
    $nis = 1;
    $exec = $this->m_santri->lihatdatasatu($nis);
    $bulanini = date('m');
    $tahunini = date('Y');
    $variabel['santri'] = $exec->row_array();
    $variabel['dataspp'] = $this->m_dashboard->bayarspp($nis,$bulanini,$tahunini);
    $variabel['datainfo'] = $this->m_dashboard->lihatinfo();
    $variabel['dataizin'] = $this->m_dashboard->datakeluarterakhir($nis);
    $this->layout_ortu->render('orangtua/v_dashboard',$variabel,'orangtua/v_orangtua_js');
  }

  function prestasidanpelanggaran(){
    $nis = 1;

    $exec = $this->m_santri->lihatdatasatu($nis);
    $variabel['santri'] = $exec->row_array();
    $variabel['dataprestasi'] = $this->m_prestasi_pelanggaran->lihatprestasi($nis);
    $variabel['datapelanggaran'] = $this->m_prestasi_pelanggaran->lihatpelanggaran($nis);
    $this->layout_ortu->render('orangtua/v_prestasi_pelanggaran',$variabel,'orangtua/v_orangtua_js');
  }

  function biodata()
    {
        //$nis = $this->session->userdata("nis");
        $nis = '1';
        $exec = $this->m_biodatasantri->lihatdatasatu($nis);
        if ($exec->num_rows()>0){
            $variabel['data'] = $exec ->row_array();
            $variabel['tingkat'] = $this->m_biodatasantri->lihattingkatan($nis); ;
            $variabel['tingkatpondokan'] = $this->m_biodatasantri->lihattingkatanpondokan($nis); ;
            $this->layout_ortu->render('orangtua/v_biodata',$variabel,'orangtua/v_orangtua_js');
        } else {
            redirect(base_url("santri/orangtua/biodata"));
        }
    }

    function databayarinfaq(){
      //$nis = $this->session->userdata("nis");
      $nis = '1';
      $variabel['data'] = $this->m_infaq->lihatdatasatu($nis);
      $this->layout_ortu->render('orangtua/v_data_infaq',$variabel,'orangtua/v_orangtua_js');
    }

    function statusperizinan(){
      $nis = '1';
      $exec = $this->m_santri->lihatdatasatu($nis);
      $variabel['santri'] = $exec->row_array();
      $variabel['dataizin'] = $this->m_perizinan->lihatperizinan($nis);
      $variabel['datadenda'] = $this->m_perizinan->lihatdenda($nis);
        $this->layout_ortu->render('orangtua/v_status_izin',$variabel,'orangtua/v_orangtua_js');
    }

    function informasi()
    {
      $variabel['data'] = $this->m_informasi->lihatpengumuman();
      $this->layout_ortu->render('orangtua/v_pengumuman',$variabel,'orangtua/v_orangtua_js');
    }

}
