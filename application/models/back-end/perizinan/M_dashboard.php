<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

  function __construct()
  {
      parent::__construct();
  }

  function lihatubahsandi($nama_akun)
  {
      $this->db->select('nip_staff_admin, nama_akun, kata_sandi, kode_role_admin, nama_role, nama_lengkap');
      $this->db->from('tb_akun_admin');
      $this->db->join('tb_role_admin', 'kode_role_admin = kode_role');
      $this->db->join('tb_staff', 'nip_staff_admin = nip_staff');
      $this->db->where("nama_akun",$nama_akun);
      return $this->db->get();
  }

  function cekubahsandi($nama_akun)
  {
      $query = $this->db->where(['nama_akun'=>$nama_akun])
                        ->get('tb_akun_admin');
      if($query->num_rows() > 0){
        return $query->row();
      }
  }

  function ubahsandi($nama_akun, $kata_sandi, $kata_sandibr)
  {
      $this->db->set("kata_sandi",$kata_sandibr);
      $this->db->where("nama_akun",$nama_akun);
      $this->db->where("kata_sandi",$kata_sandi);
      return $this->db->update('tb_akun_admin');
  }

}



?>
