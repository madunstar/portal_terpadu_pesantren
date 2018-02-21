<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

  function __construct()
  {
      parent::__construct();
  }

  function get_count_status_diverifikasi() {
    return $this->db->select('(select count(*) from tb_akun_pendaftar where status_biodata = "diverifikasi" and status_akun = "aktif") as total',FALSE)
             ->get()
             ->row_array();

  }

  function get_count_status_tidak_lengkap() {
    return $this->db->select('(select count(*) from tb_akun_pendaftar where status_biodata = "tidak lengkap" and status_akun = "aktif") as total',FALSE)
             ->get()
             ->row_array();

  }

  function get_count_status_menunggu() {
    return $this->db->select('(select count(*) from tb_akun_pendaftar where status_biodata = "menunggu verifikasi" and status_akun = "aktif" ) as total',FALSE)
             ->get()
             ->row_array();

  }

  function get_count_pendaftaran() {
    return $this->db->select('(select count(*) from tb_akun_pendaftar where status_akun = "aktif")  as total',FALSE)
             ->get()
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

  function get_count_pembayaran_menunggu() {
    return $this->db->select('(select count(*) from tb_akun_pendaftar where status_pembayaran = "menunggu verifikasi" and status_akun = "aktif" ) as total',FALSE)
             ->get()
             ->row_array();

  }

  function get_count_pembayaran_diverifikasi() {
    return $this->db->select('(select count(*) from tb_akun_pendaftar where status_pembayaran = "diverifikasi" and status_akun = "aktif" ) as total',FALSE)
             ->get()
             ->row_array();

  }

  function hitungpembayaran($tahunajaran){
      $this->db->select_sum('besar_pembayaran','total')
      ->from('tb_bayar_pendaftar')
      ->join('tb_akun_pendaftar','tb_akun_pendaftar.email_pendaftar = tb_bayar_pendaftar.email_pendaftar');
      $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
      $this->db->where('tb_akun_pendaftar.status_pembayaran','diverifikasi');

   return  $this->db->get()
            ->row_array();
  }

}


?>
