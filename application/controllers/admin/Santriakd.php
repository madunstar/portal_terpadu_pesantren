<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Santriakd extends CI_Controller
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
              $this->layout->renderakd('back-end/akademik/v_ubah_sandi',$variabel);
          } else if ($kata_sandibr!=$rekata_sandibr){
               $variabel['rekata_sandibr'] =$this->input->post('rekata_sandibr');
               $variabel['data'] = $array;
               $this->layout->renderakd('back-end/akademik/v_ubah_sandi',$variabel);
          } else {
              $exec = $this->m_dashboard->ubahsandi($nama_akun,$kata_sandi,$kata_sandibr);
              if ($exec){
                  redirect(base_url("admin/santriakd/ubahsandiadmin?nama_akun=".$nama_akun."&msg=1"));
              }
          }
      } else {
          $nama_akun = $this->input->get("nama_akun");
          $exec = $this->m_dashboard->lihatubahsandi($nama_akun);
          if ($exec->num_rows()>0){
              $variabel['data'] = $exec ->row_array();
              $this->layout->renderakd('back-end/akademik/v_ubah_sandi',$variabel);
          } else {
              redirect(base_url("admin/santriakd"));
          }
      }
  }

  function index(){
    $variabel['nama_akun'] = $this->session->userdata('nama_akun');
    $this->layout->renderakd('back-end/akademik/dashboard',$variabel);
  }

  //CRUD santri
  function santri()
  {
      $variabel['data'] = $this->m_santri->lihatdata();
      $this->layout->renderakd('back-end/akademik/santri/v_santri',$variabel,'back-end/akademik/santri/v_santri_js');
  }

  function santrilihat()
  {
      $nis = $this->input->get("nis");
      $exec = $this->m_santri->lihatdatasatu($nis);
      if ($exec->num_rows()>0){
          $variabel['data'] = $exec ->row_array();
          $variabel['tingkat'] = $this->m_santri->lihattingkatan($nis); ;
          $variabel['tingkatpondokan'] = $this->m_santri->lihattingkatanpondokan($nis); ;
          $this->layout->renderakd('back-end/akademik/santri/v_santri_lihat',$variabel,'back-end/akademik/santri/v_santri_js');
      } else {
          redirect(base_url("admin/santriakd/santri"));
      }

  }

  function santritingkat()
  {
      $nis = $this->input->post("nis");
      $variabel['tingkat'] = $this->m_santri->lihattingkatan($nis);
      $this->load->view('back-end/akademik/santri/v_santri_tingkat',$variabel);
  }

  function santritingkatpondokan()
  {
      $nis = $this->input->post("nis");
      $variabel['tingkat'] = $this->m_santri->lihattingkatanpondokan($nis);
      $this->load->view('back-end/akademik/santri/v_santri_tingkatpondokan',$variabel);
  }

  function datakotakab2()
  {
    $id=$this->input->post('provinsi');
    $data=$this->m_santri->datakotaajax($id);
    echo json_encode($data);
  }

  function datakecamatan2()
  {
    $id=$this->input->post('kecamatan');
    $data=$this->m_santri->datakecamatanajax($id);
    echo json_encode($data);
  }

  function datadesa2()
  {
    $id=$this->input->post('desa');
    $data=$this->m_santri->datadesaajax($id);
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
          if ($this->m_santri->cekdata($this->input->post('nis_lokal'))==0) {
              $config['upload_path'] = './assets/images/foto';
              $config['allowed_types'] = 'jpg|jpeg|JPG|JPEG|PNG|png';
              $this->load->library('upload', $config);
              $this->upload->do_upload("foto");
              $upload = $this->upload->data();
              $foto = $upload["raw_name"].$upload["file_ext"];
              $array['foto']=$foto;
              $exec = $this->m_santri->tambahdata($array);
              if ($exec) redirect(base_url("admin/santriakd/santritambah?msg=1"));
              else redirect(base_url("admin/santriakd/santritambah?msg=0"));
          } else {
              $variabel['provinsi']=$this->m_santri->ambilprovinsi();
              $variabel['kabupaten']=$this->m_santri->ambilkabupaten($this->input->post('provinsi'));
              $variabel['kecamatan']=$this->m_santri->ambilkecamatan($this->input->post('kabupaten_kota'));
              $variabel['desa']=$this->m_santri->ambildesa($this->input->post('kecamatan'));
              $variabel['transportasi']=$this->m_santri->ambiltransportasi();
              $variabel['pekerjaan']=$this->m_santri->ambilpekerjaan();
              $variabel['pendidikan']=$this->m_santri->ambilpendidikan();
              $variabel['nis_lokal'] =$this->input->post('nis_lokal');
              $variabel['jenjang']=$this->m_jenjang->lihatdata();
              $variabel['pondokan']=$this->m_pondokan->lihatdata();
              $this->layout->render('back-end/akademik/santri/v_santri_tambah',$variabel,'back-end/akademik/santri/v_santri_js');
          }

      } else {
           $variabel['provinsi']=$this->m_santri->ambilprovinsi();
           $variabel['transportasi']=$this->m_santri->ambiltransportasi();
           $variabel['pekerjaan']=$this->m_santri->ambilpekerjaan();
           $variabel['pendidikan']
           =$this->m_santri->ambilpendidikan();
           $variabel['kabupaten']=$this->m_santri->ambilkabupaten("");
           $variabel['kecamatan']=$this->m_santri->ambilkecamatan("");
           $variabel['desa']=$this->m_santri->ambildesa("");
           $variabel['jenjang']=$this->m_jenjang->lihatdata();
           $variabel['pondokan']=$this->m_pondokan->lihatdata();

          $this->layout->render('back-end/akademik/santri/v_santri_tambah',$variabel,'back-end/akademik/santri/v_santri_js');
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
          if (($this->m_santri->cekdata($nis)>0) && ($nis2!=$nis)) {
              $variabel['nis_lokal'] =$this->input->post('nis_lokal');
              $variabel['nis_lokal2'] =$this->input->post('nis_lokal2');
              $variabel['data'] = $array;

              $variabel['provinsi']=$this->m_santri->ambilprovinsi();
              $variabel['kabupaten']=$this->m_santri->ambilkabupaten($this->input->post('provinsi'));
              $variabel['kecamatan']=$this->m_santri->ambilkecamatan($this->input->post('kabupaten_kota'));
              $variabel['desa']=$this->m_santri->ambildesa($this->input->post('kecamatan'));

              $variabel['transportasi']=$this->m_santri->ambiltransportasi();
              $variabel['pekerjaan']=$this->m_santri->ambilpekerjaan();
              $variabel['pendidikan']=$this->m_santri->ambilpendidikan();
              $variabel['jenjang']=$this->m_jenjang->lihatdata();
              $variabel['pondokan']=$this->m_pondokan->lihatdata();

              $this->layout->render('back-end/akademik/santri/v_santri_edit',$variabel,'back-end/akademik/santri/v_santri_js');
          } else {
              $config['upload_path'] = './assets/images/foto';
              $config['allowed_types'] = 'jpg|jpeg|JPG|JPEG|pdf|PNG|png';
              $this->load->library('upload', $config);
              if ($this->upload->do_upload("foto"))
              {
                  $upload = $this->upload->data();
                  $foto = $upload["raw_name"].$upload["file_ext"];
                  $array['foto']=$foto;

                  $query2 = $this->m_santri->lihatdatasatu($nis2);
                  $row2 = $query2->row();
                  $berkas1temp = $row2->foto;
                  $path1 ='./assets/images/foto/'.$berkas1temp.'';
                  echo "$path1";
                  if(is_file($path1)) {
                      unlink($path1); //menghapus gambar di folder produk
                  }
              }
              $exec = $this->m_santri->editdata($nis2,$array);
              if ($exec){
                redirect(base_url("admin/santriakd/santriedit?nis=".$nis."&msg=1"));
              }
          }
    } else {
          $nis = $this->input->get("nis");
          $exec = $this->m_santri->lihatdatasatu($nis);
          if ($exec->num_rows()>0){
              $data =  $exec ->row_array();
              $variabel['data'] = $data;

              $variabel['provinsi']=$this->m_santri->ambilprovinsi();
              $variabel['transportasi']=$this->m_santri->ambiltransportasi();
               $variabel['pekerjaan']=$this->m_santri->ambilpekerjaan();
               $variabel['pendidikan']
               =$this->m_santri->ambilpendidikan();

               $variabel['kabupaten']=$this->m_santri->ambilkabupaten($data['provinsi']);
               $variabel['kecamatan']=$this->m_santri->ambilkecamatan($data['kabupaten_kota']);
               $variabel['desa']=$this->m_santri->ambildesa($data['kecamatan']);
               $variabel['jenjang']=$this->m_jenjang->lihatdata();
               $variabel['pondokan']=$this->m_pondokan->lihatdata();
              $this->layout->render('back-end/akademik/santri/v_santri_edit',$variabel,'back-end/akademik/santri/v_santri_js');
          } else {
              redirect(base_url("admin/santriakd/santri"));
          }
    }

  }

  function santrihapus()
  {
     $nis = $this->input->get("nis");
     $exec = $this->m_santri->hapus($nis);
     redirect(base_url()."admin/santriakd/santri?msg=1");
  }


  //akhir//
}
?>
