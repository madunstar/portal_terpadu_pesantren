<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class Pengaturan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_tb_pengaturan()
    {

        return $this->db->get_where('tb_pengaturan_pendaftaran',array('id_pengaturan'=>1))->row_array();
    }

    function update_tb_role_admin($kode_role,$params)
    {
        $this->db->where('kode_role',$kode_role);
        return $this->db->update('tb_role_admin',$params);
    }

}
?>
