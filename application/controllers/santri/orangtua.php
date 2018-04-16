<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orangtua extends CI_Controller{
  public function __construct(){
    parent::__construct();
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
}
?>
