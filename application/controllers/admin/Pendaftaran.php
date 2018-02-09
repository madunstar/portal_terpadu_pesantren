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
      $this->layout_pendaftaran->render('pendaftaran_backend/dashboard',$variabel);
  }

  function pengaturan()
  {
    $variabel['tb_pengaturan_pendaftaran'] = $this->pengaturan_model->get_tb_pengaturan();
    $this->layout_pendaftaran->render('pendaftaran_backend/pengaturan',$variabel);
  }

  function edit_pengaturan(){

    $params = array(
      'pendaftaran_aktif' => $this->input->post('aktif'),
      'tahun_ajaran' => $this->input->post('tahun_ajaran'),
    );
    $this->pengaturan_model->update_tb_pengaturan_pendaftran($params);
    $this->session->set_flashdata('response',"
        <div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Selamat!</strong> Pengaturan Berhasil Dirubah <span class='fa fa-check'></span>
        </div>
    ");
    redirect('admin/pendaftaran/pengaturan');
  }
}
