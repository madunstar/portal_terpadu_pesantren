<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_login extends CI_Model{
  function __construct(){
    parent::__construct();
    $this->load->database();
  }

  function cekid($id_ortu){
    $this->db->select('*');
    $this->db->from('tb_akun_ortu');
    $this->db->where('id_ortu',$id_ortu);
    return $this->db->get();
  }

  function ceklogin($id_ortu,$kata_sandi){
    $this->db->select('*');
    $this->db->from('tb_akun_ortu');
    $this->db->where('id_ortu',$id_ortu);
    $this->db->where('kata_sandi',$kata_sandi);
    return $this->db->get();
  }
}
?>
