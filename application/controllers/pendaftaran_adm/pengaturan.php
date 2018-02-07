<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pengaturan extends CI_Controller {
function __construct()
{
  parent::__construct();
  $this->load->model('pendaftaran_m/pengaturan_model');
}
/**
* Index Page for this controller.
*
* Maps to the following URL
*    http://example.com/index.php/welcome
*  - or -
*    http://example.com/index.php/welcome/index
*  - or -
* Since this controller is set as the default controller in
* config/routes.php, it's displayed at http://example.com/
*
* So any other public methods not prefixed with an underscore will
* map to /index.php/welcome/<method_name>
* @see https://codeigniter.com/user_guide/general/urls.html
*/
public function index()
{
  $data['tb_pengaturan_pendaftaran'] = $this->pengaturan_model->get_tb_pengaturan();
  $data['_view'] = 'pendaftaran_v/pengaturan_adm_v';
  $this->load->view('layouts/content_pendaftaran_adm',$data);
}

function edit(){

  $params = array(
    'pendaftaran_aktif' => $this->input->post('aktif'),
    'tahun_ajaran' => $this->input->post('tahun_ajaran'),
  );
  $this->pengaturan_model->update_tb_pengaturan_pendaftran($params);
  $this->session->set_flashdata('response',"Data Inserted Successfully");
  redirect('pendaftaran_adm/pengaturan/index');
}
}
