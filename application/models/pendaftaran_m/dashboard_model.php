<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

  function __construct()
  {
      parent::__construct();
  }

  function get_count_status_pendaftar() {
    $this->db->select('status_biodata','count(email_pendaftar) as total')
             ->from('tb_akun_pendaftar')
             ->group_by('status_biodata')
             ->get()
             ->result_array();
  }
}


?>
