<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Pendaftaran extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('back-end/pendaftaran/M_dashboard');
    $this->load->model('back-end/pendaftaran/M_pengaturan');
    $this->load->model('back-end/pendaftaran/m_pendaftaran');
    $this->load->model('back-end/pendaftaran/m_pembayaran');
    $this->load->library('layout_pendaftaran');
  }

  function index()
  {
      $variabel['pembayaran_terakhir'] = $this->M_dashboard->get_pembayaran_terakhir();
      $variabel['total_tidak_lengkap'] = $this->M_dashboard->get_count_status_tidak_lengkap();
      $variabel['total_diverifikasi'] = $this->M_dashboard->get_count_status_diverifikasi();
      $variabel['total_menunggu'] = $this->M_dashboard->get_count_status_menunggu();
      $variabel['total_pendaftaran'] = $this->M_dashboard->get_count_pendaftaran();
      $variabel['pembayaran_diverifikasi'] = $this->M_dashboard->get_count_pembayaran_diverifikasi();
      $variabel['pembayaran_menunggu'] = $this->M_dashboard->get_count_pembayaran_menunggu();
      $this->layout_pendaftaran->render('adminpendaftaran/dashboard',$variabel);
  }

//pengaturan pendaftaran
  function pengaturan()
  {
    $variabel['tb_akun_pendaftar'] = $this->M_pengaturan->get_akun_pendaftar();
    $variabel['datatahun'] = $this->M_pengaturan->datatahun();
    $variabel['tb_pengaturan_pendaftaran'] = $this->M_pengaturan->get_tb_pengaturan();
    $this->layout_pendaftaran->render('adminpendaftaran/pengaturan',$variabel,'adminpendaftaran/pengaturan_js');
  }

  function edit_pengaturan(){
    $params = array(
      'pendaftaran_aktif' => $this->input->post('aktif'),
      'tahun_ajaran' => $this->input->post('tahun_ajaran'),
    );
    $this->M_pengaturan->update_tb_pengaturan_pendaftran($params);
    $this->session->set_flashdata('response',"
        <div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Selamat!</strong> Pengaturan Berhasil Dirubah <span class='fa fa-check'></span>
        </div>
    ");
    redirect('admin/pendaftaran/pengaturan');
  }

//edit akun pendaftar
  function editsandi(){
    $this->form_validation->set_rules('sandi', 'Sandi', 'required');
    if ($this->form_validation->run()== FALSE)
    {
      $this->session->set_flashdata('response',"
          <div class='alert alert-danger'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              <strong>Oooppss!</strong> Kata Sandi Calon Santri Gagal Dirubah <span class='fa fa-check'></span>
          </div>
      ");
      redirect('admin/pendaftaran/pengaturan');
    } else {
      $kata_sandi = $this->input->post('sandi');
      $encrypt_sandi = md5($kata_sandi);
      // $decrypt_sandi = $this->encrypt->decode($encrypt_sandi);
    $email_akun = $this->input->get("email_pendaftar");
    $params = array (
        'kata_sandi' => $encrypt_sandi
      );
      $this->M_pengaturan->editsandi($email_akun,$params);
      $this->session->set_flashdata('response',"
          <div class='alert alert-success'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              <strong>Selamat!</strong> Kata Sandi Calon Santri Berhasil Dirubah <span class='fa fa-check'></span>
          </div>
      ");
      redirect('admin/pendaftaran/pengaturan');
    }
  }


//pembayran admin//
function datapembayaran(){
  $tahunajaran = $this->m_pembayaran->gettahunajaran();
  $variabel['data'] = $this->m_pembayaran->lihatpembayaran($tahunajaran);
  $this->layout_pendaftaran->render('adminpendaftaran/verifikasi/v_pembayaran',$variabel,'adminpendaftaran/verifikasi/v_pembayaran_js');
}

function verifikasibayar(){
  $email_akun = $this->input->get("email_pendaftar");
  $array = array(
    "status_pembayaran"=> "diverifikasi"
  );
  $this->m_pembayaran->editakun($email_akun,$array);
  redirect(base_url("admin/pendaftaran/datapembayaran"));
}

//akhir//

//////////////////////////////////////////////////////////////////
function semuapendaftar()
{

    $tahunajaran = $this->m_pendaftaran->gettahunajaran();
    $variabel['data'] = $this->m_pendaftaran->lihatdatasemua($tahunajaran);
    $this->layout_pendaftaran->render('adminpendaftaran/verifikasi/v_semua',$variabel,'adminpendaftaran/verifikasi/v_semua_js');
}

function semuabiodata()
    {
      if ($this->input->post()) {
            $array=array(
                'status_biodata'=>$this->input->post('status_biodata')
            );
            $email = $this->input->post("email");
            $exec = $this->m_pendaftaran->editsemuabiodata($email,$array);
            if ($exec){
              redirect(base_url("admin/pendaftaran/semuabiodata?email=".$email."&msg=1"));
            }
      } else {
            $email = $this->input->get("email");
            $exec = $this->m_pendaftaran->lihatsemuabiodata($email);
            if ($exec->num_rows()>0){
                $variabel['data'] = $exec ->row_array();
                $this->layout->render('adminpendaftaran/verifikasi/v_editsemuabiodata',$variabel,'adminpendaftaran/verifikasi/v_semua_js');
            } else {
                redirect(base_url("admin/pendaftaran/semuapendaftar"));
            }
      }

    }

//////////////////////////////////////////////////////////////////

}
