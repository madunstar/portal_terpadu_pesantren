<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Pendaftaran extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('back-end/pendaftaran/dashboard_model');
    $this->load->model('back-end/pendaftaran/pengaturan_model');
    $this->load->library('layout_pendaftaran');
  }

  function index()
  {
      $variabel['total_diverifikasi'] = $this->dashboard_model->get_count_status_diverifikasi();
      $this->layout->render('pendaftaran_backend/dashboard',$variabel);
  }

}
