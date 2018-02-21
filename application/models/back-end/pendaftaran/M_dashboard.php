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
  function status_santri($email){
    $this->db->where('email_pendaftar',$email);
    return $this->db->get('tb_akun_pendaftar');
  }

  function nama_user($email){
    $this->db->where('email_pendaftar',$email);
    return $this->db->get('tb_biodata_pendaftar');
  }
}


?>
