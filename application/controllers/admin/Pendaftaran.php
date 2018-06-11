<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Pendaftaran extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('back-end/pendaftaran/m_dashboard');
    $this->load->model('back-end/pendaftaran/m_pengaturan');
    $this->load->model('back-end/pendaftaran/m_pendaftaran');
    $this->load->model('back-end/pendaftaran/m_pembayaran');
    $this->load->model('back-end/pendaftaran/m_pengumuman');
    $this->load->model('back-end/pendaftaran/m_berkas');
    $this->load->library('layout_pendaftaran');
    if ($this->session->userdata('nama_akun') == '') {
        redirect('admin/login');
    }
    else if ($this->session->userdata('kode_role_admin') == '') {
        redirect('admin/login');
    }
    else if ($this->session->userdata('kode_role_admin') == 'adm_dms') {
        redirect('admin/datamaster');
    }
    else if ($this->session->userdata('kode_role_admin') == 'przputra') {
      redirect('admin/perizinansantri');
    }
    else if ($this->session->userdata('kode_role_admin') == 'przputri') {
      redirect('admin/perizinansantriwati');
    }
    else if ($this->session->userdata('kode_role_admin') == 'akdputra') {
      redirect('admin/santriakd');
    }
    else if ($this->session->userdata('kode_role_admin') == 'akdputri') {
      redirect('admin/santriwatiakd');
    }
    $this->load->helper('text');
  }

//ini dashboard admin //
  function index()
  {
      $variabel['nama_akun'] = $this->session->userdata('nama_akun');
      $tahunajaran = $this->m_pembayaran->gettahunajaran();
      //pembayaran
      $variabel['total_pembayaran'] = $this->m_dashboard->hitungpembayaran($tahunajaran);
      $variabel['pembayaran_terakhir'] = $this->m_dashboard->get_pembayaran_terakhir();
      //general
      $variabel['putra_tidak_lengkap'] = $this->m_dashboard->putra_status_tidak_lengkap($tahunajaran);
      $variabel['putra_diverifikasi'] = $this->m_dashboard->putra_status_diverifikasi($tahunajaran);
      $variabel['putra_menunggu'] = $this->m_dashboard->putra_status_menunggu($tahunajaran);
      $variabel['putra_pendaftaran'] = $this->m_dashboard->putra_pendaftaran($tahunajaran);
      //putra
      $variabel['total_tidak_lengkap'] = $this->m_dashboard->get_count_status_tidak_lengkap($tahunajaran);
      $variabel['total_diverifikasi'] = $this->m_dashboard->get_count_status_diverifikasi($tahunajaran);
      $variabel['total_menunggu'] = $this->m_dashboard->get_count_status_menunggu($tahunajaran);
      $variabel['total_pendaftaran'] = $this->m_dashboard->get_count_pendaftaran($tahunajaran);
      //hitung bayar
      $variabel['pembayaran_diverifikasi'] = $this->m_dashboard->get_count_pembayaran_diverifikasi($tahunajaran);
      $variabel['pembayaran_menunggu'] = $this->m_dashboard->get_count_pembayaran_menunggu($tahunajaran);
      $this->layout_pendaftaran->render('adminpendaftaran/dashboard',$variabel);
  }

//akhir dashboard admin //

  function logout() {
      $this->session->unset_userdata('nip_staff_admin');
      $this->session->unset_userdata('nama_akun');
      $this->session->unset_userdata('kode_role_admin');
      session_destroy();
      redirect('admin/login');
  }

  function ubahsandiadmin(){
      if ($this->input->post()) {
        $array=array(
            'nama_role'=> $this->input->post('nama_role'),
            'nip_staff_admin'=> $this->input->post('nip_staff_admin'),
            'nama_lengkap'=> $this->input->post('nama_lengkap'),
            'nama_akun'=> $this->input->post('nama_akun'),
            'kata_sandi'=> $this->input->post('kata_sandi'),
            );
          $nama_akun = $this->input->post("nama_akun");
          $kata_sandi = md5($this->input->post("kata_sandi"));
          $kata_sandibr = md5($this->input->post("kata_sandibr"));
          $rekata_sandibr = md5($this->input->post("rekata_sandibr"));
          $query = $this->m_dashboard->cekubahsandi($nama_akun);
          if ($query->kata_sandi!=$kata_sandi) {
              $variabel['kata_sandi'] =$this->input->post('kata_sandi');
              $variabel['data'] = $array;
              $this->layout->render('adminpendaftaran/v_ubah_sandi',$variabel);
          } else if ($kata_sandibr!=$rekata_sandibr){
               $variabel['rekata_sandibr'] =$this->input->post('rekata_sandibr');
               $variabel['data'] = $array;
               $this->layout->render('adminpendaftaran/v_ubah_sandi',$variabel);
          } else {
              $exec = $this->m_dashboard->ubahsandi($nama_akun,$kata_sandi,$kata_sandibr);
              if ($exec){
                  redirect(base_url("admin/pendaftaran/ubahsandiadmin?nama_akun=".$nama_akun."&msg=1"));
              }
          }
      } else {
          $nama_akun = $this->input->get("nama_akun");
          $exec = $this->m_dashboard->lihatubahsandi($nama_akun);
          if ($exec->num_rows()>0){
              $variabel['data'] = $exec ->row_array();
              $this->layout->render('adminpendaftaran/v_ubah_sandi',$variabel);
          } else {
              redirect(base_url("admin/pendaftaran/dashboard"));
          }
      }
  }
///////////////////pengaturan pendaftaran////////////////////////////
  function pengaturan()
  {
    $variabel['tb_akun_pendaftar'] = $this->m_pengaturan->get_akun_pendaftar();
    $variabel['datatahun'] = $this->m_pengaturan->datatahun();
    $variabel['tb_pengaturan_pendaftaran'] = $this->m_pengaturan->get_tb_pengaturan();
    $this->layout_pendaftaran->render('adminpendaftaran/pengaturan',$variabel,'adminpendaftaran/pengaturan_js');
  }

  function edit_pengaturan(){
    $params = array(
      'pendaftaran_aktif' => $this->input->post('aktif'),
      'tahun_ajaran' => $this->input->post('tahun_ajaran'),
    );
    $this->m_pengaturan->update_tb_pengaturan_pendaftran($params);
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
      $this->m_pengaturan->editsandi($email_akun,$params);
      $this->session->set_flashdata('response',"
          <div class='alert alert-success'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              <strong>Selamat!</strong> Kata Sandi Calon Santri Berhasil Dirubah <span class='fa fa-check'></span>
          </div>
      ");
      redirect('admin/pendaftaran/pengaturan');
    }
  }

//aktifasi akun pendaftar sementara
  function aktivasiakun(){
    $email_akun = $this->input->get("email_pendaftar");
    $params = array(
      'status_akun' => 'aktif'
    );
    $this->m_pengaturan->editstatus($email_akun,$params);
    $this->session->set_flashdata('response',"
        <div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Selamat!</strong> Aktifasi Akun Calon Santri Berhasil <span class='fa fa-check'></span>
        </div>
    ");
    redirect('admin/pendaftaran/pengaturan');
  }
/////////////////////////////////akhir pengaturan/////////////////////////////////

//pembayran admin//
function datapembayaran(){

  $tahunajaran = $this->m_pembayaran->gettahunajaran();
  $variabel['data'] = $this->m_pembayaran->lihatpembayaran($tahunajaran);
  $variabel['pembayaran_diverifikasi'] = $this->m_pembayaran->get_count_pembayaran_diverifikasi($tahunajaran);
  $variabel['pembayaran_menunggu'] = $this->m_pembayaran->get_count_pembayaran_menunggu($tahunajaran);
  $variabel['pembayaran_tidaklengkap'] = $this->m_pembayaran->get_count_pembayaran_tidaklengkap($tahunajaran);
  $variabel['duitverifikasi'] = $this->m_pembayaran->bayarverifikasi($tahunajaran);
  $variabel['duitmenunggu'] = $this->m_pembayaran->bayarmenunggu($tahunajaran);
  $this->layout_pendaftaran->render('adminpendaftaran/verifikasi/v_pembayaran',$variabel,'adminpendaftaran/verifikasi/v_pembayaran_js');
}

function verifikasibayar(){
  $email_akun = $this->input->get("email_pendaftar");
  $array = array(
    "status_pembayaran"=> "diverifikasi"
  );
  $this->m_pembayaran->editakun($email_akun,$array);
  redirect(base_url("admin/pendaftaran/datapembayaran?msg=1"));
}

function verifikasibatal(){
  $email_akun = $this->input->get("email_pendaftar");
  $array = array(
    "status_pembayaran"=> "menunggu verifikasi"
  );
  $this->m_pembayaran->editakun($email_akun,$array);
  redirect(base_url("admin/pendaftaran/datapembayaran?msg=0"));
}

//akhir//



//informasi atau pengumuman
function pengumuman()
{
  $variabel['data'] = $this->m_pengumuman->lihatpengumuman();
  $this->layout_pendaftaran->render('adminpendaftaran/v_pengumuman',$variabel,'adminpendaftaran/pengaturan_js');
}

function tambahpengumuman()
{
  if ($this->input->post()){

          $array=array(
              'judul_pengumuman'=> $this->input->post('judul_pengumuman'),
              'isi_pengumuman'=> $this->input->post('isi_pengumuman'),
              'link_pengumuman'=> $this->input->post('link_pengumuman'),
              'tanggal_pengumuman'=>$this->input->post('tanggal_pengumuman')
              );
          $exec = $this->m_pengumuman->tambahdata($array);
          if ($exec) redirect(base_url("admin/pendaftaran/tambahpengumuman?msg=1"));
          else redirect(base_url("admin/pendaftaran/tambahpengumuman?msg=0"));
  } else {
    $variabel= '';
    $this->layout_pendaftaran->render('adminpendaftaran/v_tambahpengumuman',$variabel,'adminpendaftaran/pengaturan_js');
  }
}



function editpengumuman()
{
$id_pengumuman = $this->input->get("idpengumuman");
  if ($this->input->post()){
          $array=array(
              'isi_pengumuman'=> $this->input->post('isi_pengumuman'),
              'judul_pengumuman'=> $this->input->post('judul_pengumuman'),
              'link_pengumuman'=> $this->input->post('link_pengumuman'),
              'tanggal_pengumuman'=>$this->input->post('tanggal_pengumuman')
              );
          $exec = $this->m_pengumuman->editdata($id_pengumuman,$array);
          if ($exec)redirect(base_url("admin/pendaftaran/editpengumuman?idpengumuman=".$id_pengumuman."&msg=1"));
          else redirect(base_url("admin/pendaftaran/editpengumuman?idpengumuman=".$id_pengumuman."&msg=0"));
  } else {
    $exec =$this->m_pengumuman->data($id_pengumuman);
    if ($exec->num_rows()>0){
        $variabel['data'] = $exec ->row_array();
        $this->layout_pendaftaran->render('adminpendaftaran/v_editpengumuman',$variabel,'adminpendaftaran/pengaturan_js');
  }
}
}

function deletepengumuman()
{
  $id_pengumuman = $this->input->get("idpengumuman");
  $exec = $this->m_pengumuman->hapus($id_pengumuman);
  redirect(base_url()."admin/pendaftaran/pengumuman?msg=1");
}
//sisanya tamabh sendiri yaa anis!
//akhir



//////////////////////////////////////////////////////////////////
function berkas(){
  $email = $this->session->userdata("email");
  $nama_berkas = $this->input->post('namaberkas');
  if ($this->input->post()) {
    $data=array(
      'nama_berkas'=> $this->input->post('namaberkas'),
      'email_pendaftar' => $email
     );
    $config['upload_path'] = './assets/images/berkas';
    $config['allowed_types'] = 'jpg|png|jpeg|JPG|JPEG';
    $this->load->library('upload', $config);
    if (! $this->upload->do_upload("file_berkas"))
    {
      $this->session->set_flashdata('error',
      "<div class='alert alert-danger'>
          <button type='button' class='close' data-dismiss='alert'>&times;</button>
          <strong>Oooppss!</strong> Tipe berkas yang anda upload tidak sesuai<br>
          cobalah upload file jpg / jpeg / png
      </div>"
      );
      $variabel['datapiagam2']=$this->m_berkas->ambilberkaspiagam2($email)->row_array();
      $variabel['datapiagam1']=$this->m_berkas->ambilberkaspiagam1($email)->row_array();
      $variabel['datakk']=$this->m_berkas->ambilberkaskk($email)->row_array();
      $variabel['datapoto']=$this->m_berkas->ambilberkaspoto($email)->row_array();
      $variabel['dataijazah']=$this->m_berkas->ambilberkasijazah($email)->row_array();
      $this->layout_pendaftaran->renderfront('calonsantri/v_berkas',$variabel);
    }else{
      $upload = $this->upload->data();
      $file_berkas = $upload["raw_name"].$upload["file_ext"];
      $data['file_berkas'] = $file_berkas;
      $config2['image_library'] = 'gd2';
      $config2['create_thumb'] = FALSE;
      $config2['maintain_ratio'] = TRUE;
      $config2['width']= 500;
      $config2['height']= 500;
      $config2['source_image'] = "./assets/images/berkas/$file_berkas";
      $this->load->library('image_lib');
      $this->image_lib->clear();
      $this->image_lib->initialize($config2);
      $this->image_lib->resize();

      $query2 = $this->m_berkas->ambilberkas($email);
      $row2 = $query2->row_array();
      $foto1temp = $row2['file_berkas'];
      $path1 ="./assets/images/berkas/".$foto1temp."";
      if(is_file($path1)) {
          unlink($path1); //menghapus gambar di folder produk
      }
      if ($this->m_berkas->cekberkas($email,$nama_berkas)==0){
          $this->m_berkas->addberkas($data);
          $array2 = array (
            "status_berkas"=>"menunggu verifikasi"
           );
          $exec2 = $this->m_santri->editakun($email,$array2);
          redirect(base_url("santri/pendaftaran/berkas?msg=1"));
      } else{
        $this->m_berkas->editberkas($email,$nama_berkas,$data);
        redirect(base_url("santri/pendaftaran/berkas?msg=2"));
      }
    }


  } else {
    $variabel['datapiagam2']=$this->m_berkas->ambilberkaspiagam2($email)->row_array();
    $variabel['datapiagam1']=$this->m_berkas->ambilberkaspiagam1($email)->row_array();
    $variabel['datakk']=$this->m_berkas->ambilberkaskk($email)->row_array();
  $variabel['datapoto']=$this->m_berkas->ambilberkaspoto($email)->row_array();
  $variabel['dataijazah']=$this->m_berkas->ambilberkasijazah($email)->row_array();
  $this->layout_pendaftaran->renderfront('calonsantri/v_berkas',$variabel);
}
}




function semuapendaftar()
{

    $tahunajaran = $this->m_pendaftaran->gettahunajaran();
    $variabel['data'] = $this->m_pendaftaran->lihatdatasemua($tahunajaran);
    $this->layout_pendaftaran->render('adminpendaftaran/verifikasi/v_semua',$variabel,'adminpendaftaran/verifikasi/v_semua_js');
}

function diverifikasi()
{
    $tahunajaran = $this->m_pendaftaran->gettahunajaran();
    $variabel['data'] = $this->m_pendaftaran->lihatdatadiverifikasi($tahunajaran);
    $this->layout_pendaftaran->render('adminpendaftaran/verifikasi/v_diverifikasi',$variabel,'adminpendaftaran/verifikasi/v_semua_js');
}

function menunggu()
{
    $tahunajaran = $this->m_pendaftaran->gettahunajaran();
    $variabel['data'] = $this->m_pendaftaran->lihatdatamenunggu($tahunajaran);
    $this->layout_pendaftaran->render('adminpendaftaran/verifikasi/v_menunggu',$variabel,'adminpendaftaran/verifikasi/v_semua_js');
}

function belumlengkap()
{
    $tahunajaran = $this->m_pendaftaran->gettahunajaran();
    $variabel['data'] = $this->m_pendaftaran->lihatdatabelumlengkap($tahunajaran);
    $this->layout_pendaftaran->render('adminpendaftaran/verifikasi/v_belumlengkap',$variabel,'adminpendaftaran/verifikasi/v_semua_js');
}


function semuabiodata()
    {
      if ($this->input->post()) {
            $array=array(
                'status_biodata'=>$this->input->post('status_biodata')
            );
            $email = $this->input->post("email_pendaftar");
            $exec = $this->m_pendaftaran->editakun($email,$array);
            if ($exec){
             redirect(base_url("admin/pendaftaran/semuabiodata?email=".$email."&msg=1"));
            }
      } else {
            $email = $this->input->get("email");
            $exec = $this->m_pendaftaran->lihatsemuabiodata($email);
            if ($exec->num_rows()>0){
                $variabel['data'] = $exec ->row_array();
                $this->layout_pendaftaran->render('adminpendaftaran/verifikasi/v_editsemuabiodata',$variabel,'adminpendaftaran/verifikasi/v_semua_js');
            } else {
                redirect(base_url("admin/pendaftaran/semuapendaftar"));
            }
      }

    }

    function semuaberkas(){
        $email = $this->input->get("email");
        if ($this->input->post()) {
            $array=array(
                'status_berkas'=>$this->input->post('status_berkas')
            );
            $email = $this->input->post("email_pendaftar");
            $exec = $this->m_pendaftaran->editakun($email,$array);

            if ($exec){
             redirect(base_url("admin/pendaftaran/semuaberkas?email=".$email."&msg=1"));
            }
        } else {
          $exec = $this->m_pendaftaran->lihatsemuabiodata($email);
          $variabel['data'] = $exec ->row_array();
          $variabel['datapiagam2']=$this->m_berkas->ambilberkaspiagam2($email)->row_array();
          $variabel['datapiagam1']=$this->m_berkas->ambilberkaspiagam1($email)->row_array();
          $variabel['datakk']=$this->m_berkas->ambilberkaskk($email)->row_array();
          $variabel['datapoto']=$this->m_berkas->ambilberkaspoto($email)->row_array();
          $variabel['dataijazah']=$this->m_berkas->ambilberkasijazah($email)->row_array();
          $this->layout_pendaftaran->render('adminpendaftaran/verifikasi/v_editsemuaberkas',$variabel);
       }
      }

////////////////bagian tes////////////////////////////

    function pesertates(){
      $variabel = '';
      $this->layout_pendaftaran->render('adminpendaftaran/tes/v_peserta_tes',$variabel,'adminpendaftaran/tes/peserta_tes_js');
    }

    function jadwaltes(){
      $variabel = '';
      $this->layout_pendaftaran->render('adminpendaftaran/tes/v_jadwal_tes',$variabel,'adminpendaftaran/tes/peserta_tes_js');
    }


//////////////////////////////////////////////////////////////////

}
