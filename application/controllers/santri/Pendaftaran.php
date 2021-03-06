<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Pendaftaran extends CI_Controller {
function __construct()
{
  parent::__construct();
  $this->load->model('back-end/pendaftaran/m_santri');
  $this->load->model('back-end/pendaftaran/m_pembayaran');
  $this->load->model('back-end/pendaftaran/m_berkas');
  $this->load->model('back-end/pendaftaran/m_akunsantri');
  $this->load->model('back-end/pendaftaran/m_pengumuman');
  $this->load->model('back-end/pendaftaran/m_loginsantri');
  $this->load->model('back-end/pendaftaran/m_dashboard');
  $this->load->library('layout_pendaftaran');
  if($this->session->userdata('status') != "loginsantri"){
    $aktif = $this->m_akunsantri->get_pengaturan();
    if ($aktif == 0) {
      redirect(base_url("santri/daftarnotfound"));
    } else if ($aktif == 1) {
      redirect(base_url("santri/login"));
      }
    }
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

//fungtion halaman

function index()
{
  redirect(base_url("santri/pendaftaran/dashboard"));
}

function login()
{
  $aktif = $this->m_akunsantri->get_pengaturan();
  if ($aktif == 0) {
    $this->load->view('pendaftarannotfound');
  } else if ($aktif == 1) {
    $this->layout_pendaftaran->renderregister('calonsantri/login');
  }
}



function dashboard()
{
    $email = $this->session->userdata('email');
    $cekstatusbiodata = $this->m_dashboard->status_santri($email);
    foreach ($cekstatusbiodata->result_array() as $cek) {
        $cekstatusbio = $cek['status_biodata'];
      }
    if (($cekstatusbio == "tidak lengkap") || ($cekstatusbio == "menunggu verifikasi")){
      $cekdatafoto=$this->m_dashboard->datafoto($email)->num_rows();
      if ($cekdatafoto == 0 )
      {
          $sess_data['email'] = $email;
          $sess_data['user'] = $email;
          $sess_data['foto'] = "assets/images/a0.png";
          $this->session->set_userdata($sess_data);
          $cekstatus=$this->m_dashboard->cekstatus($email)->row_array();
          if($cekstatus == 0)
          {
          $variabel['datastatusbg'] = "bg-danger";
          $variabel['datastatusbtn'] = "<button class='btn btn-danger font-bold disabled'><i class='fa fa-print'></i>&nbsp;Cetak Kartu Pendaftaran</button>";
          $variabel['datastatusicon'] ="fa-ban";
          }
          elseif($cekstatus > 1)
          {
            $variabel['datastatusbg'] = "bg-success";
            $variabel['datastatusbtn'] = "<a href='../../santri/pendaftaran/kartupendaftaran'>
            <button class='btn btn-success font-bold'><i class='fa fa-print'></i>&nbsp;Cetak Kartu Pendaftaran</button></a>";
            $variabel['datastatusicon'] ="fa-check";
          }
          $variabel['statussantri']=$this->m_dashboard->status_santri($email)->row_array();
          $this->layout_pendaftaran->renderfront('calonsantri/dashboard',$variabel);
      }
      elseif ($cekdatafoto > 0){
        $datafoto=$this->m_dashboard->datafoto($email);
        foreach ($datafoto->result_array() as $foto) {$fotouser = $foto['file_berkas'];}
        $fotosantri = "assets/images/berkas/$fotouser";
        $sess_data['email'] = $email;
        $sess_data['user'] = $email;
        $sess_data['foto'] = $fotosantri;
        $this->session->set_userdata($sess_data);
        $cekstatus=$this->m_dashboard->cekstatus($email)->row_array();
        if($cekstatus == 0)
        {
        $variabel['datastatusbg'] = "bg-danger";
        $variabel['datastatusbtn'] = "<button class='btn btn-danger font-bold disabled'><i class='fa fa-print'></i>&nbsp;Cetak Kartu Pendaftaran</button>";
        $variabel['datastatusicon'] ="fa-ban";
        }
        elseif($cekstatus > 1)
        {
          $variabel['datastatusbg'] = "bg-success";
          $variabel['datastatusbtn'] = "<a href='../../santri/pendaftaran/kartupendaftaran'>
          <button class='btn btn-success font-bold'><i class='fa fa-print'></i>&nbsp;Cetak Kartu Pendaftaran</button></a>";
          $variabel['datastatusicon'] ="fa-check";
        }
        $variabel['statussantri']=$this->m_dashboard->status_santri($email)->row_array();
        $this->layout_pendaftaran->renderfront('calonsantri/dashboard',$variabel);

      }
    }
    elseif($cekstatusbio == "diverifikasi"){
      $cekdatafoto=$this->m_dashboard->datafoto($email)->num_rows();
      if ($cekdatafoto == 0 )
      {
          $namauser = $this->m_dashboard->nama_user($email);
          foreach ($namauser->result_array() as $user) {$nama_user = $user['nama_lengkap'];}
          $sess_data['email'] = $email;
          $sess_data['user'] = $nama_user;
          $sess_data['foto'] = 'assets/images/a0.png';
          $this->session->set_userdata($sess_data);
          $cekstatus=$this->m_dashboard->cekstatus($email)->row_array();
          if($cekstatus == 0)
          {
          $variabel['datastatusbg'] = "bg-danger";
          $variabel['datastatusbtn'] = "<button class='btn btn-danger font-bold disabled'><i class='fa fa-print'></i>&nbsp;Cetak Kartu Pendaftaran</button>";
          $variabel['datastatusicon'] ="fa-ban";
          }
          elseif($cekstatus > 1)
          {
            $variabel['datastatusbg'] = "bg-success";
            $variabel['datastatusbtn'] = "<a href='../../santri/pendaftaran/kartupendaftaran'>
            <button class='btn btn-success font-bold'><i class='fa fa-print'></i>&nbsp;Cetak Kartu Pendaftaran</button></a>";
            $variabel['datastatusicon'] ="fa-check";
          }
          $variabel['statussantri']=$this->m_dashboard->status_santri($email)->row_array();
          $this->layout_pendaftaran->renderfront('calonsantri/dashboard',$variabel);
      }
      elseif ($cekdatafoto > 0){
        $namauser = $this->m_dashboard->nama_user($email);
        foreach ($namauser->result_array() as $user) {$nama_user = $user['nama_lengkap'];}
        $datafoto=$this->m_dashboard->datafoto($email);
        foreach ($datafoto->result_array() as $foto) {$fotouser = $foto['file_berkas'];}
        $fotosantri = "assets/images/berkas/$fotouser";
        $sess_data['email'] = $email;
        $sess_data['user'] = $nama_user;
        $sess_data['foto'] = $fotosantri;
        $this->session->set_userdata($sess_data);
        $cekstatus=$this->m_dashboard->cekstatus($email)->row_array();
        if($cekstatus == 0)
        {
        $variabel['datastatusbg'] = "bg-danger";
        $variabel['datastatusbtn'] = "<button class='btn btn-danger font-bold disabled'><i class='fa fa-print'></i>&nbsp;Cetak Kartu Pendaftaran</button>";
        $variabel['datastatusicon'] ="fa-ban";
        }
        elseif($cekstatus > 1)
        {
          $variabel['datastatusbg'] = "bg-success";
          $variabel['datastatusbtn'] = "<a href='../../santri/pendaftaran/kartupendaftaran'>
          <button class='btn btn-success font-bold'><i class='fa fa-print'></i>&nbsp;Cetak Kartu Pendaftaran</button></a>";
          $variabel['datastatusicon'] ="fa-check";
        }
        $variabel['datafoto']=$this->m_dashboard->datafoto($email)->row_array();
        $variabel['statussantri']=$this->m_dashboard->status_santri($email)->row_array();
        $this->layout_pendaftaran->renderfront('calonsantri/dashboard',$variabel);

      }
    }
  }


// Nikman
function datakotakab()
{
  $id=$this->input->post('provinsi');
  $data=$this->m_santri->datakotaajax($id);
  echo json_encode($data);
}

function datakecamatan()
{
  $id=$this->input->post('kecamatan');
  $data=$this->m_santri->datakecamatanajax($id);
  echo json_encode($data);
}

function datadesa()
{
  $id=$this->input->post('desa');
  $data=$this->m_santri->datadesaajax($id);
  echo json_encode($data);
}

function biodata()
{
     $email = $this->session->userdata('email');
    if ($this->input->post()) {
      $array=array(
          'nis_lokal'=> $this->input->post('nis_lokal'),
          'nisn'=> $this->input->post('nisn'),
          'nik'=> $this->input->post('nik'),
          'nama_lengkap'=>$this->input->post('nama_lengkap'),
          'tempat_lahir'=>$this->input->post('tempat_lahir'),
          'tgl_lahir'=>tanggalawal($this->input->post('tgl_lahir')),
          'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
          'alamat_lengkap'=>$this->input->post('alamat_lengkap'),
          'provinsi'=>$this->input->post('provinsi'),
          'kabupaten_kota'=>$this->input->post('kabupaten_kota'),
          'kecamatan'=>$this->input->post('kecamatan'),
          'desa_kelurahan'=>$this->input->post('desa_kelurahan'),
          'kode_pos'=>$this->input->post('kode_pos'),
          'hobi'=>$this->input->post('hobi'),
          'cita_cita'=>$this->input->post('cita_cita'),
          'jenis_sekolah_asal'=>$this->input->post('jenis_sekolah_asal'),
          'status_sekolah_asal'=>$this->input->post('status_sekolah_asal'),
          'nomor_peserta_ujian'=>$this->input->post('nomor_peserta_ujian'),
          'jarak_ke_sekolah'=>$this->input->post('jarak_ke_sekolah'),
          'alat_transportasi'=>$this->input->post('alat_transportasi'),
          'status_tempat_tinggal'=>$this->input->post('status_tempat_tinggal'),
          'no_kk'=>$this->input->post('no_kk'),
          'nik_ayah'=>$this->input->post('nik_ayah'),
          'nama_lengkap_ayah'=>$this->input->post('nama_lengkap_ayah'),
          'pendidikan_terakhir_ayah'=>$this->input->post('pendidikan_terakhir_ayah'),
          'pekerjaan_ayah'=>$this->input->post('pekerjaan_ayah'),
          'nik_ibu'=>$this->input->post('nik_ibu'),
          'nama_lengkap_ibu'=>$this->input->post('nama_lengkap_ibu'),
          'pendidikan_terakhir_ibu'=>$this->input->post('pendidikan_terakhir_ibu'),
          'pekerjaan_ibu'=>$this->input->post('pekerjaan_ibu'),
          'penghasilan_orang_tua'=>$this->input->post('penghasilan_orang_tua'),
          'nik_wali'=>$this->input->post('nik_wali'),
          'nama_lengkap_wali'=>$this->input->post('nama_lengkap_wali'),
          'pendidikan_terakhir_wali'=>$this->input->post('pendidikan_terakhir_wali'),
          'pekerjaan_wali'=>$this->input->post('pekerjaan_wali'),
          'penghasilan_wali'=>$this->input->post('penghasilan_wali'),
          'jumlah_saudara_kandung'=>$this->input->post('jumlah_saudara_kandung'),
          'hp'=>$this->input->post('hp'),
          'hpayah'=>$this->input->post('hpayah'),
          'hpibu'=>$this->input->post('hpibu'),
          'hpwali'=>$this->input->post('hpwali')
          );
      $exec = $this->m_santri->editdatasantri($email,$array);
      if ($exec){
        $array2 = array (
          "status_biodata"=>"menunggu verifikasi"
          );
        $exec2 = $this->m_santri->editakun($email,$array2);
        redirect(base_url("santri/pendaftaran/biodata?msg=1"));
      }

    } else {
      $email = $this->session->userdata('email');
      $exec=$this->m_santri->lihatbiodata($email)->row_array();
      $variabel['data']=$exec;
      $variabel['provinsi']=$this->m_santri->ambilprovinsi();
      $variabel['kabupaten']=$this->m_santri->ambilkabupaten($exec['provinsi']);
      $variabel['kecamatan']=$this->m_santri->ambilkecamatan($exec['kabupaten_kota']);
      $variabel['desa']=$this->m_santri->ambildesa($exec['kecamatan']);

      $variabel['transportasi']=$this->m_santri->ambiltransportasi();
      $variabel['pekerjaan']=$this->m_santri->ambilpekerjaan();
      $variabel['pendidikan']=$this->m_santri->ambilpendidikan();
      $variabel['cekakun']=$this->m_santri->cekakun($email)->row_array();
      $this->layout_pendaftaran->renderfront('calonsantri/v_biodata', $variabel,'calonsantri/v_biodata_js');
    }
}

/////////////////////////////berkas /////////////////////////////////////////

function berkas(){
  $email = $this->session->userdata("email");
  $nama_berkas = $this->input->post('namaberkas');
  $statusberkas = $this->m_akunsantri->getstatusberkas($email);
  $cekdatafoto=$this->m_dashboard->datafoto($email)->num_rows();
  if ($cekdatafoto == 0 )
  {
  //     $sess_data['email'] = $email;
  //     $sess_data['user'] = $email;
       $sess_data['foto'] = "assets/images/a0.png";
       $this->session->set_userdata($sess_data);
  }
   elseif ($cekdatafoto > 0){
     $namauser = $this->m_dashboard->nama_user($email);
     foreach ($namauser->result_array() as $user) {$nama_user = $user['nama_lengkap'];}
     $datafoto=$this->m_dashboard->datafoto($email);
     foreach ($datafoto->result_array() as $foto) {$fotouser = $foto['file_berkas'];}
     $fotosantri = "assets/images/berkas/$fotouser";
  //   $sess_data['email'] = $email;
  //   $sess_data['user'] = $email;
     $sess_data['foto'] = $fotosantri;
     $this->session->set_userdata($sess_data);
   }

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
      $variabel['cekberkas'] =  $statusberkas;
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
        $array2 = array (
          "status_berkas"=>"menunggu verifikasi"
         );
        $exec2 = $this->m_santri->editakun($email,$array2);
        redirect(base_url("santri/pendaftaran/berkas?msg=2"));
      }
    }


  } else {
    $variabel['cekberkas'] =  $statusberkas;
    $variabel['datapiagam2']=$this->m_berkas->ambilberkaspiagam2($email)->row_array();
    $variabel['datapiagam1']=$this->m_berkas->ambilberkaspiagam1($email)->row_array();
    $variabel['datakk']=$this->m_berkas->ambilberkaskk($email)->row_array();
  $variabel['datapoto']=$this->m_berkas->ambilberkaspoto($email)->row_array();
  $variabel['dataijazah']=$this->m_berkas->ambilberkasijazah($email)->row_array();
  $this->layout_pendaftaran->renderfront('calonsantri/v_berkas',$variabel);
}
}

//akhir gawian madan

function pembayaran()
{
     $email = $this->session->userdata("email");
     $statusbio = $this->m_akunsantri->getstatusbiodata($email);
     $statusberkas = $this->m_akunsantri->getstatusberkas($email);
     $statusbayar = $this->m_akunsantri->getstatusbayar($email);
    if ($this->input->post()) {
      $data=array(
        'besar_pembayaran'=> $this->input->post('besar_pembayaran'),
        'keterangan'=> $this->input->post('keterangan'),
        'tanggal_pembayaran'=> tanggalawal($this->input->post('tanggal_pembayaran'))
       );
      $config['upload_path'] = './assets/images/berkas';
      $config['allowed_types'] = 'jpg|png|gif|jpeg|JPG|JPEG';
      $this->load->library('upload', $config);
      if ($this->upload->do_upload("bukti_pembayaran"))
      {
        $upload = $this->upload->data();
        $bukti_pembayaran = $upload["raw_name"].$upload["file_ext"];
        $data['bukti_pembayaran'] = $bukti_pembayaran;
        $config2['image_library'] = 'gd2';
        $config2['create_thumb'] = FALSE;
        $config2['maintain_ratio'] = TRUE;
        $config2['width']= 500;
        $config2['height']= 500;
        $config2['source_image'] = "./assets/images/berkas/$bukti_pembayaran";
        $this->load->library('image_lib');
        $this->image_lib->clear();
        $this->image_lib->initialize($config2);
        $this->image_lib->resize();

        $query2 = $this->m_pembayaran->ambilpembayaran($email);
        $row2 = $query2->row_array();
        $foto1temp = $row2['bukti_pembayaran'];
        $path1 ="./assets/images/berkas/".$foto1temp."";
        if(is_file($path1)) {
            unlink($path1); //menghapus gambar di folder produk
        }
        $this->m_pembayaran->edit($email,$data);
        $array2 = array (
          "status_pembayaran"=>"menunggu verifikasi"
         );
        $exec2 = $this->m_santri->editakun($email,$array2);
        redirect(base_url("santri/pendaftaran/pembayaran?msg=1"));
      } else {
        redirect(base_url("santri/pendaftaran/pembayaran?msg=0"));
      }

      $this->m_pembayaran->edit($email,$data);
      $array2 = array (
        "status_pembayaran"=>"menunggu verifikasi"
       );
      $exec2 = $this->m_santri->editakun($email,$array2);
      redirect(base_url("santri/pendaftaran/pembayaran?msg=1"));

    } else {
      if ( ($statusbio == "diverifikasi") and ($statusberkas == "diverifikasi")) {
        $variabel['cekbayar'] = $statusbayar;
        $variabel['data']=$this->m_pembayaran->ambilpembayaran($email)->row_array();
        $this->layout_pendaftaran->renderfront('calonsantri/v_pembayaran',$variabel,'calonsantri/v_pembayaran_js');
      } else {
        $this->session->set_flashdata('response',"
            <div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>Oooppss!</strong> Anda belum bisa melakukan pembayaran, Biodata atau Berkas Anda belum <strong>Diverifikasi</strong>
            </div>
        ");
        redirect(base_url("santri/pendaftaran/dashboard"));
      }

    }

}
// end nikman
//informasi atau pengumuman
function pengumuman()
{
  if($this->session->userdata('status') != "loginsantri"){
    redirect(base_url("santri/pendaftaran/login"));
  }
  else{
  $variabel['data'] = $this->m_pengumuman->lihatpengumuman();
  $this->layout_pendaftaran->renderfront('calonsantri/v_pengumuman',$variabel,'calonsantri/calonsantri_js');
}
}
// akhir function halaman





//kartu pendaftaran sementara
function kartupendaftaran(){
  // if($this->session->userdata('status') != "loginsantri"){
  //   redirect(base_url("santri/pendaftaran/login"));
  // }
  // else{
    $email = $this->session->userdata('email');
    $datafoto=$this->m_dashboard->datafoto($email);
    foreach ($datafoto->result_array() as $foto) {$fotouser = $foto['file_berkas'];}
    $fotosantri = "assets/images/berkas/$fotouser";
    $materi_tes = $this->m_santri->ambilmaterites();
    $exec = $this->m_santri->kartucetak($email);
    if ($exec->num_rows()>0){
      $variabel['foto'] = $fotosantri;
      $variabel['data'] = $exec->row_array();
      $variabel['materi'] = $materi_tes;
      $this->layout_pendaftaran->renderfront('calonsantri/v_kartupendaftaran',$variabel);
    }
  // }
}
}

?>
