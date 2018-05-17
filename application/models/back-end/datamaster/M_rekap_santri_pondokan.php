<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class m_rekap_santri_pondokan extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function datapelajaran()
    {
        $this->db->select('*');
        $this->db->from('tb_presensi_jadwal');
        $this->db->join('tb_pelajaran', 'tb_presensi_jadwal.id_mata_pelajaran = tb_pelajaran.id_pelajaran');
        $this->db->join('tb_presensi_pondokan', 'tb_presensi_jadwal.id_kelas_belajar = tb_presensi_pondokan.id_kelas_belajar');
        $this->db->join('tb_mata_pelajaran', 'tb_pelajaran.id_mata_pelajaran = tb_mata_pelajaran.id_mata_pelajaran');
        $this->db->join('tb_guru', 'tb_pelajaran.nip_guru = tb_guru.nip_guru');
        $this->db->join('tb_tahun_ajaran', 'tb_presensi_pondokan.id_tahun = tb_tahun_ajaran.id_tahun');
        $this->db->group_by('tb_presensi_pondokan.id_kelas_belajar');
        $this->db->group_by('tb_pelajaran.id_pelajaran');
        return $this->db->get();
    }

    function datakelas($kel,$pel,$tgl)
    {
      $this->db->select('*');
      $this->db->from('tb_presensi_rekap_santri');
      $this->db->join('tb_santri', 'tb_presensi_rekap_santri.id_santri = tb_santri.nis_lokal');
      $this->db->join('tb_presensi_pondokan', 'tb_presensi_rekap_santri.id_kelas = tb_presensi_pondokan.id_kelas_belajar');
      $this->db->join('tb_pelajaran', 'tb_presensi_rekap_santri.id_pelajaran = tb_pelajaran.id_pelajaran');
      $this->db->join('tb_mata_pelajaran', 'tb_pelajaran.id_mata_pelajaran = tb_mata_pelajaran.id_mata_pelajaran');
      $this->db->where('tb_presensi_rekap_santri.id_pelajaran', $pel);
      $this->db->where('tb_presensi_rekap_santri.id_kelas', $kel);
      $this->db->where('tb_presensi_rekap_santri.tanggal_rekap', $tgl);
      return $this->db->get();
    }

    function datasantri($kel,$tgl,$pel){

      return $this->db->query('select * from tb_pondokan_santri inner join tb_santri on tb_pondokan_santri.nis_lokal = tb_santri.nis_lokal where tb_pondokan_santri.id_kelas_belajar ='.$kel.' and not exists (select * from tb_presensi_rekap_santri where tb_presensi_rekap_santri.id_santri = tb_santri.nis_lokal and id_kelas = '.$kel.' and tanggal_rekap ="'.$tgl.'" and id_pelajaran ='.$pel.')');
    }

    function cekdata($nis,$pel,$kel,$tgl){
      $this->db->select('id_santri');
      $this->db->from('tb_presensi_rekap_santri');
      $this->db->where('id_santri', $nis);
      $this->db->where('id_pelajaran', $pel);
      $this->db->where('id_kelas', $kel);
      $this->db->where('tanggal_rekap', $tgl);
      $query = $this->db->get();
      $data = $query->row_array();
      $value = $data['id_santri'];
      return $value;
    }

    function lihatsantrisatu($nis)
    {
        $this->db->select('nama_lengkap');
        $this->db->from('tb_santri');
        $this->db->where("nis_lokal",$nis);
        $query = $this->db->get();
        $data = $query->row_array();
        $value = $data['nama_lengkap'];
        return $value;
    }

    function tambahdata($array)
    {
        return $this->db->insert('tb_presensi_rekap_santri',$array);
    }

    function pelajaran($pel){
      $this->db->select('nama_mata_pelajaran');
      $this->db->from('tb_mata_pelajaran');
      $this->db->join('tb_pelajaran', 'tb_pelajaran.id_mata_pelajaran = tb_mata_pelajaran.id_mata_pelajaran');
      $this->db->where('tb_pelajaran.id_pelajaran', $pel);
      $query = $this->db->get();
      $data = $query->row_array();
      $value = $data['nama_mata_pelajaran'];
      return $value;
    }

    function kelas($kel){
      $this->db->select('nama_kelas_belajar');
      $this->db->from('tb_presensi_pondokan');
      $this->db->where('tb_presensi_pondokan.id_kelas_belajar', $kel);
      $query = $this->db->get();
      $data = $query->row_array();
      $value = $data['nama_kelas_belajar'];
      return $value;
    }

    function hapus($id_rekap)
    {
        $this->db->where("id_rekap",$id_rekap);
        return $this->db->delete('tb_presensi_rekap_santri');
    }

    function totalhadir($kel,$pel,$tgl){
      $this->db->select('count(*) as total')
        ->from('tb_presensi_rekap_santri')
        ->where('id_pelajaran', $pel)
        ->where('id_kelas', $kel)
        ->where('tanggal_rekap', $tgl)
        ->where('status_presensi', 'hadir');
        return $this->db->get()
          ->row_array();
    }

    function totalizin($kel,$pel,$tgl){
      $this->db->select('count(*) as total')
        ->from('tb_presensi_rekap_santri')
        ->where('id_pelajaran', $pel)
        ->where('id_kelas', $kel)
        ->where('tanggal_rekap', $tgl)
        ->where('status_presensi', 'izin');
        return $this->db->get()
          ->row_array();
    }

    function totalsakit($kel,$pel,$tgl){
      $this->db->select('count(*) as total')
        ->from('tb_presensi_rekap_santri')
        ->where('id_pelajaran', $pel)
        ->where('id_kelas', $kel)
        ->where('tanggal_rekap', $tgl)
        ->where('status_presensi', 'sakit');
        return $this->db->get()
          ->row_array();
    }

    function totalalfa($kel,$pel,$tgl){
      $this->db->select('count(*) as total')
        ->from('tb_presensi_rekap_santri')
        ->where('id_pelajaran', $pel)
        ->where('id_kelas', $kel)
        ->where('tanggal_rekap', $tgl)
        ->where('status_presensi', 'alfa');
        return $this->db->get()
          ->row_array();
    }
}