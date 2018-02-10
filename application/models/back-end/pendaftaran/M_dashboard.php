<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

  function __construct()
  {
      parent::__construct();
  }

  function get_count_status_diverifikasi() {
    return $this->db->select('(select count(*) from tb_akun_pendaftar where status_biodata = "diverifikasi") as total',FALSE)
             ->get()
             ->row_array();

  }

  function get_count_status_tidak_lengkap() {
    return $this->db->select('(select count(*) from tb_akun_pendaftar where status_biodata = "tidak lengkap") as total',FALSE)
             ->get()
             ->row_array();

  }
  function get_count_status_menunggu() {
    return $this->db->select('(select count(*) from tb_akun_pendaftar where status_biodata = "menunggu verifikasi") as total',FALSE)
             ->get()
             ->row_array();

  }

  function get_count_pendaftaran() {
    return $this->db->select('(select count(*) from tb_akun_pendaftar) as total',FALSE)
             ->get()
             ->row_array();

  }
}


?>
