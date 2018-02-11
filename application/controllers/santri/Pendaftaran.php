<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pendaftaran extends CI_Controller {
function __construct()
{
  parent::__construct();

  $this->load->model('back-end/pendaftaran/m_santri');
  $this->load->library('layout_pendaftaran');
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
function index()
{
  $today = date('Ymd').'0000';
  $cur_row = $this->m_santri->get_count_akun();
  $next =  $cur_row + 1;
  $id['id_pendaftar'] = $today + $next;
    $this->layout_pendaftaran->renderregister('calonsantri/register',$id);
}

function dashboard()
{
    $this->layout_pendaftaran->renderfront('calonsantri/register');

}

function biodata()
{
    $this->layout_pendaftaran->renderfront('calonsantri/v_biodata');

}

function addakun()
{
  $today = date(Ymd);
  $cur_row = 1000 + $this->m_santri->get_count_akun();
  $id = $today + $cur_row + 1;
}



}
