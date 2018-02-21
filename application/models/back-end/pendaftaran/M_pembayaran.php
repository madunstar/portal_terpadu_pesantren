<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class M_pembayaran extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

//calon santri

    function ambilpembayaran($email)
    {
        $this->db->where("email_pendaftar",$email);
        return $this->db->get('tb_bayar_pendaftar');
    }
    function edit($email,$data)
    {
        $this->db->where("email_pendaftar",$email);
        return $this->db->update('tb_bayar_pendaftar',$data);
    }
    function editakun($email,$array){
        $this->db->where("email_pendaftar",$email);
        return $this->db->update('tb_akun_pendaftar',$array);
      }
//----------//

//bagian admin

    function gettahunajaran(){
      $query =$this->db->query('select tahun_ajaran from tb_pengaturan_pendaftaran');
      $data  = $query->row_array();
      $value = $data['tahun_ajaran'];
      return $value;
    }

    function lihatpembayaran($tahunajaran)
    {
      $this->db->select('*')
      ->from('tb_akun_pendaftar')
      ->join('tb_biodata_pendaftar','tb_akun_pendaftar.email_pendaftar = tb_biodata_pendaftar.email_pendaftar')
      ->join('tb_bayar_pendaftar','tb_akun_pendaftar.email_pendaftar = tb_bayar_pendaftar.email_pendaftar');
      $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
      $this->db->where('tb_akun_pendaftar.status_akun','aktif');
      return $this->db->get();
    }

    
}
?>
