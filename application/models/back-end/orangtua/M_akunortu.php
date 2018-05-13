<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_akunortu extends CI_Model{
  function __construct(){
    parent::__construct();
  }

  function get_count_akun() {
    $query = $this->db->query('SELECT * FROM tb_akun_ortu');
    return $query->num_rows();
  }

  function get_last_akun(){
    $query = $this->db->query('select right(id_ortu,4) as id from tb_akun_ortu order by id_ortu desc limit 1');
    $data  = $query->row_array();
    $value = $data['id'];
    return $value;
  }

  function tambahakun($array){
    return $this->db->insert('tb_akun_ortu',$array);
  }

  function cekdata($nis)
  {
      $this->db->where("nis_lokal",$nis);
      return $this->db->get('tb_santri')->num_rows();
  }
}
?>
