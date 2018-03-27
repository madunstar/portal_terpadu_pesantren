<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class M_prestasi extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function lihatdata($nis)
    {
      $this->db->select('*');
      $this->db->from('tb_prestasi');
      $this->db->join('tb_santri', 'tb_prestasi.nis_santri = tb_santri.nis_lokal');
      $this->db->where('tb_prestasi.nis_santri', $nis);

      return $this->db->get();
    }

    function tambahdata($array)
    {
        return $this->db->insert('tb_prestasi',$array);
    }

    function ambildata($id)
    {
        $this->db->select('*');
        $this->db->from('tb_prestasi');
        $this->db->where('id_prestasi', $id);
          return $this->db->get();
    }

    function editdata($id,$array)
    {
        $this->db->where("id_prestasi",$id);
        return $this->db->update('tb_prestasi',$array);
    }

    function hapus($id)
    {
        $this->db->where("id_prestasi",$id);
        return $this->db->delete('tb_prestasi');
    }
}
