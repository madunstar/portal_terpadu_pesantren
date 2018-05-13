<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_login extends CI_Model{
  function __construct(){
    parent::__construct();
    $this->load->database();
  }

  // function ceklogin($data)
  // {
  //   $query = $this->db->get_where('tb_akun_ortu', $data);
  //   return $query;
  // }

  function ceknis($nis){
    $this->db->select('*');
    $this->db->from('tb_akun_ortu');
    $this->db->where('nis_lokal',$nis);
    return $this->db->get();
  }

  function ceklogin($nis,$kata_sandi){
    $this->db->select('*');
    $this->db->from('tb_akun_ortu');
    $this->db->where('nis_lokal',$nis);
    $this->db->where('kata_sandi',$kata_sandi);
    return $this->db->get();
  }
}
?>
