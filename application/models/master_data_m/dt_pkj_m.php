<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class dt_pkj_m extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    /*
    * Mendapatkan dt_kls berdasarkan kd_kls
    */
    function get_dt($kd_pkj){
        return $this->db->get_where('tb_pekerjaan',array('kd_pkj'=>$kd_pkj))->row_array();
    }
    /*
    * Mendapatkan jumlah data
    */
    function get_all_dt_count(){
        $this->db->from('tb_pekerjaan');
        return $this->db->count_all_results();
    }
    /*
    * Mendapatkan semua data
    */
    function get_all_dt(){
        return $this->db->get('tb_pekerjaan')->result_array();
    }
    /*
    * Fungsi menambahkan data
    */
    function add_dt($params){
        $this->db->insert('tb_pekerjaan',$params);
        return $this->db->insert_id();
    }
    /*
     * Fungsi mengubah data
     */
    function update_dt($kd_pkj,$params){
        $this->db->where('kd_pkj',$kd_pkj);
        return $this->db->update('tb_pekerjaan',$params);
    }
    /*
     * fungsi menghapus data
     */
    function delete_dt($kd_pkj){
        return $this->db->delete('tb_pekerjaan',array('kd_pkj'=>$kd_pkj));
    }
}