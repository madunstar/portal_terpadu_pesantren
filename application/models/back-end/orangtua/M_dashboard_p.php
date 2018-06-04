<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class M_dashboard_p extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function lihatubahsandi($id_ortu){
        $this->db->select('id_ortu, nama_ortu, email_ortu, kata_sandi');
        $this->db->from('tb_akun_ortu');
        $this->db->where('id_ortu',$id_ortu);
        return $this->db->get();
    }

    function cekubahsandi($id_ortu){
        $query = $this->db->where(['id_ortu'=>$id_ortu])
                          ->get('tb_akun_ortu');
        if($query->num_rows() > 0){
          return $query->row();
        }
    }

    function ubahsandi($id_ortu, $kata_sandi, $kata_sandibr)
    {
        $this->db->set("kata_sandi",$kata_sandibr);
        $this->db->where("id_ortu",$id_ortu);
        $this->db->where("kata_sandi",$kata_sandi);
        return $this->db->update('tb_akun_ortu');
    }

    function bayarspp($nis,$bulanini,$tahunini)
    {
        $this->db->select('status_bayar');
        $this->db->from('tb_pembayaran_spp_p');
        $this->db->join('tb_santriwati', 'tb_pembayaran_spp_p.nis_santri = tb_santriwati.nis_lokal');
        $this->db->where('tb_santriwati.nis_lokal', $nis);
        $this->db->where('tb_pembayaran_spp_p.spp_bulan', $bulanini);
        $this->db->where('tb_pembayaran_spp_p.spp_tahun', $tahunini);
        return $this->db->get()
        ->row_array();
    }

    function lihatinfo()
    {
        $this->db->select('*');
        $this->db->from('tb_pengumuman_ortu');
        $this->db->order_by('tanggal_pengumuman','desc');
        $this->db->limit(3);
        return $this->db->get();

    }

    function datakeluarterakhir($nis){
      $this->db->from('tb_perizinan_keluar_p');
      $this->db->join('tb_santriwati', 'nis_santri = nis_lokal');
      $this->db->join('tb_perizinan_penjemput', 'tb_perizinan_keluar_p.id_penjemput = tb_perizinan_penjemput.id_penjemput');
      $this->db->where('tb_santriwati.nis_lokal', $nis);
      $this->db->order_by("tanggal_keluar","desc");
      $this->db->limit(3);
      return $this->db->get();
    }

      //////////////////////////////////

}