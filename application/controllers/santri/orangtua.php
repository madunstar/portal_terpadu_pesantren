<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orangtua extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('back-end/datamaster/m_santri');
    $this->load->model('back-end/orangtua/m_prestasi_pelanggaran');
    $this->load->model('back-end/orangtua/m_biodatasantri');
    $this->load->model('back-end/orangtua/m_infaq');
    $this->load->library('layout_ortu');
  }

  public function index()
  {
    redirect(base_url("santri/orangtua/dashboard"));
  }

  function dashboard(){
    $variabel = "";
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


}

