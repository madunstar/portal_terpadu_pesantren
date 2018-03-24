<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class M_pelajaran extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function lihatdata()
    {
			$this->db->select('tb_pelajaran.id_pelajaran, tb_pelajaran.nip_guru, tb_guru.nama_lengkap, tb_mata_pelajaran.id_mata_pelajaran, tb_mata_pelajaran.nama_mata_pelajaran,
												tb_mata_pelajaran.tingkat_mata_pelajaran, tb_mata_pelajaran.semester_mata_pelajaran, tb_mata_pelajaran.kelas_mata_pelajaran');
			$this->db->from('tb_pelajaran');
			$this->db->join('tb_guru', 'tb_pelajaran.nip_guru = tb_guru.nip_guru');
			$this->db->join('tb_mata_pelajaran', 'tb_pelajaran.id_mata_pelajaran = tb_mata_pelajaran.id_mata_pelajaran');
			return $this->db->get();
    }

    function lihatdatasatu($kode)
    {
				$this->db->select('tb_pelajaran.id_pelajaran, tb_pelajaran.nip_guru, tb_guru.nama_lengkap, tb_mata_pelajaran.id_mata_pelajaran, tb_mata_pelajaran.nama_mata_pelajaran,
												tb_mata_pelajaran.tingkat_mata_pelajaran, tb_mata_pelajaran.semester_mata_pelajaran, tb_mata_pelajaran.kelas_mata_pelajaran');
				$this->db->from('tb_pelajaran');
				$this->db->join('tb_guru', 'tb_pelajaran.nip_guru = tb_guru.nip_guru');
				$this->db->join('tb_mata_pelajaran', 'tb_pelajaran.id_mata_pelajaran = tb_mata_pelajaran.id_mata_pelajaran');
        $this->db->where("tb_pelajaran.id_pelajaran",$kode);
        return $this->db->get();
    }

    function tambahdata($array)
    {
        return $this->db->insert('tb_pelajaran',$array);
    }

    function editdata($kode,$array)
    {
        $this->db->where("id_pelajaran",$kode);
        return $this->db->update('tb_pelajaran',$array);
    }
    function hapus($kode)
    {
        $this->db->where("id_pelajaran",$kode);
        return $this->db->delete('tb_pelajaran');
    }
		function ambilguru(){
        $this->db->order_by("nama_lengkap","ASC");
        return $this->db->get('tb_guru');
    }
		function ambilmatpel(){
        $this->db->order_by("nama_mata_pelajaran","ASC");
        return $this->db->get('tb_mata_pelajaran');
    }
}
