<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_perizinan extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function lihatdata()
    {
        $this->db->select('nama_lengkap, jenis_sekolah_asal, tanggal_keluar, nama_penjemput');
        $this->db->from('tb_perizinan_keluar');
        $this->db->join('tb_santri', 'nis_santri = nis_lokal');
        $this->db->join('tb_perizinan_penjemput', 'tb_perizinan_keluar.id_penjemput = tb_perizinan_penjemput.id_penjemput');
        return $this->db->get();
    }

    function lihatdatasantri($nis)
    {
        $this->db->select('nama_lengkap, jenis_sekolah_asal, nama_lengkap_ayah, nama_lengkap_ibu');
        $this->db->from('tb_akun_admin');
        $this->db->where('nis_lokal',$nis);
        return $this->db->get();
    }
///Sampai Sini Dulu yang Digawi///
    function cekdata($nama_akun)
    {
        $this->db->where("nama_akun",$nama_akun);
        return $this->db->get('tb_akun_admin')->num_rows();
    }

    function cekdataedit($nama_akun)
    {
        $query = $this->db->where(['nama_akun'=>$nama_akun])
                          ->get('tb_akun_admin');
        if($query->num_rows() > 0){
          return $query->row();
        }
    }

    function tambahdata($array)
    {
        return $this->db->insert('tb_akun_admin',$array);
    }

    function editdata($nama_akun, $kata_sandi, $kata_sandibr)
    {
        $this->db->set("kata_sandi",$kata_sandibr);
        $this->db->where("nama_akun",$nama_akun);
        $this->db->where("kata_sandi",$kata_sandi);
        return $this->db->update('tb_akun_admin');
    }
    function hapus($nama_akun)
    {
        $this->db->where("nama_akun",$nama_akun);
        return $this->db->delete('tb_akun_admin');
    }
    function ambilroleadmin(){
        $this->db->order_by("nama_role","ASC");
        return $this->db->get('tb_role_admin');
    }
    function ambilstaff(){
        $this->db->order_by("nama_lengkap","ASC");
        return $this->db->get('tb_staff');
    }

    ///anis zone///

    function datasantrikembali(){
      $this->db->select('nama_lengkap, tanggal_kembali, status_denda ');
      $this->db->from('tb_perizinan_kembali');
      $this->db->join('tb_perizinan_keluar','tb_perizinan_keluar.id_keluar=tb_perizinan_kembali.id_keluar');
      $this->db->join('tb_santri', 'tb_perizinan_keluar.nis_santri=tb_santri.nis_lokal');
      return $this->db->get();
    }

    function datasantrikeluar(){
      $this->db->select('id_keluar, nis_santri, nama_lengkap');
      $this->db->from('tb_perizinan_keluar');
      $this->db->join('tb_santri', 'nis_santri =nis_lokal');
      $this->db->where('status_keluar',"keluar");
      return $this->db->get();
    }

    function datasantrikeluarsatu($nis_lokal){
      $this->db->select('id_keluar, nis_santri, nama_lengkap, tanggal_keluar, keperluan, nama_penjemput ');
      $this->db->from('tb_perizinan_keluar');
      $this->db->join('tb_santri','tb_santri.nis_lokal='.$nis_lokal.'');
      $this->db->join('tb_perizinan_penjemput','tb_perizinan_penjemput.id_penjemput = tb_perizinan_keluar.id_penjemput');
      $this->db->where("tb_perizinan_keluar.nis_santri",$nis_lokal);
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
    ///end anis zone///
}
