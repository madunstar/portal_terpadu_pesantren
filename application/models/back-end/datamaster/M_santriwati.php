<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class M_santriwati extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    /*
     * Get tb_role_admin by kode_role
     */
    function lihatdata()
    {
        return $this->db->get('tb_santriwati');
    }

    function lihatdatasatu($nis)
    {
        $this->db->where("nis_lokal",$nis);
        return $this->db->get('tb_santriwati');
    }

    function cekdata($nis)
    {
        $this->db->where("nis_lokal",$nis);
        return $this->db->get('tb_santriwati')->num_rows();
    }

    function tambahdata($array)
    {
        return $this->db->insert('tb_santriwati',$array);
    }

    function editdata($nis,$array)
    {
        $this->db->where("nis_lokal",$nis);
        return $this->db->update('tb_santriwati',$array);
    }
    function hapus($nis)
    {
        $this->db->where("nis_lokal",$nis);
        return $this->db->delete('tb_santriwati');
    }
   /////////////////////////////////////////

   function lihatdataberkas($nis)
   {
        $this->db->where("nis_lokal",$nis);
        return $this->db->get('tb_berkas_santriwati');
   }

   function tambahdataberkas($array)
   {
       return $this->db->insert('tb_berkas_santriwati',$array);
   }

   function lihatdatasatuberkas($id_berkas)
   {
       $this->db->where("id_berkas",$id_berkas);
       return $this->db->get('tb_berkas_santriwati');
   }

   function cekdataberkas($id_berkas)
    {
        $this->db->where("id_berkas",$id_berkas);
        return $this->db->get('tb_berkas_santriwati')->num_rows();
    }

    function editdataaberkas($id_berkas,$array)
    {
        $this->db->where("id_berkas",$id_berkas);
        return $this->db->update('tb_berkas_santriwati',$array);
    }
    function hapusberkas($id_berkas)
    {
        $this->db->where("id_berkas",$id_berkas);
        return $this->db->delete('tb_berkas_santriwati');
    }

    ////////////////////////////////

    function ambilprovinsi(){
        $this->db->order_by("nama_provinsi","ASC");
        return $this->db->get('tb_provinsi');
      }

      function cariprovinsi($provinsi){
        $this->db->where('nama_provinsi', $provinsi);
        $this->db->order_by("nama_provinsi","ASC");
        $exec =  $this->db->get('tb_provinsi')->row_array();
        $idprovinsi = $exec['id_provinsi'];
        return $idprovinsi;
      }

      function carikabupaten($kabupaten){
        $this->db->where('nama_kota_kab', $kabupaten);
        $this->db->order_by("nama_kota_kab","ASC");
        $exec =  $this->db->get('tb_kota_kab')->row_array();
        $idkabupaten = $exec['id_kota_kab'];
        return $idkabupaten;
      }


      function carikecamatan($kecamatan){
        $this->db->where('nama_kecamatan', $kecamatan);
        $this->db->order_by("nama_kecamatan","ASC");
        $exec =  $this->db->get('tb_kecamatan')->row_array();
        $idkecamatan = $exec['id_kecamatan'];
        return $idkecamatan;
      }

      function ambilkabupaten($provinsi){
        $idprovinsi = $this->cariprovinsi($provinsi);
        $this->db->where('id_provinsi', $idprovinsi);
        $this->db->order_by("nama_kota_kab","ASC");
        return $this->db->get('tb_kota_kab');
      }

      function ambilkecamatan($kabupaten){
        $idkabupaten = $this->carikabupaten($kabupaten);
        $this->db->where('id_kota_kab', $idkabupaten);
        $this->db->order_by("nama_kecamatan","ASC");
        return $this->db->get('tb_kecamatan');
      }

      function ambildesa($kecamatan){
        $idkecamatan = $this->carikecamatan($kecamatan);
        $this->db->where('id_kecamatan', $idkecamatan);
        $this->db->order_by("nama_kel_desa","ASC");
        return $this->db->get('tb_kel_desa');
      }
      function datakotaajax($provinsi)
      {
        $idprovinsi = $this->cariprovinsi($provinsi);
        $this->db->where('id_provinsi', $idprovinsi);
        $this->db->order_by("nama_kota_kab","ASC");
        $hasil = $this->db->get('tb_kota_kab');
            return $hasil->result();
      }

      function datakecamatanajax($kabupaten)
      {
        $idkabupaten = $this->carikabupaten($kabupaten);
        $this->db->where('id_kota_kab', $idkabupaten);
        $this->db->order_by("nama_kecamatan","ASC");
        $hasil = $this->db->get('tb_kecamatan');
            return $hasil->result();
      }

      function datadesaajax($kecamatan)
      {
        $idkecamatan = $this->carikecamatan($kecamatan);
        $this->db->where('id_kecamatan', $idkecamatan);
        $this->db->order_by("nama_kel_desa","ASC");
        $hasil = $this->db->get('tb_kel_desa');
            return $hasil->result();
      }

      function ambiltransportasi(){
        $this->db->order_by("nama_alat_transportasi","ASC");
        return $this->db->get('tb_alat_transportasi');
      }

      function ambilpekerjaan(){
        $this->db->order_by("nama_pekerjaan","ASC");
        return $this->db->get('tb_pekerjaan');
      }

      function ambilpendidikan(){
        $this->db->order_by("id_pendidikan","ASC");
        return $this->db->get('tb_pendidikan');
      }

      function lihattingkatan($nis_lokal){
        return $this->db->query("SELECT `tb_kelas_santriwati`.nis_lokal,`tb_presensi_kelas`.`id_kelas_belajar`, `tb_presensi_kelas`.`nama_kelas_belajar`, `tb_presensi_kelas`.`jenjang`, `tb_presensi_kelas`.`tingkat`, `tb_tahun_ajaran`.`tahun_ajaran` FROM `tb_kelas_santriwati` inner join `tb_presensi_kelas` on `tb_presensi_kelas`.`id_kelas_belajar`=`tb_kelas_santriwati`.`id_kelas_belajar` inner join `tb_tahun_ajaran` on `tb_tahun_ajaran`.`id_tahun`=`tb_presensi_kelas`.`id_tahun` where `nis_lokal` = '$nis_lokal' order by `tb_presensi_kelas`.`tingkat` asc ");
      }

      function lihattingkatanpondokan($nis_lokal){
        return $this->db->query("SELECT `tb_pondokan_santriwati`.nis_lokal,`tb_presensi_pondokan`.`id_kelas_belajar`, `tb_presensi_pondokan`.`nama_kelas_belajar`, `tb_presensi_pondokan`.`pondokan`, `tb_presensi_pondokan`.`tingkat`, `tb_tahun_ajaran`.`tahun_ajaran` FROM `tb_pondokan_santriwati` inner join `tb_presensi_pondokan` on `tb_presensi_pondokan`.`id_kelas_belajar`=`tb_pondokan_santriwati`.`id_kelas_belajar` inner join `tb_tahun_ajaran` on `tb_tahun_ajaran`.`id_tahun`=`tb_presensi_pondokan`.`id_tahun` where `nis_lokal` = '$nis_lokal' order by `tb_presensi_pondokan`.`tingkat` asc ");
      }

      //////////////////////////////////

}
