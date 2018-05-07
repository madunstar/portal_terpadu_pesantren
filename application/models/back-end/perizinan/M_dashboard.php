<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

  function __construct()
  {
      parent::__construct();
  }

  function lihatubahsandi($nama_akun)
  {
      $this->db->select('nip_staff_admin, nama_akun, kata_sandi, kode_role_admin, nama_role, nama_lengkap');
      $this->db->from('tb_akun_admin');
      $this->db->join('tb_role_admin', 'kode_role_admin = kode_role');
      $this->db->join('tb_staff', 'nip_staff_admin = nip_staff');
      $this->db->where("nama_akun",$nama_akun);
      return $this->db->get();
  }

  function cekubahsandi($nama_akun)
  {
      $query = $this->db->where(['nama_akun'=>$nama_akun])
                        ->get('tb_akun_admin');
      if($query->num_rows() > 0){
        return $query->row();
      }
  }

  function ubahsandi($nama_akun, $kata_sandi, $kata_sandibr)
  {
      $this->db->set("kata_sandi",$kata_sandibr);
      $this->db->where("nama_akun",$nama_akun);
      $this->db->where("kata_sandi",$kata_sandi);
      return $this->db->update('tb_akun_admin');
  }

  function datakeluarterakhir(){
    $this->db->from('tb_perizinan_keluar');
    $this->db->join('tb_santri', 'nis_santri = nis_lokal');
    $this->db->join('tb_perizinan_penjemput', 'tb_perizinan_keluar.id_penjemput = tb_perizinan_penjemput.id_penjemput');
    $this->db->order_by("tanggal_keluar","desc");
    $this->db->limit(3);
    return $this->db->get();
  }

  function datadendaterakhir(){
    $this->db->select('*');
    $this->db->from('tb_perizinan_bayar');
    $this->db->join('tb_perizinan_denda', 'tb_perizinan_bayar.id_denda = tb_perizinan_denda.id_denda');
    $this->db->join('tb_perizinan_kembali', 'tb_perizinan_denda.id_kembali = tb_perizinan_kembali.id_kembali');
    $this->db->join('tb_perizinan_keluar', 'tb_perizinan_kembali.id_keluar = tb_perizinan_keluar.id_keluar');
    $this->db->join('tb_santri', 'tb_perizinan_keluar.nis_santri = tb_santri.nis_lokal');
    $this->db->join('tb_akun_admin', 'tb_akun_admin.nama_akun = tb_perizinan_bayar.petugas');
    $this->db->order_by("tanggal_bayar","desc");
    $this->db->limit(5);
    return $this->db->get();
  }

/////////////////tahun sekarang/////////////////
  function datatahunini($tahunini){
    $this->db->select('count(*) as total')
      ->from('tb_perizinan_keluar')
      ->where('year(tb_perizinan_keluar.tanggal_keluar)',$tahunini);
      return $this->db->get()
        ->row_array();
  }

  function bayartahunini($tahunini){
    $this->db->select_sum('besar_bayar','total')
      ->from('tb_perizinan_bayar')
      ->where('year(tb_perizinan_bayar.tanggal_bayar)',$tahunini);
      return $this->db->get()
        ->row_array();
  }

  function dendatahunini($tahunini){
    $this->db->select_sum('besar_denda','total')
      ->from('tb_perizinan_denda')
      ->join('tb_perizinan_kembali','tb_perizinan_denda.id_kembali = tb_perizinan_kembali.id_kembali')
      ->where('year(tb_perizinan_kembali.tanggal_kembali)',$tahunini);
      return $this->db->get()
        ->row_array();
  }

/////////////////////tahun belakang/////////////////////

  function datatahunlalu($tahunsemalam){
    $this->db->select('count(*) as total')
      ->from('tb_perizinan_keluar')
      ->where('year(tb_perizinan_keluar.tanggal_keluar)',$tahunsemalam);
      return $this->db->get()
        ->row_array();
  }

  function bayartahunlalu($tahunsemalam){
    $this->db->select_sum('besar_bayar','total')
      ->from('tb_perizinan_bayar')
      ->where('year(tb_perizinan_bayar.tanggal_bayar)',$tahunsemalam);
      return $this->db->get()
        ->row_array();
  }

  function dendatahunlalu($tahunsemalam){
    $this->db->select_sum('besar_denda','total')
      ->from('tb_perizinan_denda')
      ->join('tb_perizinan_kembali','tb_perizinan_denda.id_kembali = tb_perizinan_kembali.id_kembali')
      ->where('year(tb_perizinan_kembali.tanggal_kembali)',$tahunsemalam);
      return $this->db->get()
        ->row_array();
  }

///////////////2tahun lalu////////////////////////
  function datatahunbelakang($tahunbelakang){
    $this->db->select('count(*) as total')
      ->from('tb_perizinan_keluar')
      ->where('year(tb_perizinan_keluar.tanggal_keluar)',$tahunbelakang);
      return $this->db->get()
        ->row_array();
  }

  function bayartahunbelakang($tahunbelakang){
    $this->db->select_sum('besar_bayar','total')
      ->from('tb_perizinan_bayar')
      ->where('year(tb_perizinan_bayar.tanggal_bayar)',$tahunbelakang);
      return $this->db->get()
        ->row_array();
  }

  function dendatahunbelakang($tahunbelakang){
    $this->db->select_sum('besar_denda','total')
      ->from('tb_perizinan_denda')
      ->join('tb_perizinan_kembali','tb_perizinan_denda.id_kembali = tb_perizinan_kembali.id_kembali')
      ->where('year(tb_perizinan_kembali.tanggal_kembali)',$tahunbelakang);
      return $this->db->get()
        ->row_array();
  }

////////////perbulan/////////////////
  function databulanini($tahunini,$bulanini){
    $this->db->select('count(*) as total')
      ->from('tb_perizinan_keluar')
      ->where('year(tb_perizinan_keluar.tanggal_keluar)',$tahunini)
      ->where('month(tb_perizinan_keluar.tanggal_keluar)',$bulanini);
      return $this->db->get()
        ->row_array();
  }

  function bayarbulanini($tahunini,$bulanini){
    $this->db->select_sum('besar_bayar','total')
      ->from('tb_perizinan_bayar')
      ->where('year(tb_perizinan_bayar.tanggal_bayar)',$tahunini)
      ->where('month(tb_perizinan_bayar.tanggal_bayar)',$bulanini);
      return $this->db->get()
        ->row_array();
  }

  function dendabulanini($tahunini,$bulanini){
    $this->db->select_sum('besar_denda','total')
      ->from('tb_perizinan_denda')
      ->join('tb_perizinan_kembali','tb_perizinan_denda.id_kembali = tb_perizinan_kembali.id_kembali')
      ->where('month(tb_perizinan_kembali.tanggal_kembali)',$bulanini)
      ->where('year(tb_perizinan_kembali.tanggal_kembali)',$tahunini);
      return $this->db->get()
        ->row_array();
  }

}



?>
