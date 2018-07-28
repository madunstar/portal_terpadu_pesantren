<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_perizinan extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function lihatdata(){
        $this->db->select('id_keluar, nama_lengkap,
        CONCAT(
            CASE DAYOFWEEK(tanggal_keluar)
              WHEN 1 THEN "Minggu"
              WHEN 2 THEN "Senin"
              WHEN 3 THEN "Selasa"
              WHEN 4 THEN "Rabu"
              WHEN 5 THEN "Kamis"
              WHEN 6 THEN "Jumat"
              WHEN 7 THEN "Sabtu"
            END,", ",
            DAY(tanggal_keluar)," ",
            CASE MONTH(tanggal_keluar)
              WHEN 1 THEN "Januari"
              WHEN 2 THEN "Februari"
              WHEN 3 THEN "Maret"
              WHEN 4 THEN "April"
              WHEN 5 THEN "Mei"
              WHEN 6 THEN "Juni"
              WHEN 7 THEN "Juli"
              WHEN 8 THEN "Agustus"
              WHEN 9 THEN "September"
              WHEN 10 THEN "Oktober"
              WHEN 11 THEN "November"
              WHEN 12 THEN "Desember"
            END," ",
            YEAR(tanggal_keluar)," Jam ",
            HOUR(tanggal_keluar),":",
            MINUTE(tanggal_keluar),":",
            SECOND(tanggal_keluar)
        ) AS tanggal_keluar, CONCAT(
            CASE DAYOFWEEK(harus_kembali)
              WHEN 1 THEN "Minggu"
              WHEN 2 THEN "Senin"
              WHEN 3 THEN "Selasa"
              WHEN 4 THEN "Rabu"
              WHEN 5 THEN "Kamis"
              WHEN 6 THEN "Jumat"
              WHEN 7 THEN "Sabtu"
            END,", ",
            DAY(harus_kembali)," ",
            CASE MONTH(harus_kembali)
              WHEN 1 THEN "Januari"
              WHEN 2 THEN "Februari"
              WHEN 3 THEN "Maret"
              WHEN 4 THEN "April"
              WHEN 5 THEN "Mei"
              WHEN 6 THEN "Juni"
              WHEN 7 THEN "Juli"
              WHEN 8 THEN "Agustus"
              WHEN 9 THEN "September"
              WHEN 10 THEN "Oktober"
              WHEN 11 THEN "November"
              WHEN 12 THEN "Desember"
            END," ",
            YEAR(harus_kembali)," Jam ",
            HOUR(harus_kembali),":",
            MINUTE(harus_kembali),":",
            SECOND(harus_kembali)
        ) AS harus_kembali, status_keluar');
        $this->db->from('tb_perizinan_keluar');
        $this->db->join('tb_santri', 'nis_santri = nis_lokal');
        $this->db->join('tb_perizinan_penjemput', 'tb_perizinan_keluar.id_penjemput = tb_perizinan_penjemput.id_penjemput');
        $this->db->order_by('id_keluar','ASC');
        return $this->db->get();
    }

    function lihatdatasatuan($id_keluar){
        $this->db->select('id_keluar, nis_santri, nama_lengkap,
        CONCAT(
            CASE DAYOFWEEK(tanggal_keluar)
              WHEN 1 THEN "Minggu"
              WHEN 2 THEN "Senin"
              WHEN 3 THEN "Selasa"
              WHEN 4 THEN "Rabu"
              WHEN 5 THEN "Kamis"
              WHEN 6 THEN "Jumat"
              WHEN 7 THEN "Sabtu"
            END,", ",
            DAY(tanggal_keluar)," ",
            CASE MONTH(tanggal_keluar)
              WHEN 1 THEN "Januari"
              WHEN 2 THEN "Februari"
              WHEN 3 THEN "Maret"
              WHEN 4 THEN "April"
              WHEN 5 THEN "Mei"
              WHEN 6 THEN "Juni"
              WHEN 7 THEN "Juli"
              WHEN 8 THEN "Agustus"
              WHEN 9 THEN "September"
              WHEN 10 THEN "Oktober"
              WHEN 11 THEN "November"
              WHEN 12 THEN "Desember"
            END," ",
            YEAR(tanggal_keluar)," Jam ",
            HOUR(tanggal_keluar),":",
            MINUTE(tanggal_keluar),":",
            SECOND(tanggal_keluar)
        ) AS tanggal_keluar, CONCAT(
            CASE DAYOFWEEK(harus_kembali)
              WHEN 1 THEN "Minggu"
              WHEN 2 THEN "Senin"
              WHEN 3 THEN "Selasa"
              WHEN 4 THEN "Rabu"
              WHEN 5 THEN "Kamis"
              WHEN 6 THEN "Jumat"
              WHEN 7 THEN "Sabtu"
            END,", ",
            DAY(harus_kembali)," ",
            CASE MONTH(harus_kembali)
              WHEN 1 THEN "Januari"
              WHEN 2 THEN "Februari"
              WHEN 3 THEN "Maret"
              WHEN 4 THEN "April"
              WHEN 5 THEN "Mei"
              WHEN 6 THEN "Juni"
              WHEN 7 THEN "Juli"
              WHEN 8 THEN "Agustus"
              WHEN 9 THEN "September"
              WHEN 10 THEN "Oktober"
              WHEN 11 THEN "November"
              WHEN 12 THEN "Desember"
            END," ",
            YEAR(harus_kembali)," Jam ",
            HOUR(harus_kembali),":",
            MINUTE(harus_kembali),":",
            SECOND(harus_kembali)
        ) AS harus_kembali, keperluan, nama_penjemput, status_keluar');
        $this->db->from('tb_perizinan_keluar');
        $this->db->join('tb_santri', 'nis_santri = nis_lokal');
        $this->db->join('tb_perizinan_penjemput', 'tb_perizinan_keluar.id_penjemput = tb_perizinan_penjemput.id_penjemput');
        $this->db->where('id_keluar',$id_keluar);
        $this->db->order_by('id_keluar','ASC');
        $this->db->limit(1);
        return $this->db->get();
    }

    function ambildatapenjemput(){
        $this->db->order_by("nama_penjemput","ASC");
        return $this->db->get('tb_perizinan_penjemput');
    }

    function tampildatasantri($id){
        $this->db->select('nis_lokal, nama_lengkap, kelas, nama_lengkap_ayah, nama_lengkap_ibu');
        $this->db->from('tb_santri');
        $this->db->where('nis_lokal',$id);
        return $this->db->get();
    }

    function tampildatapenjemput($id_penjemput){
        $this->db->select('no_identitas, nama_penjemput, no_telp, alamat_penjemput, hubungan_penjemput');
        $this->db->from('tb_perizinan_penjemput');
        $this->db->where('id_penjemput',$id_penjemput);
        return $this->db->get();
    }

    function cekdatasantri($nis_santri){
        $this->db->where("nis_lokal",$nis_santri);
        return $this->db->get('tb_santri')->num_rows();
    }

    function tambahdatapenjemput($penjemput){
        return $this->db->insert('tb_perizinan_penjemput',$penjemput);
    }

    function ambiltglkeluar($nis_santri){
        $this->db->select('tanggal_keluar');
        $this->db->from('tb_perizinan_keluar');
        $this->db->where('nis_santri',$nis_santri);
        $this->db->order_by('id_keluar','DESC');
        $this->db->limit(1);
        return $this->db->get()->row();
    }

    function ambilidpenjemput($no_identitas){
        $this->db->select('id_penjemput');
        $this->db->from('tb_perizinan_penjemput');
        $this->db->where('no_identitas',$no_identitas);
        return $this->db->get()->row();
    }

    function tambahizinkeluar($izinkeluar){
        return $this->db->insert('tb_perizinan_keluar',$izinkeluar);
    }

    function cekdatapenjemput($no_identitas){
      $this->db->where('no_identitas',$no_identitas);
      return $this->db->get('tb_perizinan_penjemput')->num_rows();

    }

    function tampilsuratizin(){
        $this->db->select('tb_santri.nama_lengkap AS nama_santri, tb_santri.kelas AS kelas, tb_santri.hp AS hp,
        CONCAT(
            CASE DAYOFWEEK(tanggal_keluar)
              WHEN 1 THEN "Minggu"
              WHEN 2 THEN "Senin"
              WHEN 3 THEN "Selasa"
              WHEN 4 THEN "Rabu"
              WHEN 5 THEN "Kamis"
              WHEN 6 THEN "Jumat"
              WHEN 7 THEN "Sabtu"
            END,", ",
            DAY(tanggal_keluar)," ",
            CASE MONTH(tanggal_keluar)
              WHEN 1 THEN "Januari"
              WHEN 2 THEN "Februari"
              WHEN 3 THEN "Maret"
              WHEN 4 THEN "April"
              WHEN 5 THEN "Mei"
              WHEN 6 THEN "Juni"
              WHEN 7 THEN "Juli"
              WHEN 8 THEN "Agustus"
              WHEN 9 THEN "September"
              WHEN 10 THEN "Oktober"
              WHEN 11 THEN "November"
              WHEN 12 THEN "Desember"
            END," ",
            YEAR(tanggal_keluar)," Jam ",
            HOUR(tanggal_keluar),":",
            MINUTE(tanggal_keluar),":",
            SECOND(tanggal_keluar)
        ) AS tanggal_keluar, CONCAT(
            CASE DAYOFWEEK(harus_kembali)
              WHEN 1 THEN "Minggu"
              WHEN 2 THEN "Senin"
              WHEN 3 THEN "Selasa"
              WHEN 4 THEN "Rabu"
              WHEN 5 THEN "Kamis"
              WHEN 6 THEN "Jumat"
              WHEN 7 THEN "Sabtu"
            END,", ",
            DAY(harus_kembali)," ",
            CASE MONTH(harus_kembali)
              WHEN 1 THEN "Januari"
              WHEN 2 THEN "Februari"
              WHEN 3 THEN "Maret"
              WHEN 4 THEN "April"
              WHEN 5 THEN "Mei"
              WHEN 6 THEN "Juni"
              WHEN 7 THEN "Juli"
              WHEN 8 THEN "Agustus"
              WHEN 9 THEN "September"
              WHEN 10 THEN "Oktober"
              WHEN 11 THEN "November"
              WHEN 12 THEN "Desember"
            END," ",
            YEAR(harus_kembali)," Jam ",
            HOUR(harus_kembali),":",
            MINUTE(harus_kembali),":",
            SECOND(harus_kembali)
        ) AS harus_kembali, tb_perizinan_keluar.keperluan AS keperluan, tb_perizinan_penjemput.nama_penjemput AS nama_penjemput, tb_perizinan_penjemput.hubungan_penjemput AS hubungan,
        CONCAT(
            CASE DAYOFWEEK(tanggal_keluar)
              WHEN 1 THEN "Minggu"
              WHEN 2 THEN "Senin"
              WHEN 3 THEN "Selasa"
              WHEN 4 THEN "Rabu"
              WHEN 5 THEN "Kamis"
              WHEN 6 THEN "Jumat"
              WHEN 7 THEN "Sabtu"
            END," ",
            DAY(tanggal_keluar)," ",
            CASE MONTH(tanggal_keluar)
              WHEN 1 THEN "Januari"
              WHEN 2 THEN "Februari"
              WHEN 3 THEN "Maret"
              WHEN 4 THEN "April"
              WHEN 5 THEN "Mei"
              WHEN 6 THEN "Juni"
              WHEN 7 THEN "Juli"
              WHEN 8 THEN "Agustus"
              WHEN 9 THEN "September"
              WHEN 10 THEN "Oktober"
              WHEN 11 THEN "November"
              WHEN 12 THEN "Desember"
            END," ",
            YEAR(tanggal_keluar)
          ) AS tanggal_surat, keperluan, tb_staff.nama_lengkap AS nama_petugas');
        $this->db->from('tb_perizinan_keluar');
        $this->db->join('tb_santri', 'tb_perizinan_keluar.nis_santri = tb_santri.nis_lokal');
        $this->db->join('tb_perizinan_penjemput', 'tb_perizinan_keluar.id_penjemput = tb_perizinan_penjemput.id_penjemput');
        $this->db->join('tb_staff', 'tb_perizinan_keluar.petugas = tb_staff.nip_staff');
        $this->db->order_by('id_keluar','DESC');
        $this->db->limit(1);
        return $this->db->get();
    }

    function tampilsuratizinsatuan($id_keluar){
        $this->db->select('tb_santri.nama_lengkap AS nama_santri, tb_santri.kelas AS kelas, tb_santri.hp AS hp,
        CONCAT(
            CASE DAYOFWEEK(tanggal_keluar)
              WHEN 1 THEN "Minggu"
              WHEN 2 THEN "Senin"
              WHEN 3 THEN "Selasa"
              WHEN 4 THEN "Rabu"
              WHEN 5 THEN "Kamis"
              WHEN 6 THEN "Jumat"
              WHEN 7 THEN "Sabtu"
            END,", ",
            DAY(tanggal_keluar)," ",
            CASE MONTH(tanggal_keluar)
              WHEN 1 THEN "Januari"
              WHEN 2 THEN "Februari"
              WHEN 3 THEN "Maret"
              WHEN 4 THEN "April"
              WHEN 5 THEN "Mei"
              WHEN 6 THEN "Juni"
              WHEN 7 THEN "Juli"
              WHEN 8 THEN "Agustus"
              WHEN 9 THEN "September"
              WHEN 10 THEN "Oktober"
              WHEN 11 THEN "November"
              WHEN 12 THEN "Desember"
            END," ",
            YEAR(tanggal_keluar)," Jam ",
            HOUR(tanggal_keluar),":",
            MINUTE(tanggal_keluar),":",
            SECOND(tanggal_keluar)
        ) AS tanggal_keluar, CONCAT(
            CASE DAYOFWEEK(harus_kembali)
              WHEN 1 THEN "Minggu"
              WHEN 2 THEN "Senin"
              WHEN 3 THEN "Selasa"
              WHEN 4 THEN "Rabu"
              WHEN 5 THEN "Kamis"
              WHEN 6 THEN "Jumat"
              WHEN 7 THEN "Sabtu"
            END,", ",
            DAY(harus_kembali)," ",
            CASE MONTH(harus_kembali)
              WHEN 1 THEN "Januari"
              WHEN 2 THEN "Februari"
              WHEN 3 THEN "Maret"
              WHEN 4 THEN "April"
              WHEN 5 THEN "Mei"
              WHEN 6 THEN "Juni"
              WHEN 7 THEN "Juli"
              WHEN 8 THEN "Agustus"
              WHEN 9 THEN "September"
              WHEN 10 THEN "Oktober"
              WHEN 11 THEN "November"
              WHEN 12 THEN "Desember"
            END," ",
            YEAR(harus_kembali)," Jam ",
            HOUR(harus_kembali),":",
            MINUTE(harus_kembali),":",
            SECOND(harus_kembali)
        ) AS harus_kembali, tb_perizinan_keluar.keperluan AS keperluan, tb_perizinan_penjemput.nama_penjemput AS nama_penjemput, tb_perizinan_penjemput.hubungan_penjemput AS hubungan,
        CONCAT(
            CASE DAYOFWEEK(tanggal_keluar)
              WHEN 1 THEN "Minggu"
              WHEN 2 THEN "Senin"
              WHEN 3 THEN "Selasa"
              WHEN 4 THEN "Rabu"
              WHEN 5 THEN "Kamis"
              WHEN 6 THEN "Jumat"
              WHEN 7 THEN "Sabtu"
            END," ",
            DAY(tanggal_keluar)," ",
            CASE MONTH(tanggal_keluar)
              WHEN 1 THEN "Januari"
              WHEN 2 THEN "Februari"
              WHEN 3 THEN "Maret"
              WHEN 4 THEN "April"
              WHEN 5 THEN "Mei"
              WHEN 6 THEN "Juni"
              WHEN 7 THEN "Juli"
              WHEN 8 THEN "Agustus"
              WHEN 9 THEN "September"
              WHEN 10 THEN "Oktober"
              WHEN 11 THEN "November"
              WHEN 12 THEN "Desember"
            END," ",
            YEAR(tanggal_keluar)
          ) AS tanggal_surat, keperluan, tb_staff.nama_lengkap AS nama_petugas');
        $this->db->from('tb_perizinan_keluar');
        $this->db->join('tb_santri', 'tb_perizinan_keluar.nis_santri = tb_santri.nis_lokal');
        $this->db->join('tb_perizinan_penjemput', 'tb_perizinan_keluar.id_penjemput = tb_perizinan_penjemput.id_penjemput');
        $this->db->join('tb_staff', 'tb_perizinan_keluar.petugas = tb_staff.nip_staff');
        // $this->db->order_by('id_keluar','DESC');
        // $this->db->limit(1);
        $this->db->where('tb_perizinan_keluar.id_keluar', $id_keluar);
        return $this->db->get();
    }

    function totalkeluar($tahun,$bulan){
      $this->db->select('count(*) as total');
      $this->db->from('tb_perizinan_keluar');
      $this->db->where('year(tb_perizinan_keluar.tanggal_keluar)',$tahun);
      $this->db->where('month(tb_perizinan_keluar.tanggal_keluar)',$bulan);
      //$this->db->where('tb_perizinan_keluar.status_keluar','keluar');
      return $this->db->get()->row_array();
    }

    function hapus($id_keluar){
        $this->db->where("id_keluar",$id_keluar);
        return $this->db->delete('tb_perizinan_keluar');
    }

    function jemputhapus($id_penjemput){
        $this->db->where("id_penjemput",$id_penjemput);
        return $this->db->delete('tb_perizinan_penjemput');
    }

    function laporankeluar($tahun,$bulan){
      $this->db->select('nis_santri, nama_lengkap, kelas,
      CONCAT(
          CASE DAYOFWEEK(tanggal_keluar)
            WHEN 1 THEN "Minggu"
            WHEN 2 THEN "Senin"
            WHEN 3 THEN "Selasa"
            WHEN 4 THEN "Rabu"
            WHEN 5 THEN "Kamis"
            WHEN 6 THEN "Jumat"
            WHEN 7 THEN "Sabtu"
          END,", ",
          DAY(tanggal_keluar)," ",
          CASE MONTH(tanggal_keluar)
            WHEN 1 THEN "Januari"
            WHEN 2 THEN "Februari"
            WHEN 3 THEN "Maret"
            WHEN 4 THEN "April"
            WHEN 5 THEN "Mei"
            WHEN 6 THEN "Juni"
            WHEN 7 THEN "Juli"
            WHEN 8 THEN "Agustus"
            WHEN 9 THEN "September"
            WHEN 10 THEN "Oktober"
            WHEN 11 THEN "November"
            WHEN 12 THEN "Desember"
          END," ",
          YEAR(tanggal_keluar)," Jam ",
          HOUR(tanggal_keluar),":",
          MINUTE(tanggal_keluar),":",
          SECOND(tanggal_keluar)
      ) AS tgl_keluar, CONCAT(
            CASE DAYOFWEEK(harus_kembali)
              WHEN 1 THEN "Minggu"
              WHEN 2 THEN "Senin"
              WHEN 3 THEN "Selasa"
              WHEN 4 THEN "Rabu"
              WHEN 5 THEN "Kamis"
              WHEN 6 THEN "Jumat"
              WHEN 7 THEN "Sabtu"
            END,", ",
            DAY(harus_kembali)," ",
            CASE MONTH(harus_kembali)
              WHEN 1 THEN "Januari"
              WHEN 2 THEN "Februari"
              WHEN 3 THEN "Maret"
              WHEN 4 THEN "April"
              WHEN 5 THEN "Mei"
              WHEN 6 THEN "Juni"
              WHEN 7 THEN "Juli"
              WHEN 8 THEN "Agustus"
              WHEN 9 THEN "September"
              WHEN 10 THEN "Oktober"
              WHEN 11 THEN "November"
              WHEN 12 THEN "Desember"
            END," ",
            YEAR(harus_kembali)," Jam ",
            HOUR(harus_kembali),":",
            MINUTE(harus_kembali),":",
            SECOND(harus_kembali)
        ) AS harus_kembali, keperluan, nama_penjemput, status_keluar');
      $this->db->from('tb_perizinan_keluar');
      $this->db->join('tb_santri', 'nis_santri = nis_lokal');
      $this->db->join('tb_perizinan_penjemput', 'tb_perizinan_keluar.id_penjemput = tb_perizinan_penjemput.id_penjemput');
      $this->db->where('year(tb_perizinan_keluar.tanggal_keluar)',$tahun);
      $this->db->where('month(tb_perizinan_keluar.tanggal_keluar)',$bulan);
      return $this->db->get();
    }
///Sampai Sini Dulu yang Digawi///

    ///anis zone///
    function datasantrikembali(){
      $this->db->select('id_kembali, nama_lengkap, tb_perizinan_kembali.tanggal_kembali, status_denda');
	  $this->db->from('tb_perizinan_kembali');
      $this->db->join('tb_perizinan_keluar','tb_perizinan_keluar.id_keluar=tb_perizinan_kembali.id_keluar');
      $this->db->join('tb_santri', 'tb_perizinan_keluar.nis_santri=tb_santri.nis_lokal');
      $this->db->order_by('id_kembali','ASC');
	  return $this->db->get();
    }

    function datasantrikeluar(){
      $this->db->select('id_keluar, nis_santri, nama_lengkap');
      $this->db->from('tb_perizinan_keluar');
      $this->db->join('tb_santri', 'nis_santri =nis_lokal');
      $this->db->where('status_keluar',"keluar");
      return $this->db->get();
    }

    function datasantrikeluarsatu($id_keluar){
      $this->db->select('id_keluar, nis_santri, nama_lengkap, tanggal_keluar, harus_kembali, keperluan, nama_penjemput ');
      $this->db->from('tb_perizinan_keluar');
      $this->db->join('tb_santri','tb_santri.nis_lokal=tb_perizinan_keluar.nis_santri');
      $this->db->join('tb_perizinan_penjemput','tb_perizinan_penjemput.id_penjemput = tb_perizinan_keluar.id_penjemput');
      $this->db->where("tb_perizinan_keluar.id_keluar",$id_keluar);
      return $this->db->get();
    }

    function tambahdatakembali($array){
      return $this->db->insert('tb_perizinan_kembali',$array);
    }

    function ambilidkembaliterakhir(){
      return $query = $this->db->query('select id_kembali from tb_perizinan_kembali order by id_kembali DESC LIMIT 1');

    }

    function tambahdatadenda($array){
      return $this->db->insert('tb_perizinan_denda',$array);
    }

    function updatedatakeluar($id_keluar){
      $this->db->set("status_keluar","kembali");
      $this->db->where("id_keluar",$id_keluar);
      return $this->db->update('tb_perizinan_keluar');
    }

    function laporankembali($tahun,$bulan){
      $this->db->select('*');
      $this->db->from('tb_perizinan_denda');
      $this->db->join('tb_perizinan_kembali', 'tb_perizinan_denda.id_kembali = tb_perizinan_kembali.id_kembali');
      $this->db->join('tb_perizinan_keluar', 'tb_perizinan_kembali.id_keluar = tb_perizinan_keluar.id_keluar');
      $this->db->join('tb_santri', 'tb_perizinan_keluar.nis_santri = tb_santri.nis_lokal');
      $this->db->join('tb_perizinan_penjemput', 'tb_perizinan_keluar.id_penjemput = tb_perizinan_penjemput.id_penjemput');
      $this->db->where('year(tb_perizinan_kembali.tanggal_kembali)',$tahun);
      $this->db->where('month(tb_perizinan_kembali.tanggal_kembali)',$bulan);
      return $this->db->get();
    }

    function kenadenda($tahun,$bulan){
      $this->db->select('count(*) as total')
        ->from('tb_perizinan_kembali')
        ->where('year(tb_perizinan_kembali.tanggal_kembali)',$tahun)
        ->where('month(tb_perizinan_kembali.tanggal_kembali)',$bulan)
        ->where('tb_perizinan_kembali.status_denda',1);
        return $this->db->get()
          ->row_array();
    }
    ///end anis zone///
}
