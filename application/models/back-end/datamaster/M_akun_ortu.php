<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class M_akun_ortu extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function lihatdata()
    {
        $this->db->select('*');
        $this->db->from('tb_akun_ortu');
        $this->db->join('tb_santri', 'nis_lokal = id_ortu','right');
        return $this->db->get();
    }

    // function lihatdatasatu($nama_akun)
    // {
    //     $this->db->select('nip_staff_admin, nama_akun, kata_sandi, kode_role_admin, nama_role, nama_lengkap');
    //     $this->db->from('tb_akun_admin');
    //     $this->db->join('tb_role_admin', 'kode_role_admin = kode_role');
    //     $this->db->join('tb_staff', 'nip_staff_admin = nip_staff');
    //     $this->db->where("nama_akun",$nama_akun);
    //     return $this->db->get();
    // }
    //
    // function cekdata($nama_akun)
    // {
    //     $this->db->where("nama_akun",$nama_akun);
    //     return $this->db->get('tb_akun_admin')->num_rows();
    // }
    //
    // function cekdataedit($nama_akun)
    // {
    //     $query = $this->db->where(['nama_akun'=>$nama_akun])
    //                       ->get('tb_akun_admin');
    //     if($query->num_rows() > 0){
    //       return $query->row();
    //     }
    // }

    function tambahdata($array)
    {
        return $this->db->insert('tb_akun_ortu',$array);
    }

    function editdata($nama_akun, $kata_sandi, $kata_sandibr)
    {
        $this->db->set("kata_sandi",$kata_sandibr);
        $this->db->where("nama_akun",$nama_akun);
        $this->db->where("kata_sandi",$kata_sandi);
        return $this->db->update('tb_akun_admin');
    }
    function hapus($nama_akun)
    {
        $this->db->where("nama_akun",$nama_akun);
        return $this->db->delete('tb_akun_admin');
    }
    function ambilroleadmin(){
        $this->db->order_by("nama_role","ASC");
        return $this->db->get('tb_role_admin');
    }
    function ambilstaff(){
        $this->db->order_by("nama_lengkap","ASC");
        return $this->db->get('tb_staff');
    }
}