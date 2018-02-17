<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class M_kelas extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function lihatdata()
    {
        return $this->db->get('tb_kelas');
    }

    function lihatdatasatu($kode)
    {
        $this->db->where("kd_kelas",$kode);
        return $this->db->get('tb_kelas');
    }

    function tambahdata($array)
    {
        return $this->db->insert('tb_kelas',$array);
    }

    function editdata($kode,$array)
    {
        $this->db->where("kd_kelas",$kode);
        return $this->db->update('tb_kelas',$array);
    }
    function hapus($kode)
    {
        $this->db->where("kd_kelas",$kode);
        return $this->db->delete('tb_kelas');
    }
}