<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

  function __construct()
  {
      parent::__construct();
  }

  function get_count_status_diverifikasi($tahunajaran) {
    $this->db->select('count(*) as total');
    $this->db->from('tb_akun_pendaftar');
    $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
    $this->db->where('tb_akun_pendaftar.status_akun','aktif');
    $this->db->where('tb_akun_pendaftar.status_biodata','diverifikasi');
    return  $this->db->get()
     ->row_array();

  }

  function get_count_status_tidak_lengkap($tahunajaran) {
    $this->db->select('count(*) as total');
    $this->db->from('tb_akun_pendaftar');
    $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
    $this->db->where('tb_akun_pendaftar.status_akun','aktif');
    $this->db->where('tb_akun_pendaftar.status_biodata','tidak lengkap');
    return $this->db->get()
     ->row_array();

  }

  function get_count_status_menunggu($tahunajaran) {
    $this->db->select('count(*) as total');
    $this->db->from('tb_akun_pendaftar');
    $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
    $this->db->where('tb_akun_pendaftar.status_akun','aktif');
    $this->db->where('tb_akun_pendaftar.status_biodata','menunggu verifikasi');
    return $this->db->get()
     ->row_array();
  }

  function get_count_pendaftaran($tahunajaran) {
    $this->db->select('count(*) as total');
    $this->db->from('tb_akun_pendaftar');
    $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
    $this->db->where('tb_akun_pendaftar.status_akun','aktif');
    return $this->db->get()
     ->row_array();

  }
///////////putra
  function putra_status_diverifikasi($tahunajaran) {
    $this->db->select('count(*) as total');
    $this->db->from('tb_akun_pendaftar');
    $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
    $this->db->where('tb_akun_pendaftar.status_akun','aktif');
    $this->db->where('tb_akun_pendaftar.asrama_pendaftar','putra');
    $this->db->where('tb_akun_pendaftar.status_biodata','diverifikasi');
    return  $this->db->get()
     ->row_array();

  }

  function putra_status_tidak_lengkap($tahunajaran) {
    $this->db->select('count(*) as total');
    $this->db->from('tb_akun_pendaftar');
    $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
    $this->db->where('tb_akun_pendaftar.status_akun','aktif');
    $this->db->where('tb_akun_pendaftar.asrama_pendaftar','putra');
    $this->db->where('tb_akun_pendaftar.status_biodata','tidak lengkap');
    return $this->db->get()
     ->row_array();

  }

  function putra_status_menunggu($tahunajaran) {
    $this->db->select('count(*) as total');
    $this->db->from('tb_akun_pendaftar');
    $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
    $this->db->where('tb_akun_pendaftar.status_akun','aktif');
    $this->db->where('tb_akun_pendaftar.asrama_pendaftar','putra');
    $this->db->where('tb_akun_pendaftar.status_biodata','menunggu verifikasi');
    return $this->db->get()
     ->row_array();
  }

  function putra_pendaftaran($tahunajaran) {
    $this->db->select('count(*) as total');
    $this->db->from('tb_akun_pendaftar');
    $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
    $this->db->where('tb_akun_pendaftar.asrama_pendaftar','putra');
    $this->db->where('tb_akun_pendaftar.status_akun','aktif');
    return $this->db->get()
     ->row_array();

  }
//////////////////akhir putra//////////////////////

  function get_pembayaran_terakhir() {
    $this->db->select('*');
    $this->db->from('tb_akun_pendaftar');
    $this->db->join('tb_bayar_pendaftar','tb_akun_pendaftar.email_pendaftar = tb_bayar_pendaftar.email_pendaftar');
    $this->db->join('tb_biodata_pendaftar','tb_akun_pendaftar.email_pendaftar = tb_biodata_pendaftar.email_pendaftar');
    $this->db->where('status_pembayaran','menunggu verifikasi');
    $this->db->or_where('status_pembayaran','diverifikasi');
    $this->db->limit(3);
    $this->db->order_by('tb_bayar_pendaftar.tanggal_pembayaran','desc');
    return $this->db->get();
  }

//hitung pembayaran orang//
  function get_count_pembayaran_menunggu($tahunajaran) {
    $this->db->select('count(*) as total');
    $this->db->from('tb_akun_pendaftar');
    $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
    $this->db->where('tb_akun_pendaftar.status_akun','aktif');
    $this->db->where('tb_akun_pendaftar.status_pembayaran','menunggu verifikasi');
    return $this->db->get()
     ->row_array();
  }

  function get_count_pembayaran_diverifikasi($tahunajaran) {
    $this->db->select('count(*) as total');
    $this->db->from('tb_akun_pendaftar');
    $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
    $this->db->where('tb_akun_pendaftar.status_akun','aktif');
    $this->db->where('tb_akun_pendaftar.status_pembayaran','diverifikasi');
    return  $this->db->get()
     ->row_array();
  }

//////akhir hitung pembayaran orang///////

/////////////hitunf duit pendaftaran///////////////////
  function hitungpembayaran($tahunajaran){
      $this->db->select_sum('besar_pembayaran','total')
      ->from('tb_bayar_pendaftar')
      ->join('tb_akun_pendaftar','tb_akun_pendaftar.email_pendaftar = tb_bayar_pendaftar.email_pendaftar');
      $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
      $this->db->where('tb_akun_pendaftar.status_akun','aktif');
      $this->db->where('tb_akun_pendaftar.status_pembayaran','diverifikasi');
   return  $this->db->get()
            ->row_array();
  }
  function hitungpembayaranmenunggu($tahunajaran){
      $this->db->select_sum('besar_pembayaran','total')
      ->from('tb_bayar_pendaftar')
      ->join('tb_akun_pendaftar','tb_akun_pendaftar.email_pendaftar = tb_bayar_pendaftar.email_pendaftar');
      $this->db->where('tb_akun_pendaftar.tahun_ajaran',$tahunajaran);
      $this->db->where('tb_akun_pendaftar.status_akun','aktif');
      $this->db->where('tb_akun_pendaftar.status_pembayaran','menunggu verifikasi');
   return  $this->db->get()
            ->row_array();
  }

/////akhir///////////
  function status_santri($email){
    $this->db->where('email_pendaftar',$email);
    return $this->db->get('tb_akun_pendaftar');
  }

  function nama_user($email){
    $this->db->where('email_pendaftar',$email);
    return $this->db->get('tb_biodata_pendaftar');
  }

  function datafoto($email){
    $this->db->where('email_pendaftar',$email);
    $this->db->where('nama_berkas','paspoto');
    return $this->db->get('tb_berkas_pendaftar');
  }

  function cekstatus($email){
    $this->db->where('email_pendaftar',$email);
    $this->db->where('status_biodata','diverifikasi');
    $this->db->where('status_berkas','diverifikasi');
    $this->db->where('status_pembayaran','diverifikasi');
    return $this->db->get('tb_akun_pendaftar');
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

}



?>
