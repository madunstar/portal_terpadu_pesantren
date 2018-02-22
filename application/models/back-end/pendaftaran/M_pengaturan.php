<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class M_pengaturan extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_tb_pengaturan()
    {

        return $this->db->get_where('tb_pengaturan_pendaftaran',array('id_pengaturan'=>1))->row_array();
    }

    function update_tb_pengaturan_pendaftran($params)
    {
        $this->db->where('id_pengaturan',1);
        return $this->db->update('tb_pengaturan_pendaftaran',$params);
    }

    function datatahun()
    {
      return $this->db->get('tb_tahun_ajaran');
    }

//reset akun pendaftar
    function get_akun_pendaftar()
    {
      $this->db->select('*');
      $this->db->from('tb_akun_pendaftar');
      $this->db->join('tb_biodata_pendaftar', 'tb_akun_pendaftar.email_pendaftar = tb_biodata_pendaftar.email_pendaftar');
      $this->db->join('tb_tahun_ajaran','tb_akun_pendaftar.tahun_ajaran = tb_tahun_ajaran.id_tahun');
      return $this->db->get();
    }

    function editsandi($email_akun,$array)
    {
        $this->db->where("email_pendaftar",$email_akun);
        return $this->db->update('tb_akun_pendaftar',$array);
    }

    function editstatus($email_akun,$array)
    {
        $this->db->where("email_pendaftar",$email_akun);
        return $this->db->update('tb_akun_pendaftar',$array);
    }

    function untukmodal($email_pendaftar)
    {

      return $this->db->get('tb_akun_pendaftar');
    }
}
?>
