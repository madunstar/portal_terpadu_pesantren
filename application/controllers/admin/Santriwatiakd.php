<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Santriwatiakd extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->library(array('form_validation','session'));
    $this->load->model('back-end/datamaster/m_admin');
    $this->load->model('back-end/datamaster/m_santri');
    $this->load->model('back-end/datamaster/m_santriwati');
    $this->load->model('back-end/datamaster/m_guru');
    $this->load->model('back-end/datamaster/m_staff');
    $this->load->model('back-end/datamaster/m_provinsi');
    $this->load->model('back-end/datamaster/m_pendidikan');
    $this->load->model('back-end/datamaster/m_pekerjaan');
    $this->load->model('back-end/datamaster/m_alat_transportasi');
    $this->load->model('back-end/datamaster/m_kota_kab');
    $this->load->model('back-end/datamaster/m_kecamatan');
    $this->load->model('back-end/datamaster/m_kel_desa');
    $this->load->model('back-end/datamaster/m_tahun_ajaran');
    $this->load->model('back-end/datamaster/m_kelas');
    $this->load->model('back-end/datamaster/m_matpel');
    $this->load->model('back-end/datamaster/m_pelajaran');
    $this->load->model('back-end/datamaster/m_infaq');
    $this->load->model('back-end/datamaster/m_infaq_p');
    $this->load->model('back-end/datamaster/m_presensi');
    $this->load->model('back-end/datamaster/m_prestasi');
    $this->load->model('back-end/datamaster/m_prestasi_p');
    $this->load->model('back-end/datamaster/m_pelanggaran');
    $this->load->model('back-end/datamaster/m_pelanggaran_p');
    $this->load->model('back-end/datamaster/m_jenjang');
    $this->load->model('back-end/datamaster/m_pondokan');
    $this->load->model('back-end/datamaster/m_presensipondokan');
    $this->load->model('back-end/datamaster/m_rekap_santri');
    $this->load->model('back-end/datamaster/m_rekap_santri_pondokan');
    $this->load->model('back-end/datamaster/m_rekap_guru');
    $this->load->model('back-end/datamaster/m_rekap_guru_pondokan');
    $this->load->model('back-end/datamaster/m_akun_ortu');
    $this->load->model('back-end/datamaster/m_pak_pondokan');
    $this->load->model('back-end/datamaster/m_pak_afilasi');
    $this->load->model('back-end/datamaster/m_informasi');
    $this->load->library('layout');
    $this->load->helper('indo_helper');
    $this->load->helper('text');
    if ($this->session->userdata('nama_akun')=="") {
        redirect('admin/login');
    }
    else if ($this->session->userdata('kode_role_admin') == 'adm_pd') {
        redirect('admin/pendaftaran');
    }
    else if ($this->session->userdata('kode_role_admin') == 'akd') {
        redirect('admin/datamaster');
    }
    else if ($this->session->userdata('kode_role_admin') == 'adm_prz') {
        redirect('admin/perizinan');
    }
    elseif ($this->session->userdata('kode_role_admin')=='akdputra') {
      redirect('admin/santriwatiakd');
    }
    $this->load->helper('text');
    setlocale(LC_ALL, 'INDONESIA');
  }

  function logout(){
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
              $this->layout->renderakdp('back-end/akademik/v_ubah_sandi',$variabel);
          } else if ($kata_sandibr!=$rekata_sandibr){
               $variabel['rekata_sandibr'] =$this->input->post('rekata_sandibr');
               $variabel['data'] = $array;
               $this->layout->renderakdp('back-end/akademik/v_ubah_sandi',$variabel);
          } else {
              $exec = $this->m_dashboard->ubahsandi($nama_akun,$kata_sandi,$kata_sandibr);
              if ($exec){
                  redirect(base_url("admin/santriwatiakd/ubahsandiadmin?nama_akun=".$nama_akun."&msg=1"));
              }
          }
      } else {
          $nama_akun = $this->input->get("nama_akun");
          $exec = $this->m_dashboard->lihatubahsandi($nama_akun);
          if ($exec->num_rows()>0){
              $variabel['data'] = $exec ->row_array();
              $this->layout->renderakdp('back-end/akademik/v_ubah_sandi',$variabel);
          } else {
              redirect(base_url("admin/santriwatiakd"));
          }
      }
  }

  function index(){
    $variabel['nama_akun'] = $this->session->userdata('nama_akun');
    $this->layout->renderakdp('back-end/akademik/dashboard_p',$variabel);
  }

  //CRUD santri
  function santri()
  {
      $variabel['data'] = $this->m_santriwati->lihatdata();
      $this->layout->renderakdp('back-end/akademik/santri/v_santri',$variabel,'back-end/akademik/santri/v_santri_js');
  }

  function santrilihat()
  {
      $nis = $this->input->get("nis");
      $exec = $this->m_santriwati->lihatdatasatu($nis);
      if ($exec->num_rows()>0){
          $variabel['data'] = $exec ->row_array();
          $variabel['tingkat'] = $this->m_santriwati->lihattingkatan($nis); ;
          $variabel['tingkatpondokan'] = $this->m_santriwati->lihattingkatanpondokan($nis); ;
          $this->layout->renderakdp('back-end/akademik/santri/v_santri_lihat',$variabel,'back-end/akademik/santri/v_santri_js');
      } else {
          redirect(base_url("admin/santriwatiakd/santri"));
      }

  }

  function santritingkat()
  {
      $nis = $this->input->post("nis");
      $variabel['tingkat'] = $this->m_santriwati->lihattingkatan($nis);
      $this->load->view('back-end/akademik/santri/v_santri_tingkat',$variabel);
  }

  function santritingkatpondokan()
  {
      $nis = $this->input->post("nis");
      $variabel['tingkat'] = $this->m_santriwati->lihattingkatanpondokan($nis);
      $this->load->view('back-end/akademik/santri/v_santri_tingkatpondokan',$variabel);
  }

  function datakotakab2()
  {
    $id=$this->input->post('provinsi');
    $data=$this->m_santriwati->datakotaajax($id);
    echo json_encode($data);
  }

  function datakecamatan2()
  {
    $id=$this->input->post('kecamatan');
    $data=$this->m_santriwati->datakecamatanajax($id);
    echo json_encode($data);
  }

  function datadesa2()
  {
    $id=$this->input->post('desa');
    $data=$this->m_santriwati->datadesaajax($id);
    echo json_encode($data);
  }

  function santritambah()
  {
      if ($this->input->post()){
              $array=array(
                  'nis_lokal'=> $this->input->post('nis_lokal'),
                  'email_santri'=> $this->input->post('email_santri'),
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
                  'hpwali'=>$this->input->post('hpwali'),
                  'kelas'=>$this->input->post('kelas'),
                  'pondokan'=>$this->input->post('pondokan')
                  );
          if ($this->m_santriwati->cekdata($this->input->post('nis_lokal'))==0) {
              $config['upload_path'] = './assets/images/foto';
              $config['allowed_types'] = 'jpg|jpeg|JPG|JPEG|PNG|png';
              $this->load->library('upload', $config);
              $this->upload->do_upload("foto");
              $upload = $this->upload->data();
              $foto = $upload["raw_name"].$upload["file_ext"];
              $array['foto']=$foto;
              $exec = $this->m_santriwati->tambahdata($array);
              if ($exec) redirect(base_url("admin/santriwatiakd/santritambah?msg=1"));
              else redirect(base_url("admin/santriwatiakd/santritambah?msg=0"));
          } else {
              $variabel['provinsi']=$this->m_santriwati->ambilprovinsi();
              $variabel['kabupaten']=$this->m_santriwati->ambilkabupaten($this->input->post('provinsi'));
              $variabel['kecamatan']=$this->m_santriwati->ambilkecamatan($this->input->post('kabupaten_kota'));
              $variabel['desa']=$this->m_santriwati->ambildesa($this->input->post('kecamatan'));
              $variabel['transportasi']=$this->m_santriwati->ambiltransportasi();
              $variabel['pekerjaan']=$this->m_santriwati->ambilpekerjaan();
              $variabel['pendidikan']=$this->m_santriwati->ambilpendidikan();
              $variabel['nis_lokal'] =$this->input->post('nis_lokal');
              $variabel['jenjang']=$this->m_jenjang->lihatdata();
              $variabel['pondokan']=$this->m_pondokan->lihatdata();
              $this->layout->renderakdp('back-end/akademik/santri/v_santri_tambah',$variabel,'back-end/akademik/santri/v_santri_js');
          }

      } else {
           $variabel['provinsi']=$this->m_santriwati->ambilprovinsi();
           $variabel['transportasi']=$this->m_santriwati->ambiltransportasi();
           $variabel['pekerjaan']=$this->m_santriwati->ambilpekerjaan();
           $variabel['pendidikan']
           =$this->m_santriwati->ambilpendidikan();
           $variabel['kabupaten']=$this->m_santriwati->ambilkabupaten("");
           $variabel['kecamatan']=$this->m_santriwati->ambilkecamatan("");
           $variabel['desa']=$this->m_santriwati->ambildesa("");
           $variabel['jenjang']=$this->m_jenjang->lihatdata();
           $variabel['pondokan']=$this->m_pondokan->lihatdata();

          $this->layout->renderakdp('back-end/akademik/santri/v_santri_tambah',$variabel,'back-end/akademik/santri/v_santri_js');
      }
  }

  function santriedit()
  {
      if ($this->input->post()) {
          $array=array(
              'nis_lokal'=> $this->input->post('nis_lokal'),
              'email_santri'=> $this->input->post('email_santri'),
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
              'hpwali'=>$this->input->post('hpwali'),
              'kelas'=>$this->input->post('kelas'),
              'pondokan'=>$this->input->post('pondokan')
              );
          $nis2 = $this->input->post("nis_lokal2");
          $nis = $this->input->post("nis_lokal");
          if (($this->m_santriwati->cekdata($nis)>0) && ($nis2!=$nis)) {
              $variabel['nis_lokal'] =$this->input->post('nis_lokal');
              $variabel['nis_lokal2'] =$this->input->post('nis_lokal2');
              $variabel['data'] = $array;

              $variabel['provinsi']=$this->m_santriwati->ambilprovinsi();
              $variabel['kabupaten']=$this->m_santriwati->ambilkabupaten($this->input->post('provinsi'));
              $variabel['kecamatan']=$this->m_santriwati->ambilkecamatan($this->input->post('kabupaten_kota'));
              $variabel['desa']=$this->m_santriwati->ambildesa($this->input->post('kecamatan'));

              $variabel['transportasi']=$this->m_santriwati->ambiltransportasi();
              $variabel['pekerjaan']=$this->m_santriwati->ambilpekerjaan();
              $variabel['pendidikan']=$this->m_santriwati->ambilpendidikan();
              $variabel['jenjang']=$this->m_jenjang->lihatdata();
              $variabel['pondokan']=$this->m_pondokan->lihatdata();

              $this->layout->renderakdp('back-end/akademik/santri/v_santri_edit',$variabel,'back-end/akademik/santri/v_santri_js');
          } else {
              $config['upload_path'] = './assets/images/foto';
              $config['allowed_types'] = 'jpg|jpeg|JPG|JPEG|pdf|PNG|png';
              $this->load->library('upload', $config);
              if ($this->upload->do_upload("foto"))
              {
                  $upload = $this->upload->data();
                  $foto = $upload["raw_name"].$upload["file_ext"];
                  $array['foto']=$foto;

                  $query2 = $this->m_santriwati->lihatdatasatu($nis2);
                  $row2 = $query2->row();
                  $berkas1temp = $row2->foto;
                  $path1 ='./assets/images/foto/'.$berkas1temp.'';
                  echo "$path1";
                  if(is_file($path1)) {
                      unlink($path1); //menghapus gambar di folder produk
                  }
              }
              $exec = $this->m_santriwati->editdata($nis2,$array);
              if ($exec){
                redirect(base_url("admin/santriwatiakd/santriedit?nis=".$nis."&msg=1"));
              }
          }
    } else {
          $nis = $this->input->get("nis");
          $exec = $this->m_santriwati->lihatdatasatu($nis);
          if ($exec->num_rows()>0){
              $data =  $exec ->row_array();
              $variabel['data'] = $data;

              $variabel['provinsi']=$this->m_santriwati->ambilprovinsi();
              $variabel['transportasi']=$this->m_santriwati->ambiltransportasi();
               $variabel['pekerjaan']=$this->m_santriwati->ambilpekerjaan();
               $variabel['pendidikan']
               =$this->m_santriwati->ambilpendidikan();

               $variabel['kabupaten']=$this->m_santriwati->ambilkabupaten($data['provinsi']);
               $variabel['kecamatan']=$this->m_santriwati->ambilkecamatan($data['kabupaten_kota']);
               $variabel['desa']=$this->m_santriwati->ambildesa($data['kecamatan']);
               $variabel['jenjang']=$this->m_jenjang->lihatdata();
               $variabel['pondokan']=$this->m_pondokan->lihatdata();
              $this->layout->renderakdp('back-end/akademik/santri/v_santri_edit',$variabel,'back-end/akademik/santri/v_santri_js');
          } else {
              redirect(base_url("admin/santriwatiakd/santri"));
          }
    }

  }

  function santrihapus()
  {
     $nis = $this->input->get("nis");
     $exec = $this->m_santriwati->hapus($nis);
     redirect(base_url()."admin/santriwatiakd/santri?msg=1");
  }

  //berkas//

  function santriberkas()
  {
      $nis = $this->input->get("nis");
      $exec = $this->m_santriwati->lihatdatasatu($nis);
      if ($exec->num_rows()>0){
          $variabel['santri'] = $exec->row_array();
          $variabel['data'] = $this->m_santriwati->lihatdataberkas($nis);
          $this->layout->renderakdp('back-end/akademik/santri/v_santriberkas',$variabel,'back-end/akademik/santri/v_santriberkas_js');
      } else {
          redirect(base_url("admin/santriwatiakd/santri"));
      }

  }

  function santritambahberkas()
  {
      $nis = $this->input->get("nis");
      $exec = $this->m_santriwati->lihatdatasatu($nis);
      if ($exec->num_rows()>0){
          $variabel['santri'] = $exec->row_array();
          if ($this->input->post()){
              $config['upload_path'] = './assets/berkas/berkassantri';
              $config['allowed_types'] = 'jpg|jpeg|JPG|JPEG|pdf|png';
              $this->load->library('upload', $config);
              $this->upload->do_upload("file_berkas");
              $upload = $this->upload->data();
              $file_berkas = $upload["raw_name"].$upload["file_ext"];

              $nis_lokal = $this->input->post('nis_lokal');
              $nama_berkas = $this->input->post('nama_berkas');
              $array=array(
                  'nis_lokal'=>  $nis_lokal,
                  'nama_berkas'=> $nama_berkas,
                  'file_berkas' => $file_berkas
                  );

              $exec = $this->m_santriwati->tambahdataberkas($array);
              if ($exec) redirect(base_url("admin/santriwatiakd/santritambahberkas?nis=".$nis_lokal."&msg=1"));
              else redirect(base_url("admin/santriwatiakd/santriberkastambah?nis=".$nis_lokal."&msg=0"));
          } else {

              $this->layout->renderakdp('back-end/akademik/santri/v_santriberkas_tambah',$variabel,'back-end/akademik/santri/v_santriberkas_js');
          }
      } else {
          redirect(base_url("admin/datamaster/santri"));
      }
  }

  function santrihapusberkas()
  {
      $id_berkas = $this->input->get("id_berkas");
      $nis = $this->input->get("nis");

      $query2 = $this->m_santriwati->lihatdatasatuberkas($id_berkas);
      $row2 = $query2->row();
      $berkas1temp = $row2->file_berkas;
      $path1 ="./assets/berkas/berkassantri/".$berkas1temp."";
      if(is_file($path1)) {
          unlink($path1);
      }

      $exec = $this->m_santriwati->hapusberkas($id_berkas);
      redirect(base_url()."admin/santriwatiakd/santriberkas?msg=1&nis=".$nis."");
  }

  function santrieditberkas()
  {
      if ($this->input->post()) {
          $id_berkas = $this->input->post('id_berkas');
          $nama_berkas = $this->input->post('nama_berkas');
          $nis_lokal = $this->input->post('nis_lokal');
          $array=array(
              'nama_berkas'=> $nama_berkas
              );

          $config['upload_path'] = './assets/berkas/berkassantri';
          $config['allowed_types'] = 'jpg|jpeg|JPG|JPEG|pdf';
          $this->load->library('upload', $config);
          if ( $this->upload->do_upload("file_berkas"))
          {
              $upload = $this->upload->data();
              $file_berkas = $upload["raw_name"].$upload["file_ext"];
              $array['file_berkas']=$file_berkas;

              $query2 = $this->m_santriwati->lihatdatasatuberkas($id_berkas);
              $row2 = $query2->row();
              $berkas1temp = $row2->file_berkas;
              $path1 ="./assets/berkas/berkassantri/".$berkas1temp."";
              if(is_file($path1)) {
                  unlink($path1); //menghapus gambar di folder produk
              }
          }
          $exec = $this->m_santriwati->editdataaberkas($id_berkas,$array);
          if ($exec) redirect(base_url("admin/santriwatiakd/santrieditberkas?id=".$id_berkas."&nis=".$nis_lokal."&msg=1"));
          else redirect(base_url("admin/santriwatiakd/santrieditberkas?id=".$id_berkas."&nis=".$nis_lokal."&msg=0"));

      } else {
          $nis = $this->input->get("nis");
          $id = $this->input->get("id");
          $exec = $this->m_santriwati->lihatdatasatu($nis);
          if ($exec->num_rows()>0){
              $variabel['santri'] = $exec ->row_array();
              $exec2 = $this->m_santriwati->lihatdatasatuberkas($id);
              if ($exec2->num_rows()>0){

                  $variabel['data'] = $exec2->row_array();
                  $this->layout->renderakdp('back-end/akademik/santri/v_santriberkas_edit',$variabel,'back-end/datamaster/santri/v_santriberkas_js');
              } else {
                  redirect(base_url("admin/santriwatiakd/santriberkas?nis=$nis"));
              }
          } else {
              redirect(base_url("admin/santriwatiakd/santri"));
          }
      }

  }

  //akhir CRUD santri dan berkas//
//prestasi pelanggaran//
//prestasi//
  function prestasisantri(){
    $nis = $this->input->get('nis');
    $exec = $this->m_santriwati->lihatdatasatu($nis);
    if ($exec->num_rows()>0){
      $variabel['santri'] = $exec->row_array();
      $variabel['data'] = $this->m_prestasi->lihatdata($nis);
      $this->layout->renderakdp('back-end/akademik/prestasi_pelanggaran/v_data_prestasi',$variabel,'back-end/akademik/prestasi_pelanggaran/prestasi_pelanggaran_js');
    } else {
      redirect(base_url("admin/santriwatiakd/santri"));
    }
  }

  function tambahprestasi(){
    if($this->input->post()){
      $nis = $this->input->post('nis_santri');
      $array = array(
        'nis_santri' => $this->input->post('nis_santri'),
        'tanggal_prestasi' =>  $this->input->post('tanggal_prestasi'),
        'jenis_prestasi' => $this->input->post('jenis_prestasi'),
        'prestasi' => $this->input->post('nama_prestasi'),

        'keterangan' => $this->input->post('keterangan')
      );
      $exec = $this->m_prestasi->tambahdata($array);
      if($exec){
        redirect(base_url("admin/santriwatiakd/tambahprestasi?nis=$nis&msg=1"));
      } else{
        redirect(base_url("admin/santriwatiakd/tambahprestasi?nis=$nis&msg=0"));
      }
    } else {
        $nis = $this->input->get('nis');
        $exec = $this->m_santriwati->lihatdatasatu($nis);
        $variabel['santri'] = $exec->row_array();
        $variabel['nis_santri'] = $nis;
        $this->layout->renderakdp('back-end/akademik/prestasi_pelanggaran/v_prestasi_tambah',$variabel,'back-end/akademik/prestasi_pelanggaran/prestasi_pelanggaran_js');
    }
  }

  function ubahprestasi(){
    if($this->input->post()){
      $id = $this->input->post('id_prestasi');
      $nis = $this->input->post('nis_santri');
      $array = array(
        'tanggal_prestasi' =>  $this->input->post('tanggal_prestasi'),
        'jenis_prestasi' => $this->input->post('jenis_prestasi'),
        'prestasi' => $this->input->post('nama_prestasi'),

        'keterangan' => $this->input->post('keterangan')
      );
      $exec = $this->m_prestasi->editdata($id,$array);
      if($exec){
        redirect(base_url("admin/santriwatiakd/ubahprestasi?nis=$nis&id=$id&msg=1"));
      } else{
        redirect(base_url("admin/santriwatiakd/ubahprestasi?nis=$nis&id=$id&msg=0"));
      }
    } else {
      $id = $this->input->get('id');
      $nis = $this->input->get('nis');
      $exec = $this->m_santriwati->lihatdatasatu($nis);
        if ($exec->num_rows()>0){
      $exec2 = $this->m_prestasi->ambildata($id);
      $variabel['santri'] = $exec->row_array();
      $variabel['data'] = $exec2->row_array();
      $this->layout->renderakdp('back-end/akademik/prestasi_pelanggaran/v_prestasi_ubah',$variabel,'back-end/akademik/prestasi_pelanggaran/prestasi_pelanggaran_js');
    } else{
      redirect(base_url("admin/santriwatiakd/santri"));
    }
    }

  }

  function hapusprestasi(){
    $id = $this->input->get("id");
    $nis = $this->input->get('nis');
    $exec = $this->m_prestasi->hapus($id);
    redirect(base_url()."admin/santriwatiakd/prestasisantri?nis=$nis&msg=1");
  }

  //pelanggaran//
  function pelanggaransantri(){
    $nis = $this->input->get('nis');
    $exec = $this->m_santriwati->lihatdatasatu($nis);
    if ($exec->num_rows()>0){
      $variabel['santri'] = $exec->row_array();
      $variabel['data'] = $this->m_pelanggaran->lihatdata($nis);
      $this->layout->renderakdp('back-end/akademik/prestasi_pelanggaran/v_data_pelanggaran',$variabel,'back-end/akademik/prestasi_pelanggaran/prestasi_pelanggaran_js');
    } else {
      redirect(base_url("santriwatiakd/datamaster/santri"));
    }
  }

  function tambahpelanggaran(){
    if($this->input->post()){
      $nis = $this->input->post('nis_santri');
      $array = array(
        'nis_santri' => $this->input->post('nis_santri'),
        'tanggal_pelanggaran' =>  $this->input->post('tanggal_pelanggaran'),
        'jenis_pelanggaran' => $this->input->post('jenis_pelanggaran'),
        'pelanggaran' => $this->input->post('nama_pelanggaran'),

        'keterangan' => $this->input->post('keterangan')
      );
      $exec = $this->m_pelanggaran->tambahdata($array);
      if($exec){
        redirect(base_url("admin/santriwatiakd/tambahpelanggaran?nis=$nis&msg=1"));
      } else{
        redirect(base_url("admin/santriwatiakd/tambahpelanggaran?nis=$nis&msg=0"));
      }
    } else {
        $nis = $this->input->get('nis');
        $exec = $this->m_santriwati->lihatdatasatu($nis);
        $variabel['santri'] = $exec->row_array();
        $variabel['nis_santri'] = $nis;
        $this->layout->renderakdp('back-end/akademik/prestasi_pelanggaran/v_pelanggaran_tambah',$variabel,'back-end/akademik/prestasi_pelanggaran/prestasi_pelanggaran_js');
    }
  }

  function ubahpelanggaran(){
    if($this->input->post()){
      $id = $this->input->post('id_pelanggaran');
      $nis = $this->input->post('nis_santri');
      $array = array(
        'tanggal_pelanggaran' =>  $this->input->post('tanggal_pelanggaran'),
        'jenis_pelanggaran' => $this->input->post('jenis_pelanggaran'),
        'pelanggaran' => $this->input->post('nama_pelanggaran'),

        'keterangan' => $this->input->post('keterangan')
      );
      $exec = $this->m_pelanggaran->editdata($id,$array);
      if($exec){
        redirect(base_url("admin/santriwatiakd/ubahpelanggaran?nis=$nis&id=$id&msg=1"));
      } else{
        redirect(base_url("admin/santriwatiakd/ubahpelanggaran?nis=$nis&id=$id&msg=0"));
      }
    } else {
      $id = $this->input->get('id');
      $nis = $this->input->get('nis');
      $exec = $this->m_santriwati->lihatdatasatu($nis);
        if ($exec->num_rows()>0){
      $exec2 = $this->m_pelanggaran->ambildata($id);
      $variabel['santri'] = $exec->row_array();
      $variabel['data'] = $exec2->row_array();
      $this->layout->renderakdp('back-end/akademik/prestasi_pelanggaran/v_pelanggaran_ubah',$variabel,'back-end/akademik/prestasi_pelanggaran/prestasi_pelanggaran_js');
    } else{
      redirect(base_url("admin/santriwatiakd/santri"));
    }
    }

  }

  function hapuspelanggaran(){
    $id = $this->input->get("id");
    $nis = $this->input->get('nis');
    $exec = $this->m_pelanggaran->hapus($id);
    redirect(base_url()."admin/santriwatiakd/pelanggaransantri?nis=$nis&msg=1");
  }
  //akhir prestasi pelanggaran//

  //crud guru//
  function guru()
  {
      $variabel['data'] = $this->m_guru->lihatdata();
      $this->layout->renderakdp('back-end/akademik/guru/v_guru',$variabel,'back-end/akademik/guru/v_guru_js');
  }

  function gurulihat()
  {
      $nip = $this->input->get("nip");
      $exec = $this->m_guru->lihatdatasatu($nip);
      if ($exec->num_rows()>0){
          $variabel['data'] = $exec ->row_array();
          $this->layout->renderakdp('back-end/akademik/guru/v_guru_lihat',$variabel,'back-end/akademik/guru/v_guru_js');
      } else {
          redirect(base_url("admin/santriwatiakd/guru"));
      }

  }

  function gurutambah()
  {
      if ($this->input->post()){

              $array=array(
                  'nip_guru'=> $this->input->post('nip_guru'),
                  'nik'=> $this->input->post('nik'),
                  'email_guru'=> $this->input->post('email_guru'),
                  'hp_guru'=> $this->input->post('hp_guru'),
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
                  'pendidikan_terakhir'=>$this->input->post('pendidikan_terakhir'),
                  'perguruan_tinggi'=>$this->input->post('perguruan_tinggi'),
                  'bidang_ilmu'=>$this->input->post('bidang_ilmu'),
                  'tahun_masuk'=>$this->input->post('tahun_masuk'),
                  'tahun_lulus'=>$this->input->post('tahun_lulus')



                  );
          if ($this->m_guru->cekdata($this->input->post('nip_guru'))==0) {
              $config['upload_path'] = './assets/images/foto';
              $config['allowed_types'] = 'jpg|jpeg|JPG|JPEG|PNG|png';
              $this->load->library('upload', $config);
              $this->upload->do_upload("foto");
              $upload = $this->upload->data();
              $foto = $upload["raw_name"].$upload["file_ext"];
              $array['foto']=$foto;
              $exec = $this->m_guru->tambahdata($array);
              if ($exec) redirect(base_url("admin/santriwatiakd/gurutambah?msg=1"));
              else redirect(base_url("admin/santriwatiakd/gurutambah?msg=0"));
          } else {



              $variabel['provinsi']=$this->m_santriwati->ambilprovinsi();
              $variabel['kabupaten']=$this->m_santriwati->ambilkabupaten($this->input->post('provinsi'));
              $variabel['kecamatan']=$this->m_santriwati->ambilkecamatan($this->input->post('kabupaten_kota'));
              $variabel['desa']=$this->m_santriwati->ambildesa($this->input->post('kecamatan'));
              $variabel['pendidikan']=$this->m_santriwati->ambilpendidikan();

              $variabel['nip_guru'] =$this->input->post('nip_guru');
              $this->layout->renderakdp('back-end/akademik/guru/v_guru_tambah',$variabel,'back-end/akademik/guru/v_guru_js');
          }

      } else {
           $variabel['provinsi']=$this->m_santriwati->ambilprovinsi();
           $variabel['pendidikan']
           =$this->m_santriwati->ambilpendidikan();
           $variabel['kabupaten']=$this->m_santriwati->ambilkabupaten("");
           $variabel['kecamatan']=$this->m_santriwati->ambilkecamatan("");
           $variabel['desa']=$this->m_santriwati->ambildesa("");
          $this->layout->renderakdp('back-end/akademik/guru/v_guru_tambah',$variabel,'back-end/datamaster/guru/v_guru_js');
      }
  }

  function guruedit()
  {
      if ($this->input->post()) {
          $array=array(
              'nip_guru'=> $this->input->post('nip_guru'),
              'nik'=> $this->input->post('nik'),
              'email_guru'=> $this->input->post('email_guru'),
              'hp_guru'=> $this->input->post('hp_guru'),
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
              'pendidikan_terakhir'=>$this->input->post('pendidikan_terakhir'),
              'perguruan_tinggi'=>$this->input->post('perguruan_tinggi'),
              'bidang_ilmu'=>$this->input->post('bidang_ilmu'),
              'tahun_masuk'=>$this->input->post('tahun_masuk'),
              'tahun_lulus'=>$this->input->post('tahun_lulus')
              );
          $nip2 = $this->input->post("nip_guru2");
          $nip = $this->input->post("nip_guru");
          if (($this->m_guru->cekdata($nip)>0) && ($nip2!=$nip)) {
              $variabel['nip_guru'] =$this->input->post('nip_guru');
              $variabel['nip_guru2'] =$this->input->post('nip_guru2');
              $variabel['data'] = $array;

              $variabel['provinsi']=$this->m_santriwati->ambilprovinsi();
              $variabel['kabupaten']=$this->m_santriwati->ambilkabupaten($this->input->post('provinsi'));
              $variabel['kecamatan']=$this->m_santriwati->ambilkecamatan($this->input->post('kabupaten_kota'));
              $variabel['desa']=$this->m_santriwati->ambildesa($this->input->post('kecamatan'));
              $variabel['pendidikan']=$this->m_santriwati->ambilpendidikan();

              $this->layout->renderakdp('back-end/akademik/guru/v_guru_edit',$variabel,'back-end/akademik/guru/v_guru_js');
          } else {
              $config['upload_path'] = './assets/images/foto';
              $config['allowed_types'] = 'jpg|jpeg|JPG|JPEG|pdf|PNG|png';
              $this->load->library('upload', $config);
              if ($this->upload->do_upload("foto"))
              {
                  $upload = $this->upload->data();
                  $foto = $upload["raw_name"].$upload["file_ext"];
                  $array['foto']=$foto;

                  $query2 = $this->m_guru->lihatdatasatu($nip2);
                  $row2 = $query2->row();
                  $berkas1temp = $row2->foto;
                  $path1 ='./assets/images/foto/'.$berkas1temp.'';
                  echo "$path1";
                  if(is_file($path1)) {
                      unlink($path1); //menghapus gambar di folder produk
                  }
              }
              $exec = $this->m_guru->editdata($nip2,$array);
              if ($exec){
                redirect(base_url("admin/santriwatiakd/guruedit?nip=".$nip."&msg=1"));
              }
          }
    } else {
          $nip = $this->input->get("nip");
          $exec = $this->m_guru->lihatdatasatu($nip);
          if ($exec->num_rows()>0){
               $variabel['data'] = $exec ->row_array();
               $data = $variabel['data'];
               $variabel['provinsi']=$this->m_santriwati->ambilprovinsi();
               $variabel['pendidikan']=$this->m_santriwati->ambilpendidikan();
               $variabel['kabupaten']=$this->m_santriwati->ambilkabupaten($data['provinsi']);
               $variabel['kecamatan']=$this->m_santriwati->ambilkecamatan($data['kabupaten_kota']);
               $variabel['desa']=$this->m_santriwati->ambildesa($data['kecamatan']);
              $this->layout->renderakdp('back-end/akademik/guru/v_guru_edit',$variabel,'back-end/akademik/guru/v_guru_js');
          } else {
              redirect(base_url("admin/santriwatiakd/guru"));
          }
    }

  }

  function guruhapus()
  {
     $nip = $this->input->get("nip");
     $exec = $this->m_guru->hapus($nip);
     redirect(base_url()."admin/santriwatiakd/guru?msg=1");
  }

  function guruberkas()
  {
      $nip = $this->input->get("nip");
      $exec = $this->m_guru->lihatdatasatu($nip);
      if ($exec->num_rows()>0){
          $variabel['guru'] = $exec->row_array();
          $variabel['data'] = $this->m_guru->lihatdataberkas($nip);
          $this->layout->renderakdp('back-end/akademik/guru/v_guruberkas',$variabel,'back-end/akademik/guru/v_guruberkas_js');
      } else {
          redirect(base_url("admin/santriwatiakd/guru"));
      }

  }

  function gurutambahberkas()
  {
      $nip = $this->input->get("nip");
      $exec = $this->m_guru->lihatdatasatu($nip);
      if ($exec->num_rows()>0){
          $variabel['guru'] = $exec->row_array();
          if ($this->input->post()){
              $config['upload_path'] = './assets/berkas/berkasguru';
              $config['allowed_types'] = 'jpg|jpeg|JPG|JPEG|pdf';
              $this->load->library('upload', $config);
              $this->upload->do_upload("file_berkas");
              $upload = $this->upload->data();
              $file_berkas = $upload["raw_name"].$upload["file_ext"];

              $nip_guru = $this->input->post('nip_guru');
              $nama_berkas = $this->input->post('nama_berkas');
              $array=array(
                  'nip_guru'=>  $nip_guru,
                  'nama_berkas'=> $nama_berkas,
                  'file_berkas' => $file_berkas
                  );

              $exec = $this->m_guru->tambahdataberkas($array);
              if ($exec) redirect(base_url("admin/santriwatiakd/gurutambahberkas?nip=".$nip_guru."&msg=1"));
              else redirect(base_url("admin/santriwatiakd/guruberkastambah?nip=".$nip_guru."&msg=0"));
          } else {

              $this->layout->renderakdp('back-end/akademik/guru/v_guruberkas_tambah',$variabel,'back-end/akademik/guru/v_guruberkas_js');
          }
      } else {
          redirect(base_url("admin/santriwatiakd/guru"));
      }
  }
  function guruhapusberkas()
  {
      $id_berkas = $this->input->get("id_berkas");
      $nip = $this->input->get("nip");

      $query2 = $this->m_guru->lihatdatasatuberkas($id_berkas);
      $row2 = $query2->row();
      $berkas1temp = $row2->file_berkas;
      $path1 ="./assets/berkas/berkasguru/".$berkas1temp."";
      if(is_file($path1)) {
          unlink($path1);
      }

      $exec = $this->m_guru->hapusberkas($id_berkas);
      redirect(base_url()."admin/santriwatiakd/guruberkas?msg=1&nip=".$nip."");
  }

  function gurueditberkas()
  {
      if ($this->input->post()) {
          $id_berkas = $this->input->post('id_berkas');
          $nama_berkas = $this->input->post('nama_berkas');
          $nip_guru = $this->input->post('nip_guru');
          $array=array(
              'nama_berkas'=> $nama_berkas
              );

          $config['upload_path'] = './assets/berkas/berkasguru';
          $config['allowed_types'] = 'jpg|jpeg|JPG|JPEG|pdf';
          $this->load->library('upload', $config);
          if ( $this->upload->do_upload("file_berkas"))
          {
              $upload = $this->upload->data();
              $file_berkas = $upload["raw_name"].$upload["file_ext"];
              $array['file_berkas']=$file_berkas;

              $query2 = $this->m_guru->lihatdatasatuberkas($id_berkas);
              $row2 = $query2->row();
              $berkas1temp = $row2->file_berkas;
              $path1 ="./assets/berkas/berkasguru/".$berkas1temp."";
              if(is_file($path1)) {
                  unlink($path1); //menghapus gambar di folder produk
              }
          }
          $exec = $this->m_guru->editdataaberkas($id_berkas,$array);
          if ($exec) redirect(base_url("admin/santriwatiakd/gurueditberkas?id=".$id_berkas."&nip=".$nip_guru."&msg=1"));
          else redirect(base_url("admin/santriwatiakd/gurueditberkas?id=".$id_berkas."&nip=".$nip_guru."&msg=0"));

      } else {
          $nip = $this->input->get("nip");
          $id = $this->input->get("id");
          $exec = $this->m_guru->lihatdatasatu($nip);
          if ($exec->num_rows()>0){
              $variabel['guru'] = $exec ->row_array();
              $exec2 = $this->m_guru->lihatdatasatuberkas($id);
              if ($exec2->num_rows()>0){

                  $variabel['data'] = $exec2->row_array();
                  $this->layout->renderakdp('back-end/akademik/guru/v_guruberkas_edit',$variabel,'back-end/akademik/guru/v_guruberkas_js');
              } else {
                  redirect(base_url("admin/santriwatiakd/guruberkas?nip=$nip"));
              }
          } else {
              redirect(base_url("admin/santriwatiakd/guru"));
          }
      }

  }
  //akhir crud guru//

  //crud ruang kelas//
  function kelas(){
        $variabel['data'] = $this->m_kelas->lihatdata();
       $this->layout->renderakdp('back-end/akademik/kelas/v_kelas',$variabel,'back-end/akademik/kelas/v_kelas_js');
  }

  function kelaslihat()
  {
      $kd_kelas = $this->input->get("kd_kelas");
      $exec = $this->m_kelas->lihatdatasatu($kd_kelas);
      if ($exec->num_rows()>0){
          $variabel['data'] = $exec ->row_array();
          $this->layout->renderakdp('back-end/akademik/kelas/v_kelas_lihat',$variabel,'back-end/akademik/kelas/v_kelas_js');
      } else
          redirect(base_url("admin/santriwatiakd/kelas"));
  }

  function kelastambah()
  {
      if ($this->input->post()){
              $array=array(
                  'kd_kelas'=> NULL,
                  'nama_kelas'=> $this->input->post('nama_kelas'),
                  'tingkat_kelas'=> $this->input->post('tingkat_kelas'),
                  'kapasitas'=>$this->input->post('kapasitas')
                  );

              $exec = $this->m_kelas->tambahdata($array);
              if ($exec) redirect(base_url("admin/santriwatiakd/kelastambah?msg=1"));
              else redirect(base_url("admin/santriwatiakd/kelastambah?msg=0"));
      } else {
          $variabel ='';
          $this->layout->renderakdp('back-end/akademik/kelas/v_kelas_tambah',$variabel,'back-end/akademik/kelas/v_kelas_js');
      }
  }
  function kelasedit()
  {
      if ($this->input->post()) {
          $kode = $this->input->post('kd_kelas');
          $array=array(
              'nama_kelas'=> $this->input->post('nama_kelas'),
              'tingkat_kelas'=> $this->input->post('tingkat_kelas'),
              'kapasitas'=> $this->input->post('kapasitas')
              );

              $exec = $this->m_kelas->editdata($kode,$array);
              if ($exec)
                redirect(base_url("admin/santriwatiakd/kelasedit?kd_kelas=".$kode."&msg=1"));
              else
                   redirect(base_url("admin/santriwatiakd/kelasedit?kd_kelas=".$kode."&msg=0"));
      }
      else{
          $kode = $this->input->get("kd_kelas");
          $exec = $this->m_kelas->lihatdatasatu($kode);
          if ($exec->num_rows()>0){
                  $variabel['data'] = $exec ->row_array();
                  $this->layout->renderakdp('back-end/akademik/kelas/v_kelas_edit',$variabel,'back-end/akademik/kelas/v_kelas_js');
          }
          else
              redirect(base_url("admin/santriwatiakd/kelas"));
      }
  }

  function kelashapus()
  {
     $kode = $this->input->get("kd_kelas");
     $exec = $this->m_kelas->hapus($kode);
     redirect(base_url()."admin/santriwatiakd/kelas?msg=1");
  }
  //akhir ruang kelas//

  //crud pelajaran (guru + matpel)//
  function pelajaran(){
       $variabel['data'] = $this->m_pelajaran->lihatdata();
       $this->layout->renderakdp('back-end/akademik/presensi_pelajaran/v_pelajaran',$variabel,'back-end/akademik/presensi_pelajaran/v_pelajaran_js');
  }

   function pelajaranlihat()
   {
       $id_pelajaran = $this->input->get("id_pelajaran");
       $exec = $this->m_pelajaran->lihatdatasatu($id_pelajaran);
       if ($exec->num_rows()>0){
           $variabel['data'] = $exec ->row_array();
           $this->layout->renderakdp('back-end/akademik/presensi_pelajaran/v_pelajaran_lihat',$variabel,'back-end/akademik/presensi_pelajaran/v_pelajaran_js');
       } else
           redirect(base_url("admin/santriwatiakd/pelajaran"));
   }
   function pelajarantambah()
   {
       if ($this->input->post()){
             $array=array(
                 'id_pelajaran'=> NULL,
                 'nip_guru'=> $this->input->post('nip_guru'),
                 'id_mata_pelajaran'=> $this->input->post('id_mata_pelajaran')
                 );

               $exec = $this->m_pelajaran->tambahdata($array);
               if ($exec) redirect(base_url("admin/santriwatiakd/pelajarantambah?msg=1"));
               else redirect(base_url("admin/santriwatiakd/pelajarantambah?msg=0"));
       } else {
           //$variabel ='';
           $variabel['nip_guru']=$this->m_pelajaran->ambilguru();
           $variabel['id_mata_pelajaran']=$this->m_pelajaran->ambilmatpel();
           $this->layout->renderakdp('back-end/akademik/presensi_pelajaran/v_pelajaran_tambah',$variabel,'back-end/akademik/presensi_pelajaran/v_pelajaran_js');
       }
   }

   function pelajaranedit()
   {
       if ($this->input->post()) {
           $kode = $this->input->post('id_pelajaran');
           $array=array(
             'nip_guru'=> $this->input->post('nip_guru'),
             'id_mata_pelajaran'=> $this->input->post('id_mata_pelajaran')
               );

               $exec = $this->m_pelajaran->editdata($kode,$array);
               if ($exec)
                 redirect(base_url("admin/santriwatiakd/pelajaranedit?id_pelajaran=".$kode."&msg=1"));
               else
                 redirect(base_url("admin/santriwatiakd/pelajaranedit?id_pelajaran=".$kode."&msg=0"));
       }
       else{
           $kode = $this->input->get("id_pelajaran");
           $exec = $this->m_pelajaran->lihatdatasatu($kode);
           $variabel['nip_guru']=$this->m_pelajaran->ambilguru();
           $variabel['id_mata_pelajaran']=$this->m_pelajaran->ambilmatpel();
           if ($exec->num_rows()>0){
                   $variabel['data'] = $exec ->row_array();
                   $this->layout->renderakdp('back-end/akademik/presensi_pelajaran/v_pelajaran_edit',$variabel,'back-end/akademik/presensi_pelajaran/v_pelajaran_js');
           }
           else
               redirect(base_url("admin/santriwatiakd/pelajaran"));
       }
   }

   function pelajaranhapus()
   {
      $kode = $this->input->get("id_pelajaran");
      $exec = $this->m_pelajaran->hapus($kode);
      redirect(base_url()."admin/santriwatiakd/pelajaran?msg=1");
   }
   //akhir pelajaran (matpel + guru)//

   //crud mata pelajaran//
  function matpel(){
       $variabel['data'] = $this->m_matpel->lihatdata();
      $this->layout->renderakdp('back-end/akademik/matpel/v_matpel',$variabel,'back-end/akademik/matpel/v_matpel_js');
  }

  function matpellihat()
  {
      $id_mata_pelajaran = $this->input->get("id_matpel");
      $exec = $this->m_matpel->lihatdatasatu($id_mata_pelajaran);
      if ($exec->num_rows()>0){
          $variabel['data'] = $exec ->row_array();
          $this->layout->renderakdp('back-end/akademik/matpel/v_matpel_lihat',$variabel,'back-end/akademik/matpel/v_matpel_js');
      } else {
          redirect(base_url("admin/santriwatiakd/matpel"));
      }
  }
  function matpeltambah()
  {
      if ($this->input->post()){
              $array=array(
                  'id_mata_pelajaran'=> NULL,
                  'nama_mata_pelajaran'=> $this->input->post('nama_matpel'),
                  'tingkat_mata_pelajaran'=> $this->input->post('tingkat_matpel'),
                  'semester_mata_pelajaran'=> $this->input->post('semester_matpel'),
                  'kelas_mata_pelajaran'=> $this->input->post('kelas_matpel')
                  );

              $exec = $this->m_matpel->tambahdata($array);
              if ($exec) redirect(base_url("admin/santriwatiakd/matpeltambah?msg=1"));
              else redirect(base_url("admin/santriwatiakd/matpeltambah?msg=0"));
      } else {
          $variabel ='';
          $this->layout->renderakdp('back-end/akademik/matpel/v_matpel_tambah',$variabel,'back-end/akademik/matpel/v_matpel_js');
      }
  }

  function matpeledit()
  {
      if ($this->input->post()) {
          $kode = $this->input->post('id_matpel');
          $array=array(
              'nama_mata_pelajaran'=> $this->input->post('nama_matpel'),
              'tingkat_mata_pelajaran'=> $this->input->post('tingkat_matpel'),
              'semester_mata_pelajaran'=> $this->input->post('semester_matpel'),
              'kelas_mata_pelajaran'=> $this->input->post('kelas_matpel')
              );
              $exec = $this->m_matpel->editdata($kode,$array);
              if ($exec)
                redirect(base_url("admin/santriwatiakd/matpeledit?id_matpel=".$kode."&msg=1"));
              else
                  redirect(base_url("admin/santriwatiakd/matpeledit?id_matpel=".$kode."&msg=0"));
      }
      else{
          $kode = $this->input->get("id_matpel");
          $exec = $this->m_matpel->lihatdatasatu($kode);
          if ($exec->num_rows()>0){
                  $variabel['data'] = $exec ->row_array();
                  $this->layout->renderakdp('back-end/akademik/matpel/v_matpel_edit',$variabel,'back-end/akademik/matpel/v_matpel_js');
          }
          else
              redirect(base_url("admin/santriwatiakd/matpel"));
      }
  }
  function matpelhapus()
  {
     $kode = $this->input->get("id_matpel");
     $exec = $this->m_matpel->hapus($kode);
     redirect(base_url()."admin/santriwatiakd/matpel?msg=1");
  }
  //akhir pelajaran//
  //afiliasi//
  function datakelasbelajar()
  {
     $variabel['data']=$this->m_presensi->lihatdata();
     $this->layout->renderakdp('back-end/akademik/presensi_kelas/v_presensi_kelas',$variabel,'back-end/akademik/presensi_kelas/v_preskelas_js');
  }

  function aturkelasbelajar(){
       if ($this->input->post()){
           $array=array(
               'nip_guru'=> $this->input->post('nip_guru'),
               'nama_kelas_belajar'=> $this->input->post('nama_kelas_belajar'),
               'kd_kelas'=> $this->input->post('kd_kelas'),
               'status_kelas'=>$this->input->post('status_kelas'),
               'id_tahun'=>$this->input->post('id_tahun'),
               'jenjang'=>$this->input->post('jenjang'),
               'tingkat'=>$this->input->post('tingkatan')
               );
           $exec = $this->m_presensi->tambahdata($array);
           if ($exec) redirect(base_url("admin/santriwatiakd/aturkelasbelajar?msg=1"));
           else redirect(base_url("admin/santriwatiakd/aturkelasbelajar?msg=0"));
       } else {
           $variabel['ruangkelas']=$this->m_kelas->lihatdata();
           $variabel['tahunajaran']=$this->m_tahun_ajaran->lihatdata();
           $variabel['guru']=$this->m_guru->lihatdata();
           $variabel['jenjang']=$this->m_jenjang->lihatdata();
           $this->layout->renderakdp('back-end/akademik/presensi_kelas/v_presensi_atur',$variabel,'back-end/akademik/presensi_kelas/v_preskelas_js');
       }
  }

  function hapuskelasbelajar()
   {
      $id = $this->input->get("id");
      $exec = $this->m_presensi->hapus($id);
      redirect(base_url()."admin/santriwatiakd/datakelasbelajar?msg=1");
   }

   function editkelasbelajar()
   {
       if ($this->input->post()) {
           $array=array(
               'nip_guru'=> $this->input->post('nip_guru'),
               'nama_kelas_belajar'=> $this->input->post('nama_kelas_belajar'),
               'kd_kelas'=> $this->input->post('kd_kelas'),
               'status_kelas'=>$this->input->post('status_kelas'),
               'id_tahun'=>$this->input->post('id_tahun'),
               'jenjang'=>$this->input->post('jenjang'),
               'tingkat'=>$this->input->post('tingkatan')
               );
           $id_kelas_belajar = $this->input->post("id_kelas_belajar");
           $exec = $this->m_presensi->editdata($id_kelas_belajar,$array);
           if ($exec){
               redirect(base_url("admin/santriwatiakd/editkelasbelajar?id=".$id_kelas_belajar."&msg=1"));
           }
     } else {
           $id_kelas_belajar = $this->input->get("id");
           $exec = $this->m_presensi->lihatdatasatu($id_kelas_belajar);
           if ($exec->num_rows()>0){
               $variabel['ruangkelas']=$this->m_kelas->lihatdata();
               $variabel['tahunajaran']=$this->m_tahun_ajaran->lihatdata();
               $variabel['guru']=$this->m_guru->lihatdata();
               $variabel['data'] = $exec->row_array();
               $variabel['jenjang']=$this->m_jenjang->lihatdata();
               $variabel['tingkatan']=$this->m_jenjang->lihatdatatingkatan($variabel['data']['jenjang']);
               $this->layout->renderakdp('back-end/akademik/presensi_kelas/v_presensi_edit',$variabel,'back-end/akademik/presensi_kelas/v_preskelas_js');
           } else {
               redirect(base_url("admin/santriwatiakd/datakelasbelajar"));
           }
     }


   }

   function lihatkelasbelajar()
   {
       $id_kelas_belajar = $this->input->get("id");
       $exec = $this->m_presensi->lihatdatasatulengkap($id_kelas_belajar);
       if ($exec->num_rows()>0){
           $variabel['data'] = $exec->row_array();
           $variabel['santri'] = $this->m_presensi->lihatdatasantri($id_kelas_belajar);
           $this->layout->renderakdp('back-end/akademik/presensi_kelas/v_presensi_lihat',$variabel,'back-end/akademik/presensi_kelas/v_preskelas_js');
       } else {
           redirect(base_url("admin/santriwatiakd/datakelasbelajar"));
       }
   }

   function hapuskelassantri()
   {
      $id = $this->input->get("id");
      $idkelas = $this->input->get("idkelas");
      $exec = $this->m_presensi->hapussantri($id);
      redirect(base_url()."admin/santriwatiakd/lihatkelasbelajarsantri?id=".$idkelas."&h=1");
   }

   function lihatkelasbelajarsantri()
   {
       $id = $this->input->get("id");
       $exec = $this->m_presensi->lihatdatasatulengkap($id);
       if ($exec->num_rows()>0){
           $variabel['santri'] = $exec->row_array();
           $variabel['data'] = $this->m_presensi->lihatdatasantri($id);
           $this->layout->renderakdp('back-end/akademik/presensi_kelas/v_santri',$variabel,'back-end/akademik/presensi_kelas/v_santri_js');
       } else {
           redirect(base_url("admin/santriwatiakd/datakelasbelajar"));
       }
   }

   function kelastambahsantri()
   {
       $idkelasbelajar = $this->input->post("id_kelas_belajar");
       $variabel['lissantri'] = $this->m_presensi->lissantri($idkelasbelajar);
       $this->load->view("back-end/akademik/presensi_kelas/v_santri_tambah",$variabel);

   }

   function tambahsantriproses()
   {
       $idkelasbelajar = $this->input->post("idkelasbelajar");
       $nis = $this->input->post("nis");
       $array = array (
           "id_kelas_belajar"=>$idkelasbelajar,
           "nis_lokal"=>$nis
       );
       $exec = $this->m_presensi->tambahdatasantri($array);

   }

   function kelaseditsantri()
   {
       $idkelasbelajar = $this->input->post("id_kelas_belajar");
       $variabel['lissantri'] = $this->m_presensi->lissantri($idkelasbelajar);
       $id_kelas_santri = $this->input->post("id");
       $variabel['data'] = $this->m_presensi->lihatdatasatusantri($id_kelas_santri)->row_array();
       $this->load->view("back-end/akdemik/presensi_kelas/v_santri_edit",$variabel);

   }

   function editsantriproses()
   {
       $idkelasbelajar = $this->input->post("idkelasbelajar");
       $nis = $this->input->post("nis");
       $id_kelas_santri = $this->input->post("id_kelas_santri");
       $array = array (
           "nis_lokal"=>$nis
       );
       $exec = $this->m_presensi->editdatasantri($id_kelas_santri,$array);
   }

   function kelaseditbelajar()
   {
       $idkelasbelajar = $this->input->post("id");
       $variabel['data'] = $this->m_presensi->lihatdatasatu($idkelasbelajar)->row_array();
       $this->load->view("back-end/akademik/presensi_kelas/v_presensi_editstatus",$variabel);

   }

   function editkelasproses()
   {
       $id_kelas_belajar = $this->input->post("id_kelas_belajar");
       $status_kelas = $this->input->post("status_kelas");
       $array = array (
           "status_kelas"=>$status_kelas
       );
       $exec = $this->m_presensi->editdata($id_kelas_belajar,$array);
   }

   function jadwalafilasi()
   {
       $id = $this->input->get("id");
       $exec = $this->m_presensi->lihatdatasatulengkap($id);
       if ($exec->num_rows()>0) {
           $variabel['jadwal'] = $exec->row_array();
           $variabel['datasenin'] = $this->m_presensi->lihatdatajadwal($id,'Senin');
           $variabel['dataselasa'] = $this->m_presensi->lihatdatajadwal($id,'Selasa');
           $variabel['datarabu'] = $this->m_presensi->lihatdatajadwal($id,'Rabu');
           $variabel['datakamis'] = $this->m_presensi->lihatdatajadwal($id,'Kamis');
           $variabel['datajumat'] = $this->m_presensi->lihatdatajadwal($id,"Jum'at");
           $variabel['datasabtu'] = $this->m_presensi->lihatdatajadwal($id,'Sabtu');
           $variabel['dataahad'] = $this->m_presensi->lihatdatajadwal($id,'Ahad');
           $this->layout->renderakdp('back-end/akademik/presensi_kelas/v_jadwal',$variabel,'back-end/akademik/presensi_kelas/v_jadwal_js');
       } else {
           redirect(base_url("admin/santriwatiakd/datakelasafilasi"));
       }
   }

   function tambahjadwalafilasi()
   {
       $idkelaspondokan = $this->input->post("id_kelas_belajar");
       $variabel['pelajaran'] = $this->m_pelajaran->lihatdata();
       $variabel['jam'] = $this->m_pak_afilasi->lihatdata();
       $this->load->view("back-end/akademik/presensi_kelas/v_jadwal_tambah",$variabel);
   }

   function tambahjadwalafilasiproses()
   {
       $idkelasbelajar = $this->input->post("idkelasbelajar");
       $id_pelajaran = $this->input->post("mata_pelajaran");
       $hari = $this->input->post("hari");
       $jam = $this->input->post("jam");

       $array = array (
           "id_kelas_belajar"=>$idkelasbelajar,
           "id_mata_pelajaran"=>$id_pelajaran,
           "hari"=>$hari,
           "jam"=>$jam
       );

       if ($id_pelajaran=="Istirahat"){
           $array["mata_pelajaran"]="Istirahat";
           $array["nip"]="Istirahat";
           $array["guru"]="Istirahat";
       } else {
           $data = $this->m_pelajaran->lihatdatasatu($id_pelajaran)->row_array();
           $array["mata_pelajaran"]=$data['nama_mata_pelajaran'];
           $array["nip"]=$data['nip_guru'];
           $array["guru"]=$data['nama_lengkap'];
       }
       $exec = $this->m_presensi->tambahdatajadwal($array);

   }

   function editjadwalafilasi()
   {
       $idkelaspondokan = $this->input->post("id_kelas_belajar");
       $id_jadwal = $this->input->post("id");

        $variabel['pelajaran'] = $this->m_pelajaran->lihatdata();
       $variabel['jam'] = $this->m_pak_afilasi->lihatdata();

       $variabel['data'] = $this->m_presensi->lihatdatasatujadwal($id_jadwal)->row_array();
       $this->load->view("back-end/akademik/presensi_kelas/v_jadwal_edit",$variabel);

   }

   function editjadwalafilasiproses()
   {
       $id_jadwal = $this->input->post("idjadwal");

       $idkelasbelajar = $this->input->post("idkelasbelajar");
       $id_pelajaran = $this->input->post("mata_pelajaran");
       $hari = $this->input->post("hari");
       $jam = $this->input->post("jam");

       $array = array (
           "id_mata_pelajaran"=>$id_pelajaran,
           "jam"=>$jam
       );
       if ($id_pelajaran=="Istirahat"){
           $array["mata_pelajaran"]="Istirahat";
           $array["nip"]="Istirahat";
           $array["guru"]="Istirahat";
       } else {
           $data = $this->m_pelajaran->lihatdatasatu($id_pelajaran)->row_array();
           $array["mata_pelajaran"]=$data['nama_mata_pelajaran'];
           $array["nip"]=$data['nip_guru'];
           $array["guru"]=$data['nama_lengkap'];
       }
       $exec = $this->m_presensi->editdatajadwal($id_jadwal,$array);
   }

   function hapusjadwalafilasi()
   {
      $id = $this->input->get("id");
      $idkelas = $this->input->get("idkelas");
      $exec = $this->m_presensi->hapusjadwal($id);
      redirect(base_url()."admin/santriwatiakd/jadwalafilasi?id=".$idkelas."&h=1");
   }

   function printkelasafilasi(){
       $id = $this->input->get("id");
       $exec = $this->m_presensi->lihatdatasatulengkap($id);
       if ($exec->num_rows()>0) {
           $variabel['jadwal'] = $exec->row_array();
           $variabel['listjadwal'] = $this->m_presensi->lihatjadwal($id);
           $this->layout->renderakdp('back-end/akademik/presensi_kelas/v_presensi_print',$variabel,'back-end/akademik/presensi_kelas/v_presensi_printjs');
       } else {
           redirect(base_url("admin/santriwatiakd/datakelasbelajar"));
       }
   }

   function printjadwalafilasi(){
       $id = $this->input->get("id");
       $data = $this->m_presensi->lihatdatasatujadwal($id)->row_array();
       $variabel['data'] = $data;
       $variabel['data2'] =  $this->m_presensi->lihatdatasatulengkap($data['id_kelas_belajar'])->row_array();
       $variabel['santri'] = $this->m_presensi->lihatdatasantri($data['id_kelas_belajar']);
       $this->layout->renderlaporan('back-end/akademik/presensi_kelas/v_presensi_printjadwal',$variabel,'back-end/akademik/presensi_kelas/v_presensi_printjadwal_js');
     }
  //akhir afiliasi//

  //mulai rekap afiliasi//
  function pelajaranrekap(){
    $tgl = date('Y-m-d');
    $variabel['tanggal'] = $tgl;
    $variabel['data'] = $this->m_rekap_santri->datapelajaran();
    $this->layout->renderakdp('back-end/akademik/rekap_presensi/v_data_pelajaran',$variabel,'back-end/akademik/rekap_presensi/v_rekap_js');
  }

  function datarekapsantri(){
    if ($this->input->post()){
      $today = date('Y-m-d');
      $tgl = $this->input->post('tanggal_rekap');
      $kel = $this->input->post('kelas');
      $pel = $this->input->post('pelajaran');
      $variabel['data'] = $this->m_rekap_santri->datakelas($kel,$pel,$tgl);
      $variabel['tanggal'] = $tgl;
      $variabel['kelas'] = $kel;
      $variabel['pelajaran'] = $pel;
      $variabel['santri'] = $this->m_rekap_santri->datasantri($kel,$tgl,$pel);
      $variabel['matpel'] = $this->m_rekap_santri->pelajaran($pel);
      $variabel['namakelas'] = $this->m_rekap_santri->kelas($kel);
      if ($tgl > $today){
        redirect(base_url("admin/santriwatiakd/datarekapsantri?kelas=$kel&pelajaran=$pel&tanggal=$today&psn=0"));
      } else{
      $this->layout->renderakdp('back-end/akademik/rekap_presensi/v_data_rekap',$variabel,'back-end/akademik/rekap_presensi/v_rekap_js');}
    } else {
    $tgl = $this->input->get('tanggal');
    $kel = $this->input->get('kelas');
    $pel = $this->input->get('pelajaran');
    $variabel['data'] = $this->m_rekap_santri->datakelas($kel,$pel,$tgl);
    $variabel['tanggal'] = $tgl;
    $variabel['kelas'] = $kel;
    $variabel['pelajaran'] = $pel;
    $variabel['santri'] = $this->m_rekap_santri->datasantri($kel,$tgl,$pel);
    $variabel['matpel'] = $this->m_rekap_santri->pelajaran($pel);
    $variabel['namakelas'] = $this->m_rekap_santri->kelas($kel);
    $this->layout->renderakdp('back-end/akademik/rekap_presensi/v_data_rekap',$variabel,'back-end/akademik/rekap_presensi/v_rekap_js');}
  }

  function tambahrekap(){
    if ($this->input->post()){
      $array = array(
        'id_santri' => $this->input->post('nis'),
        'id_pelajaran' => $this->input->post('pel'),
        'id_kelas' => $this->input->post('kel'),
        'status_presensi' => $this->input->post('status'),
        'tanggal_rekap' => $this->input->post('tgl')
      );
    $tgl = $this->input->post('tgl');
    $kel = $this->input->post('kel');
    $pel = $this->input->post('pel');
    $nis = $this->input->post('nis');
    $exec = $this->m_rekap_santri->tambahdata($array);
    if ($exec){
      redirect(base_url("admin/santriwatiakd/datarekapsantri?kelas=$kel&pelajaran=$pel&tanggal=$tgl&msg=1"));
    } else{
      redirect(base_url("admin/santriwatiakd/datarekapsantri?kelas=$kel&pelajaran=$pel&tanggal=$tgl&msg=2"));
    }
    }
  }

  function hapusrekap(){
    $id_rekap = $this->input->get('id');
    $tgl = $this->input->get('tanggal');
    $kel = $this->input->get('kelas');
    $pel = $this->input->get('pelajaran');
    $exec = $this->m_rekap_santri->hapus($id_rekap);
    redirect(base_url("admin/santriwatiakd/datarekapsantri?kelas=$kel&pelajaran=$pel&tanggal=$tgl&psn=1"));
  }

  function laporanrekapharian(){
    $tgl = $this->input->get('tanggal');
    $kel = $this->input->get('kelas');
    $pel = $this->input->get('pelajaran');
    $variabel['data'] = $this->m_rekap_santri->datakelas($kel,$pel,$tgl);
    $variabel['tanggal'] = $tgl;
    $variabel['kelas'] = $kel;
    $variabel['pelajaran'] = $pel;
    $variabel['namakelas'] = $this->m_rekap_santri->kelas($kel);
    $variabel['matpel'] = $this->m_rekap_santri->pelajaran($pel);
    $variabel['santrihadir'] = $this->m_rekap_santri->totalhadir($kel,$pel,$tgl);
    $variabel['santriizin'] = $this->m_rekap_santri->totalizin($kel,$pel,$tgl);
    $variabel['santrisakit'] = $this->m_rekap_santri->totalsakit($kel,$pel,$tgl);
    $variabel['santrialfa'] = $this->m_rekap_santri->totalalfa($kel,$pel,$tgl);
      $this->layout->renderlaporan('back-end/akademik/rekap_presensi/v_lap_rekap_harian',$variabel,'back-end/akademik/rekap_presensi/v_rekap_js');
  }

  function datarekapguru(){
    $pel = $this->input->get('pelajaran');
    $kel = $this->input->get('kelas');
    $tgl = $this->input->get('tanggal');
    $nip = $this->input->get('guru');
     $variabel['data'] = $this->m_rekap_guru->rekapguru($pel,$kel);
     $variabel['tanggal'] = $tgl;
     $variabel['kelas'] = $kel;
     $variabel['pelajaran'] = $pel;
     $variabel['nip_guru'] =$nip;
     $variabel['namakelas'] = $this->m_rekap_guru->kelas($kel);
     $variabel['matpel'] = $this->m_rekap_guru->pelajaran($pel);
     $variabel['guru'] = $this->m_rekap_guru->dataguru($nip);
     $this->layout->renderakdp('back-end/akademik/rekap_presensi/v_data_rekap_guru',$variabel,'back-end/akademik/rekap_presensi/v_rekap_js');
  }

  function tambahrekapguru(){
    if ($this->input->post()){
      $array = array(
        'id_pelajaran' => $this->input->post('pel'),
        'id_kelas' => $this->input->post('kel'),
        'status_presensi' => $this->input->post('status'),
        'nip_guru' => $this->input->post('nip'),
        'tanggal_rekap' => $this->input->post('tanggal_rekap')
      );
     $today = date('Y-m-d');
     $tglr = $this->input->post('tanggal_rekap');
    $tgl = $this->input->post('tgl');
    $kel = $this->input->post('kel');
    $pel = $this->input->post('pel');
    $jdw = $this->input->post('jdw');
    $nip = $this->input->post('nip');
    if ($tglr > $today) {
      redirect(base_url("admin/santriwatiakd/datarekapguru?kelas=$kel&pelajaran=$pel&tanggal=$tgl&guru=$nip&psn=0"));
    } else{
      $exec = $this->m_rekap_guru->tambahdata($array);
      if ($exec){
        redirect(base_url("admin/santriwatiakd/datarekapguru?kelas=$kel&pelajaran=$pel&tanggal=$tgl&guru=$nip&msg=1"));
      } else{
        redirect(base_url("admin/santriwatiakd/datarekapguru?kelas=$kel&pelajaran=$pel&tanggal=$tgl&guru=$nip&msg=0"));
      }
     }
    }
  }

  function hapusrekapguru(){
    $id_rekap = $this->input->get('id');
    $jdw = $this->input->get('jadwal');
    $tgl = $this->input->get('tanggal');
    $kel = $this->input->get('kelas');
    $pel = $this->input->get('pelajaran');
    $nip = $this->input->get('guru');
    $exec = $this->m_rekap_guru->hapus($id_rekap);
    redirect(base_url("admin/santriwatiakd/datarekapguru?kelas=$kel&pelajaran=$pel&tanggal=$tgl&jadwal=$jdw&guru=$nip&psn=1"));
  }

  function laporanrekapguru(){
    $jdw = $this->input->get('jadwal');
    $tgl = $this->input->get('tanggal');
    $kel = $this->input->get('kelas');
    $pel = $this->input->get('pelajaran');
    $nip = $this->input->get('guru');
     $variabel['data'] = $this->m_rekap_guru->rekapguru($pel,$kel);
     $variabel['tanggal'] = $tgl;
     $variabel['kelas'] = $kel;
     $variabel['pelajaran'] = $pel;
     $variabel['jadwal'] = $jdw;
     $variabel['nip_guru'] =$nip;
     $variabel['namakelas'] = $this->m_rekap_guru->kelas($kel);
     $variabel['matpel'] = $this->m_rekap_guru->pelajaran($pel);
     $variabel['guru'] = $this->m_rekap_guru->dataguru($nip);
     $variabel['guruhadir'] = $this->m_rekap_guru->totalhadir($pel,$kel);
     $variabel['guruizin'] = $this->m_rekap_guru->totalizin($pel,$kel);
     $variabel['gurusakit'] = $this->m_rekap_guru->totalsakit($pel,$kel);
     $variabel['gurualfa'] = $this->m_rekap_guru->totalalfa($pel,$kel);
     $this->layout->renderlaporan('back-end/akademik/rekap_presensi/v_lap_rekap_guru',$variabel,'back-end/akademik/rekap_presensi/v_rekap_js');
  }
  //akhir rekap afiliasi//
  //pondokan//
  function datatingkatpondokan()
  {
    $pondokan=$this->input->post('pondokan');
    $data=$this->m_pondokan->datatingkatajax($pondokan);
    echo json_encode($data);
  }

  function datakelaspondokan()
 {
    $variabel['data']=$this->m_presensipondokan->lihatdata();
    $this->layout->renderakdp('back-end/akademik/presensi_pondokan/v_presensi_pondokan',$variabel,'back-end/akademik/presensi_pondokan/v_preskelas_js');
 }

 function aturkelaspondokan(){
  if ($this->input->post()){
      $array=array(
          'nip_guru'=> $this->input->post('nip_guru'),
          'nama_kelas_belajar'=> $this->input->post('nama_kelas_belajar'),
          'kd_kelas'=> $this->input->post('kd_kelas'),
          'status_kelas'=>$this->input->post('status_kelas'),
          'id_tahun'=>$this->input->post('id_tahun'),
          'pondokan'=>$this->input->post('pondokan'),
          'tingkat'=>$this->input->post('tingkatan')
          );
      $exec = $this->m_presensipondokan->tambahdata($array);
      if ($exec) redirect(base_url("admin/santriwatiakd/aturkelaspondokan?msg=1"));
      else redirect(base_url("admin/santriwatiakd/aturkelaspondokan?msg=0"));
  } else {
      $variabel['ruangkelas']=$this->m_kelas->lihatdata();
      $variabel['tahunajaran']=$this->m_tahun_ajaran->lihatdata();
      $variabel['guru']=$this->m_guru->lihatdata();
      $variabel['pondokan']=$this->m_pondokan->lihatdata();
      $this->layout->renderakdp('back-end/akademik/presensi_pondokan/v_presensi_atur',$variabel,'back-end/akademik/presensi_pondokan/v_preskelas_js');
  }
}

function editkelaspondokan()
    {
        if ($this->input->post()) {
            $array=array(
                'nip_guru'=> $this->input->post('nip_guru'),
                'nama_kelas_belajar'=> $this->input->post('nama_kelas_belajar'),
                'kd_kelas'=> $this->input->post('kd_kelas'),
                'status_kelas'=>$this->input->post('status_kelas'),
                'id_tahun'=>$this->input->post('id_tahun'),
                'pondokan'=>$this->input->post('pondokan'),
                'tingkat'=>$this->input->post('tingkatan')
                );
            $id_kelas_belajar = $this->input->post("id_kelas_belajar");
            $exec = $this->m_presensipondokan->editdata($id_kelas_belajar,$array);
            if ($exec){
                redirect(base_url("admin/santriwatiakd/editkelaspondokan?id=".$id_kelas_belajar."&msg=1"));
            }
      } else {
            $id_kelas_belajar = $this->input->get("id");
            $exec = $this->m_presensipondokan->lihatdatasatu($id_kelas_belajar);
            if ($exec->num_rows()>0){
                $variabel['ruangkelas']=$this->m_kelas->lihatdata();
                $variabel['tahunajaran']=$this->m_tahun_ajaran->lihatdata();
                $variabel['guru']=$this->m_guru->lihatdata();
                $variabel['data'] = $exec->row_array();
                $variabel['pondokan']=$this->m_pondokan->lihatdata();
                $variabel['tingkatan']=$this->m_pondokan->lihatdatatingkatan($variabel['data']['pondokan']);
                $this->layout->renderakdp('back-end/akademik/presensi_pondokan/v_presensi_edit',$variabel,'back-end/akademik/presensi_pondokan/v_preskelas_js');
            } else {
                redirect(base_url("admin/santriwatiakd/datakelaspondokan"));
            }
      }



    }

    function hapuskelaspondokan()
    {
       $id = $this->input->get("id");
       $exec = $this->m_presensipondokan->hapus($id);
       redirect(base_url()."admin/santriwatiakd/datakelaspondokan?msg=1");
    }

    function lihatkelaspondokan()
    {
        $id_kelas_belajar = $this->input->get("id");
        $exec = $this->m_presensipondokan->lihatdatasatulengkap($id_kelas_belajar);
        if ($exec->num_rows()>0){
            $variabel['data'] = $exec->row_array();
            $variabel['santri'] = $this->m_presensipondokan->lihatdatasantri($id_kelas_belajar);
            $this->layout->renderakdp('back-end/akademik/presensi_pondokan/v_presensi_lihat',$variabel,'back-end/akademik/presensi_pondokan/v_preskelas_js');
        } else {
            redirect(base_url("admin/santriwatiakd/datakelaspondokan"));
        }
    }

    function kelaseditpondokan()
    {
        $idkelaspondokan = $this->input->post("id");
        $variabel['data'] = $this->m_presensipondokan->lihatdatasatu($idkelaspondokan)->row_array();
        $this->load->view("back-end/akademik/presensi_pondokan/v_presensi_editstatus",$variabel);

    }

    function editpondokanproses()
    {
        $id_kelas_belajar = $this->input->post("id_kelas_belajar");
        $status_kelas = $this->input->post("status_kelas");
        $array = array (
            "status_kelas"=>$status_kelas
        );
        $exec = $this->m_presensipondokan->editdata($id_kelas_belajar,$array);
    }

    function lihatkelaspondokansantri()
    {
        $id = $this->input->get("id");
        $exec = $this->m_presensipondokan->lihatdatasatulengkap($id);
        if ($exec->num_rows()>0){
            $variabel['santri'] = $exec->row_array();
            $variabel['data'] = $this->m_presensipondokan->lihatdatasantri($id);
            $this->layout->renderakdp('back-end/akademik/presensi_pondokan/v_santri',$variabel,'back-end/akademik/presensi_pondokan/v_santri_js');
        } else {
            redirect(base_url("admin/santriwatiakd/datakelaspondokan"));
        }
    }

    function kelastambahsantripondokan()
    {
        $idkelaspondokan = $this->input->post("id_kelas_belajar");
        $variabel['lissantri'] = $this->m_presensipondokan->lissantri($idkelaspondokan);
        $this->load->view("back-end/akademik/presensi_pondokan/v_santri_tambah",$variabel);
    }

    function tambahsantripondokproses()
    {
        $idkelasbelajar = $this->input->post("idkelasbelajar");
        $nis = $this->input->post("nis");
        $array = array (
            "id_kelas_belajar"=>$idkelasbelajar,
            "nis_lokal"=>$nis
        );
        $exec = $this->m_presensipondokan->tambahdatasantri($array);

    }

    function hapuskelassantripondokan()
    {
       $id = $this->input->get("id");
       $idkelas = $this->input->get("idkelas");
       $exec = $this->m_presensipondokan->hapussantri($id);
       redirect(base_url()."admin/santriwatiakd/lihatkelaspondokansantri?id=".$idkelas."&h=1");
    }

    function kelaseditsantripondokan()
    {
        $idkelaspondokan = $this->input->post("id_kelas_belajar");
        $variabel['lissantri'] = $this->m_presensipondokan->lissantri($idkelaspondokan);
        $id_kelas_santri = $this->input->post("id");
        $variabel['data'] = $this->m_presensipondokan->lihatdatasatusantri($id_kelas_santri)->row_array();
        $this->load->view("back-end/akademik/presensi_pondokan/v_santri_edit",$variabel);

    }

    function editsantripondokanproses()
    {
        $idkelaspondokan = $this->input->post("idkelaspondokan");
        $nis = $this->input->post("nis");
        $id_kelas_santri = $this->input->post("id_kelas_santri");
        $array = array (
            "nis_lokal"=>$nis
        );
        $exec = $this->m_presensipondokan->editdatasantri($id_kelas_santri,$array);
    }

    function jadwalpondokan()
    {
        $id = $this->input->get("id");
        $exec = $this->m_presensipondokan->lihatdatasatulengkap($id);
        if ($exec->num_rows()>0) {
            $variabel['jadwal'] = $exec->row_array();
            $variabel['datasenin'] = $this->m_presensipondokan->lihatdatajadwal($id,'Senin');
            $variabel['dataselasa'] = $this->m_presensipondokan->lihatdatajadwal($id,'Selasa');
            $variabel['datarabu'] = $this->m_presensipondokan->lihatdatajadwal($id,'Rabu');
            $variabel['datakamis'] = $this->m_presensipondokan->lihatdatajadwal($id,'Kamis');
            $variabel['datajumat'] = $this->m_presensipondokan->lihatdatajadwal($id,"Jum'at");
            $variabel['datasabtu'] = $this->m_presensipondokan->lihatdatajadwal($id,'Sabtu');
            $variabel['dataahad'] = $this->m_presensipondokan->lihatdatajadwal($id,'Ahad');

            $this->layout->renderakdp('back-end/akademik/presensi_pondokan/v_jadwal',$variabel,'back-end/akademik/presensi_pondokan/v_jadwal_js');
        } else {
            redirect(base_url("admin/santriwatiakd/datakelaspondokan"));
        }
    }

    function tambahjadwalpondokan()
    {
        $idkelaspondokan = $this->input->post("id_kelas_belajar");
        $variabel['pelajaran'] = $this->m_pelajaran->lihatdata();
        $variabel['jam'] = $this->m_pak_pondokan->lihatdata();
        $this->load->view("back-end/akademik/presensi_pondokan/v_jadwal_tambah",$variabel);
    }

    function tambahjadwalpondokanproses()
    {
        $idkelasbelajar = $this->input->post("idkelasbelajar");
        $id_pelajaran = $this->input->post("mata_pelajaran");
        $hari = $this->input->post("hari");
        $jam = $this->input->post("jam");


        $array = array (
            "id_kelas_belajar"=>$idkelasbelajar,
            "id_mata_pelajaran"=>$id_pelajaran,
            "hari"=>$hari,
            "jam"=>$jam
        );
        if ($id_pelajaran=="Istirahat"){
            $array["mata_pelajaran"]="Istirahat";
            $array["nip"]="Istirahat";
            $array["guru"]="Istirahat";
        } else {
            $data = $this->m_pelajaran->lihatdatasatu($id_pelajaran)->row_array();
            $array["mata_pelajaran"]=$data['nama_mata_pelajaran'];
            $array["nip"]=$data['nip_guru'];
            $array["guru"]=$data['nama_lengkap'];
        }
        $exec = $this->m_presensipondokan->tambahdatajadwal($array);
    }

    function editjadwalpondokan()
    {
        $idkelaspondokan = $this->input->post("id_kelas_belajar");
        $id_jadwal = $this->input->post("id");

        $variabel['pelajaran'] = $this->m_pelajaran->lihatdata();
        $variabel['jam'] = $this->m_pak_pondokan->lihatdata();

        $variabel['data'] = $this->m_presensipondokan->lihatdatasatujadwal($id_jadwal)->row_array();
        $this->load->view("back-end/akademik/presensi_pondokan/v_jadwal_edit",$variabel);

    }

    function editjadwalpondokanproses()
    {
        $id_jadwal = $this->input->post("idjadwal");

        $idkelasbelajar = $this->input->post("idkelasbelajar");
        $id_pelajaran = $this->input->post("mata_pelajaran");
        $hari = $this->input->post("hari");
        $jam = $this->input->post("jam");

        $array = array (
            "id_mata_pelajaran"=>$id_pelajaran,
            "jam"=>$jam
        );
        if ($id_pelajaran=="Istirahat"){
            $array["mata_pelajaran"]="Istirahat";
            $array["nip"]="Istirahat";
            $array["guru"]="Istirahat";
        } else {
            $data = $this->m_pelajaran->lihatdatasatu($id_pelajaran)->row_array();
            $array["mata_pelajaran"]=$data['nama_mata_pelajaran'];
            $array["nip"]=$data['nip_guru'];
            $array["guru"]=$data['nama_lengkap'];
        }
        $exec = $this->m_presensipondokan->editdatajadwal($id_jadwal,$array);
    }

    function hapusjadwalpondokan()
    {
       $id = $this->input->get("id");
       $idkelas = $this->input->get("idkelas");
       $exec = $this->m_presensipondokan->hapusjadwal($id);
       redirect(base_url()."admin/santriwatiakd/jadwalpondokan?id=".$idkelas."&h=1");
    }

    function printkelaspondokan(){
        $id = $this->input->get("id");
        $exec = $this->m_presensipondokan->lihatdatasatulengkap($id);
        if ($exec->num_rows()>0) {
            $variabel['jadwal'] = $exec->row_array();
            $variabel['listjadwal'] = $this->m_presensipondokan->lihatjadwal($id);
            $this->layout->renderakdp('back-end/akademik/presensi_pondokan/v_presensi_print',$variabel,'back-end/akademik/presensi_pondokan/v_presensi_printjs');
        } else {
            redirect(base_url("admin/santriwatiakd/datakelaspondokan"));
        }
    }


    function printjadwalpondokan(){
        $id = $this->input->get("id");
        $data = $this->m_presensipondokan->lihatdatasatujadwal($id)->row_array();
        $variabel['data'] = $data;
        $variabel['data2'] =  $this->m_presensipondokan->lihatdatasatulengkap($data['id_kelas_belajar'])->row_array();
        $variabel['santri'] = $this->m_presensipondokan->lihatdatasantri($data['id_kelas_belajar']);
        $this->layout->renderlaporan('back-end/akademik/presensi_pondokan/v_presensi_printjadwal',$variabel,'back-end/akademik/presensi_pondokan/v_presensi_printjadwal_js');
      }
  //akhir pondokan//

  //rekap pondokan//
  function pondokanrekap(){
    $tgl = date('Y-m-d');
    $variabel['tanggal'] = $tgl;
    $variabel['data'] = $this->m_rekap_santri_pondokan->datapelajaran();
    $this->layout->renderakdp('back-end/akademik/rekap_presensi_pondokan/v_data_pondokan',$variabel,'back-end/akademik/rekap_presensi_pondokan/v_rekap_js');
  }

  function datarekapsantripondokan(){
    if ($this->input->post()){
      $today = date('Y-m-d');
      $tgl = $this->input->post('tanggal_rekap');
      $kel = $this->input->post('kelas');
      $pel = $this->input->post('pelajaran');
      $variabel['data'] = $this->m_rekap_santri_pondokan->datakelas($kel,$pel,$tgl);
      $variabel['tanggal'] = $tgl;
      $variabel['kelas'] = $kel;
      $variabel['pelajaran'] = $pel;
      $variabel['santri'] = $this->m_rekap_santri_pondokan->datasantri($kel,$tgl,$pel);
      $variabel['matpel'] = $this->m_rekap_santri_pondokan->pelajaran($pel);
      $variabel['namakelas'] = $this->m_rekap_santri_pondokan->kelas($kel);
      if ($tgl > $today){
        redirect(base_url("admin/santriwatiakd/datarekapsantripondokan?kelas=$kel&pelajaran=$pel&tanggal=$today&psn=0"));
      } else{
      $this->layout->renderakdp('back-end/akademik/rekap_presensi_pondokan/v_data_rekap_pondokan',$variabel,'back-end/akademik/rekap_presensi_pondokan/v_rekap_js');}
    } else {
    $tgl = $this->input->get('tanggal');
    $kel = $this->input->get('kelas');
    $pel = $this->input->get('pelajaran');
    $variabel['data'] = $this->m_rekap_santri_pondokan->datakelas($kel,$pel,$tgl);
    $variabel['tanggal'] = $tgl;
    $variabel['kelas'] = $kel;
    $variabel['pelajaran'] = $pel;
    $variabel['santri'] = $this->m_rekap_santri_pondokan->datasantri($kel,$tgl,$pel);
    $variabel['matpel'] = $this->m_rekap_santri_pondokan->pelajaran($pel);
    $variabel['namakelas'] = $this->m_rekap_santri_pondokan->kelas($kel);
    $this->layout->renderakdp('back-end/akademik/rekap_presensi_pondokan/v_data_rekap_pondokan',$variabel,'back-end/akademik/rekap_presensi_pondokan/v_rekap_js');}
  }

  function hapusrekappondokan(){
    $id_rekap = $this->input->get('id');
    $tgl = $this->input->get('tanggal');
    $kel = $this->input->get('kelas');
    $pel = $this->input->get('pelajaran');
    $exec = $this->m_rekap_santri_pondokan->hapus($id_rekap);
    redirect(base_url("admin/santriwatiakd/datarekapsantripondokan?kelas=$kel&pelajaran=$pel&tanggal=$tgl&psn=1"));
  }

  function tambahrekappondokan(){
    if ($this->input->post()){
      $array = array(
        'id_santri' => $this->input->post('nis'),
        'id_pelajaran' => $this->input->post('pel'),
        'id_kelas' => $this->input->post('kel'),
        'status_presensi' => $this->input->post('status'),
        'tanggal_rekap' => $this->input->post('tgl')
      );
    $tgl = $this->input->post('tgl');
    $kel = $this->input->post('kel');
    $pel = $this->input->post('pel');
    $nis = $this->input->post('nis');
    $exec = $this->m_rekap_santri_pondokan->tambahdata($array);
    if ($exec){
      redirect(base_url("admin/santriwatiakd/datarekapsantripondokan?kelas=$kel&pelajaran=$pel&tanggal=$tgl&msg=1"));
    } else{
      redirect(base_url("admin/santriwatiakd/datarekapsantripondokan?kelas=$kel&pelajaran=$pel&tanggal=$tgl&msg=2"));
    }
    }
  }

  function laporanrekapharianpondokan(){
    $tgl = $this->input->get('tanggal');
    $kel = $this->input->get('kelas');
    $pel = $this->input->get('pelajaran');
    $variabel['data'] = $this->m_rekap_santri_pondokan->datakelas($kel,$pel,$tgl);
    $variabel['tanggal'] = $tgl;
    $variabel['kelas'] = $kel;
    $variabel['pelajaran'] = $pel;
    $variabel['namakelas'] = $this->m_rekap_santri_pondokan->kelas($kel);
    $variabel['matpel'] = $this->m_rekap_santri_pondokan->pelajaran($pel);
    $variabel['santrihadir'] = $this->m_rekap_santri_pondokan->totalhadir($kel,$pel,$tgl);
    $variabel['santriizin'] = $this->m_rekap_santri_pondokan->totalizin($kel,$pel,$tgl);
    $variabel['santrisakit'] = $this->m_rekap_santri_pondokan->totalsakit($kel,$pel,$tgl);
    $variabel['santrialfa'] = $this->m_rekap_santri_pondokan->totalalfa($kel,$pel,$tgl);
      $this->layout->renderlaporan('back-end/akademik/rekap_presensi_pondokan/v_lap_rekap_harian',$variabel,'back-end/akademik/rekap_presensi_pondokan/v_rekap_js');
  }

  function datarekapgurupondokan(){
    $pel = $this->input->get('pelajaran');
    $kel = $this->input->get('kelas');
    $tgl = $this->input->get('tanggal');
    $nip = $this->input->get('guru');
     $variabel['data'] = $this->m_rekap_guru_pondokan->rekapguru($pel,$kel);
     $variabel['tanggal'] = $tgl;
     $variabel['kelas'] = $kel;
     $variabel['pelajaran'] = $pel;
     $variabel['nip_guru'] =$nip;
     $variabel['namakelas'] = $this->m_rekap_guru_pondokan->kelas($kel);
     $variabel['matpel'] = $this->m_rekap_guru_pondokan->pelajaran($pel);
     $variabel['guru'] = $this->m_rekap_guru_pondokan->dataguru($nip);
     $this->layout->renderakdp('back-end/akademik/rekap_presensi_pondokan/v_data_rekap_guru',$variabel,'back-end/akademik/rekap_presensi_pondokan/v_rekap_js');
  }

  function tambahrekapgurupondokan(){
    if ($this->input->post()){
      $array = array(
        'id_pelajaran' => $this->input->post('pel'),
        'id_kelas' => $this->input->post('kel'),
        'status_presensi' => $this->input->post('status'),
        'nip_guru' => $this->input->post('nip'),
        'tanggal_rekap' => $this->input->post('tanggal_rekap')
      );
     $today = date('Y-m-d');
     $tglr = $this->input->post('tanggal_rekap');
    $tgl = $this->input->post('tgl');
    $kel = $this->input->post('kel');
    $pel = $this->input->post('pel');
    $jdw = $this->input->post('jdw');
    $nip = $this->input->post('nip');
    if ($tglr > $today) {
      redirect(base_url("admin/santriwatiakd/datarekapgurupondokan?kelas=$kel&pelajaran=$pel&tanggal=$tgl&guru=$nip&psn=0"));
    } else{
      $exec = $this->m_rekap_guru_pondokan->tambahdata($array);
      if ($exec){
        redirect(base_url("admin/santriwatiakd/datarekapgurupondokan?kelas=$kel&pelajaran=$pel&tanggal=$tgl&guru=$nip&msg=1"));
      } else{
        redirect(base_url("admin/santriwatiakd/datarekapgurupondokan?kelas=$kel&pelajaran=$pel&tanggal=$tgl&guru=$nip&msg=0"));
      }
     }
    }
  }

  function hapusrekapgurupondokan(){
    $id_rekap = $this->input->get('id');
    $jdw = $this->input->get('jadwal');
    $tgl = $this->input->get('tanggal');
    $kel = $this->input->get('kelas');
    $pel = $this->input->get('pelajaran');
    $nip = $this->input->get('guru');
    $exec = $this->m_rekap_guru_pondokan->hapus($id_rekap);
    redirect(base_url("admin/santriwatiakd/datarekapgurupondokan?kelas=$kel&pelajaran=$pel&tanggal=$tgl&jadwal=$jdw&guru=$nip&psn=1"));
  }

  function laporanrekapgurupondokan(){
    $jdw = $this->input->get('jadwal');
    $tgl = $this->input->get('tanggal');
    $kel = $this->input->get('kelas');
    $pel = $this->input->get('pelajaran');
    $nip = $this->input->get('guru');
     $variabel['data'] = $this->m_rekap_guru_pondokan->rekapguru($pel,$kel);
     $variabel['tanggal'] = $tgl;
     $variabel['kelas'] = $kel;
     $variabel['pelajaran'] = $pel;
     $variabel['jadwal'] = $jdw;
     $variabel['nip_guru'] =$nip;
     $variabel['namakelas'] = $this->m_rekap_guru_pondokan->kelas($kel);
     $variabel['matpel'] = $this->m_rekap_guru_pondokan->pelajaran($pel);
     $variabel['guru'] = $this->m_rekap_guru_pondokan->dataguru($nip);
     $variabel['guruhadir'] = $this->m_rekap_guru_pondokan->totalhadir($pel,$kel);
     $variabel['guruizin'] = $this->m_rekap_guru_pondokan->totalizin($pel,$kel);
     $variabel['gurusakit'] = $this->m_rekap_guru_pondokan->totalsakit($pel,$kel);
     $variabel['gurualfa'] = $this->m_rekap_guru_pondokan->totalalfa($pel,$kel);
     $this->layout->renderlaporan('back-end/akademik/rekap_presensi_pondokan/v_lap_rekap_guru',$variabel,'back-end/akademik/rekap_presensi_pondokan/v_rekap_js');
  }
  //akhir rekap pondokan//
}
?>
