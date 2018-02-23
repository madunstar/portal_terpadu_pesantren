<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

  function __construct()
  {
      parent::__construct();
  }

  function get_count_status_diverifikasi($tahunajaran) {
    $this->db->select('count(*) as total');
    $this->db->from('tb_akun_pendaftar');
    $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
    $this->db->where('tb_akun_pendaftar.status_akun','aktif');
    $this->db->where('tb_akun_pendaftar.status_biodata','diverifikasi');
    return  $this->db->get()
     ->row_array();

  }

  function get_count_status_tidak_lengkap($tahunajaran) {
    $this->db->select('count(*) as total');
    $this->db->from('tb_akun_pendaftar');
    $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
    $this->db->where('tb_akun_pendaftar.status_akun','aktif');
    $this->db->where('tb_akun_pendaftar.status_biodata','tidak lengkap');
    return $this->db->get()
     ->row_array();

  }

  function get_count_status_menunggu($tahunajaran) {
    $this->db->select('count(*) as total');
    $this->db->from('tb_akun_pendaftar');
    $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
    $this->db->where('tb_akun_pendaftar.status_akun','aktif');
    $this->db->where('tb_akun_pendaftar.status_biodata','menunggu verifikasi');
    return $this->db->get()
     ->row_array();
  }

  function get_count_pendaftaran($tahunajaran) {
    $this->db->select('count(*) as total');
    $this->db->from('tb_akun_pendaftar');
    $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
    $this->db->where('tb_akun_pendaftar.status_akun','aktif');
    return $this->db->get()
     ->row_array();

  }

  function get_pembayaran_terakhir() {
    $this->db->select('*');
    $this->db->from('tb_akun_pendaftar');
    $this->db->join('tb_bayar_pendaftar','tb_akun_pendaftar.email_pendaftar = tb_bayar_pendaftar.email_pendaftar');
    $this->db->join('tb_biodata_pendaftar','tb_akun_pendaftar.email_pendaftar = tb_biodata_pendaftar.email_pendaftar');
    $this->db->where('status_pembayaran','menunggu verifikasi');
    $this->db->or_where('status_pembayaran','diverifikasi');
    $this->db->limit(3);
    $this->db->order_by('tb_bayar_pendaftar.tanggal_pembayaran','desc');
    return $this->db->get();
  }

//hitung pembayaran orang//
  function get_count_pembayaran_menunggu($tahunajaran) {
    $this->db->select('count(*) as total');
    $this->db->from('tb_akun_pendaftar');
    $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
    $this->db->where('tb_akun_pendaftar.status_akun','aktif');
    $this->db->where('tb_akun_pendaftar.status_pembayaran','menunggu verifikasi');
    return $this->db->get()
     ->row_array();
  }

  function get_count_pembayaran_diverifikasi($tahunajaran) {
    $this->db->select('count(*) as total');
    $this->db->from('tb_akun_pendaftar');
    $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
    $this->db->where('tb_akun_pendaftar.status_akun','aktif');
    $this->db->where('tb_akun_pendaftar.status_pembayaran','diverifikasi');
    return  $this->db->get()
     ->row_array();
  }

//////akhir hitung pembayaran orang///////

/////////////hitunf duit pendaftaran///////////////////
  function hitungpembayaran($tahunajaran){
      $this->db->select_sum('besar_pembayaran','total')
      ->from('tb_bayar_pendaftar')
      ->join('tb_akun_pendaftar','tb_akun_pendaftar.email_pendaftar = tb_bayar_pendaftar.email_pendaftar');
      $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
      $this->db->where('tb_akun_pendaftar.status_akun','aktif');
      $this->db->where('tb_akun_pendaftar.status_pembayaran','diverifikasi');
   return  $this->db->get()
            ->row_array();
  }
  function hitungpembayaranmenunggu($tahunajaran){
      $this->db->select_sum('besar_pembayaran','total')
      ->from('tb_bayar_pendaftar')
      ->join('tb_akun_pendaftar','tb_akun_pendaftar.email_pendaftar = tb_bayar_pendaftar.email_pendaftar');
      $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
      $this->db->where('tb_akun_pendaftar.status_akun','aktif');
      $this->db->where('tb_akun_pendaftar.status_pembayaran','menunggu verifikasi');
   return  $this->db->get()
            ->row_array();
  }

/////akhir///////////
  function status_santri($email){
    $this->db->where('email_pendaftar',$email);
    return $this->db->get('tb_akun_pendaftar');
  }

  function nama_user($email){
    $this->db->where('email_pendaftar',$email);
    return $this->db->get('tb_biodata_pendaftar');
  }

  function datafoto($email){
    $this->db->where('email_pendaftar',$email);
    $this->db->where('nama_berkas','paspoto');
    return $this->db->get('tb_berkas_pendaftar');
  }

  function cekstatus($email){
    $this->db->where('email_pendaftar',$email);
    $this->db->where('status_biodata','diverifikasi');
    $this->db->where('status_berkas','diverifikasi');
    $this->db->where('status_pembayaran','diverifikasi');
    return $this->db->get('tb_akun_pendaftar');
  }

}



?>
