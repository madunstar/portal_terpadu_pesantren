<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class M_kota_kab extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function lihatdata()
    {
        $this->db->select('tb_kota_kab.id_kota_kab,tb_kota_kab.nama_kota_kab,tb_kota_kab.id_provinsi,tb_provinsi.id_provinsi,tb_provinsi.nama_provinsi');
        $this->db->from('tb_kota_kab');
        $this->db->join('tb_provinsi','tb_provinsi.id_provinsi=tb_kota_kab.id_provinsi');
        return $this->db->get();
    }

    function lihatdatasatu($id_kota_kab)
    {
      $this->db->select('tb_kota_kab.id_kota_kab,tb_kota_kab.nama_kota_kab,tb_kota_kab.id_provinsi,tb_provinsi.id_provinsi,tb_provinsi.nama_provinsi');
      $this->db->from('tb_kota_kab');
      $this->db->join('tb_provinsi','tb_provinsi.id_provinsi=tb_kota_kab.id_provinsi');
      $this->db->where("id_kota_kab",$id_kota_kab);
      return $this->db->get();
    }

    function dataprovinsi()
    {
        return $this->db->get('tb_provinsi');
    }

    function cekdata($id_kota_kab)
    {
        $this->db->where("id_kota_kab",$id_kota_kab);
        return $this->db->get('tb_kota_kab')->num_rows();
    }

    function tambahdata($array)
    {
        return $this->db->insert('tb_kota_kab',$array);
    }

    function editdata($id_kota_kab,$array)
    {
        $this->db->where("id_kota_kab",$id_kota_kab);
        return $this->db->update('tb_kota_kab',$array);
    }


    function hapus($id_kota_kab)
    {
        $this->db->where("id_kota_kab",$id_kota_kab);
        return $this->db->delete('tb_kota_kab');
    }
}
