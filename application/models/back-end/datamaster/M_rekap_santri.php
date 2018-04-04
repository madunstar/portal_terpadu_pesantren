<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class m_rekap_santri extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function datapelajaran()
    {
        $this->db->select('*');
        $this->db->from('tb_presensi_jadwal');
        $this->db->join('tb_pelajaran', 'tb_presensi_jadwal.id_pelajaran = tb_pelajaran.id_pelajaran');
        $this->db->join('tb_presensi_kelas', 'tb_presensi_jadwal.id_kelas_belajar = tb_presensi_kelas.id_kelas_belajar');
        $this->db->join('tb_mata_pelajaran', 'tb_pelajaran.id_mata_pelajaran = tb_mata_pelajaran.id_mata_pelajaran');
        $this->db->join('tb_guru', 'tb_pelajaran.nip_guru = tb_guru.nip_guru');
        return $this->db->get();
    }

    function datakelas($kel,$pel,$tgl)
    {
      $this->db->select('*');
      $this->db->from('tb_presensi_rekap_santri');
      $this->db->join('tb_santri', 'tb_presensi_rekap_santri.id_santri = tb_santri.nis_lokal');
      $this->db->join('tb_presensi_kelas', 'tb_presensi_rekap_santri.id_kelas = tb_presensi_kelas.id_kelas_belajar');
      $this->db->join('tb_pelajaran', 'tb_presensi_rekap_santri.id_pelajaran = tb_pelajaran.id_pelajaran');
      $this->db->join('tb_mata_pelajaran', 'tb_pelajaran.id_mata_pelajaran = tb_mata_pelajaran.id_mata_pelajaran');
      $this->db->where('tb_presensi_rekap_santri.id_pelajaran', $pel);
      $this->db->where('tb_presensi_rekap_santri.id_kelas', $kel);
      $this->db->where('tb_presensi_rekap_santri.tanggal_rekap', $tgl);
      return $this->db->get();
    }

    function datasantri($kel,$tgl){
      $this->db->select('*');
      $this->db->from('tb_kelas_santri');
      $this->db->join('tb_santri', 'tb_kelas_santri.nis_lokal = tb_santri.nis_lokal');
      $this->db->join('tb_presensi_rekap_santri', 'tb_kelas_santri.nis_lokal = tb_presensi_rekap_santri.id_santri','left');
      $this->db->where('tb_kelas_santri.id_kelas_belajar', $kel);
      $this->db->where('tb_presensi_rekap_santri.tanggal_rekap', $tgl);
      //$this->db->where('tb_presensi_rekap_santri.id_santri', null);

      return $this->db->get();
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
        return $this->db->insert('tb_pembayaran_spp',$array);
    }

    function santribayar($tahun,$bulan){
      $this->db->select('count(*) as total')
        ->from('tb_pembayaran_spp')
        ->where('tb_pembayaran_spp.spp_tahun', $tahun)
        ->where('tb_pembayaran_spp.spp_bulan', $bulan);
        return $this->db->get()
          ->row_array();
    }

    //
    // function editdata($id_tahun,$array)
    // {
    //     $this->db->where("id_tahun",$id_tahun);
    //     return $this->db->update('tb_tahun_ajaran',$array);
    // }
    function hapus($id_infaq)
    {
        $this->db->where("id_pembayaran",$id_infaq);
        return $this->db->delete('tb_pembayaran_spp');
    }
}