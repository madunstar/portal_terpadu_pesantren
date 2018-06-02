<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class M_presenwati extends CI_Model
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
        $this->db->from("tb_presensi_kelas_p");
        $this->db->join("tb_guru","tb_guru.nip_guru=tb_presensi_kelas_p.nip_guru");
        $this->db->join("tb_kelas","tb_kelas.kd_kelas=tb_presensi_kelas_p.kd_kelas");
        $this->db->join("tb_tahun_ajaran","tb_tahun_ajaran.id_tahun=tb_presensi_kelas_p.id_tahun");
        return $this->db->get();
    }

    function lihatdatasatulengkap($id_kelas_belajar)
    {
        $this->db->from("tb_presensi_kelas_p");
        $this->db->join("tb_guru","tb_guru.nip_guru=tb_presensi_kelas_p.nip_guru");
        $this->db->join("tb_kelas","tb_kelas.kd_kelas=tb_presensi_kelas_p.kd_kelas");
        $this->db->join("tb_tahun_ajaran","tb_tahun_ajaran.id_tahun=tb_presensi_kelas_p.id_tahun");
        $this->db->where("tb_presensi_kelas_p.id_kelas_belajar",$id_kelas_belajar);
        return $this->db->get();
    }

    function lihatdatasatu($id_kelas_belajar)
    {
        $this->db->where("id_kelas_belajar",$id_kelas_belajar);
        return $this->db->get('tb_presensi_kelas_p');
    }

    function cekdata($nip)
    {
        $this->db->where("nip_guru",$nip);
        return $this->db->get('tb_guru')->num_rows();
    }

    function tambahdata($array)
    {
        return $this->db->insert('tb_presensi_kelas_p',$array);
    }

    function editdata($id,$array)
    {
        $this->db->where("id_kelas_belajar",$id);
        return $this->db->update('tb_presensi_kelas_p',$array);
    }
    function hapus($id)
    {
        $this->db->where("id_kelas_belajar",$id);
        return $this->db->delete('tb_presensi_kelas_p');
    }
   /////////////////////////////////////////

   function lihatdatasantri($id_kelas_belajar)
   {
        $this->db->from("tb_kelas_santri_p");
        $this->db->join("tb_santriwati","tb_santriwati.nis_lokal=tb_kelas_santri_p.nis_lokal");
        $this->db->where("tb_kelas_santri_p.id_kelas_belajar",$id_kelas_belajar);
        return $this->db->get();
   }

   function lissantri($id_kelas_belajar)
   {
        $exec = $this->lihatdatasatu($id_kelas_belajar)->row_array();
        $id_tahun = $exec['id_tahun'];
        $jenjang = $exec['jenjang'];
        return $this->db->query("SELECT * FROM tb_santriwati WHERE NOT EXISTS (SELECT * FROM tb_kelas_santri_p inner join tb_presensi_kelas_p on tb_kelas_santri_p.id_kelas_belajar = tb_presensi_kelas_p.id_kelas_belajar  WHERE tb_santriwati.nis_lokal=tb_kelas_santri_p.nis_lokal and tb_presensi_kelas_p.id_tahun='$id_tahun') AND tb_santriwati.kelas='$jenjang' ");
   }

   function tambahdatasantri($array)
   {
       return $this->db->insert('tb_kelas_santri_p',$array);
   }

   function lihatdatasatusantri($id_kelas_santri)
   {
        $this->db->from("tb_kelas_santri_p");
        $this->db->join("tb_santriwati","tb_santriwati.nis_lokal=tb_kelas_santri_p.nis_lokal");
        $this->db->where("tb_kelas_santri_p.id_kelas_santri",$id_kelas_santri);
        return $this->db->get();
   }


   function cekdataberkas($id_berkas)
    {
        $this->db->where("id_berkas",$id_berkas);
        return $this->db->get('tb_berkas_guru')->num_rows();
    }

    function editdatasantri($id_kelas_santri,$array)
    {
        $this->db->where("id_kelas_santri",$id_kelas_santri);
        return $this->db->update('tb_kelas_santri_p',$array);
    }
    function hapussantri($id_kelas_santri)
    {
        $this->db->where("id_kelas_santri",$id_kelas_santri);
        return $this->db->delete('tb_kelas_santri_p');
    }

     ///////////////////////////////////////////////////////
     function lihatdatajadwal($id_kelas_belajar,$hari)
     {
         $this->db->from("tb_presensi_jadwal_afilasi_p");
         $this->db->where("id_kelas_belajar",$id_kelas_belajar);
         $this->db->where("hari",$hari);
         $this->db->order_by("jam","asc");
         return $this->db->get();
     }
     function lihatjadwal($id_kelas_belajar)
     {
         $this->db->from("tb_presensi_jadwal_afilasi_p");
         $this->db->where("id_kelas_belajar",$id_kelas_belajar);
         $this->db->where("id_mata_pelajaran !=",'Istirahat');
         $this->db->group_by('id_mata_pelajaran');
         return $this->db->get();
     }

     function tambahdatajadwal($array)
    {
        return $this->db->insert('tb_presensi_jadwal_afilasi_p',$array);
    }

    function hapusjadwal($id_jadwal)
     {
         $this->db->where("id_jadwal",$id_jadwal);
         return $this->db->delete('tb_presensi_jadwal_afilasi_p');
     }

     function lihatdatasatujadwal($id_jadwal)
     {
          $this->db->from("tb_presensi_jadwal_afilasi_p");
          $this->db->where("id_jadwal",$id_jadwal);
          return $this->db->get();
     }

     function editdatajadwal($id_jadwal,$array)
     {
         $this->db->where("id_jadwal",$id_jadwal);
         return $this->db->update('tb_presensi_jadwal_afilasi_p',$array);
     }

}