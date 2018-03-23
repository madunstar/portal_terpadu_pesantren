<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class M_matpel extends CI_Model {
	function lihatdata()
    {
        return $this->db->get('tb_mata_pelajaran');
    }

    function lihatdatasatu($kode)
    {
        $this->db->where("id_mata_pelajaran",$kode);
        return $this->db->get('tb_mata_pelajaran');
    }

    function tambahdata($array)
    {
        return $this->db->insert('tb_mata_pelajaran',$array);
    }

    function editdata($kode,$array)
    {
        $this->db->where("id_mata_pelajaran",$kode);
        return $this->db->update('tb_mata_pelajaran',$array);
    }
    function hapus($kode)
    {
        $this->db->where("id_mata_pelajaran",$kode);
        return $this->db->delete('tb_mata_pelajaran');
    }
}