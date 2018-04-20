<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orangtua extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('back-end/datamaster/m_santri');
    $this->load->model('back-end/orangtua/m_prestasi_pelanggaran');
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
}
?>
