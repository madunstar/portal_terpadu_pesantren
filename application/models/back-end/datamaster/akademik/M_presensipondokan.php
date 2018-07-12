<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class M_presensipondokan extends CI_Model
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
        $this->db->from("tb_presensi_pondokan");
        $this->db->join("tb_guru","tb_guru.nip_guru=tb_presensi_pondokan.nip_guru");
        $this->db->join("tb_kelas","tb_kelas.kd_kelas=tb_presensi_pondokan.kd_kelas");
        $this->db->join("tb_tahun_ajaran","tb_tahun_ajaran.id_tahun=tb_presensi_pondokan.id_tahun");
        return $this->db->get();
    }

    function lihatdatasatulengkap($id_kelas_belajar)
    {
        $this->db->from("tb_presensi_pondokan");
        $this->db->join("tb_guru","tb_guru.nip_guru=tb_presensi_pondokan.nip_guru");
        $this->db->join("tb_kelas","tb_kelas.kd_kelas=tb_presensi_pondokan.kd_kelas");
        $this->db->join("tb_tahun_ajaran","tb_tahun_ajaran.id_tahun=tb_presensi_pondokan.id_tahun");
        $this->db->where("tb_presensi_pondokan.id_kelas_belajar",$id_kelas_belajar);
        return $this->db->get();
    }

    function lihatdatasatu($id_kelas_belajar)
    {
        $this->db->where("id_kelas_belajar",$id_kelas_belajar);
        return $this->db->get('tb_presensi_pondokan');
    }

    function cekdata($nip)
    {
        $this->db->where("nip_guru",$nip);
        return $this->db->get('tb_guru')->num_rows();
    }

    function tambahdata($array)
    {
        return $this->db->insert('tb_presensi_pondokan',$array);
    }

    function editdata($id,$array)
    {
        $this->db->where("id_kelas_belajar",$id);
        return $this->db->update('tb_presensi_pondokan',$array);
    }
    function hapus($id)
    {
        $this->db->where("id_kelas_belajar",$id);
        return $this->db->delete('tb_presensi_pondokan');
    }
   /////////////////////////////////////////

   function lihatdatasantri($id_kelas_belajar)
   {
        $this->db->from("tb_pondokan_santri");
        $this->db->join("tb_santri","tb_santri.nis_lokal=tb_pondokan_santri.nis_lokal");
        $this->db->where("tb_pondokan_santri.id_kelas_belajar",$id_kelas_belajar);
        return $this->db->get();
   }

   function lissantri($id_kelas_belajar)
   {
        $exec = $this->lihatdatasatu($id_kelas_belajar)->row_array();
        $id_tahun = $exec['id_tahun'];
        $pondokan = $exec['pondokan'];
        return $this->db->query("SELECT * FROM tb_santri WHERE NOT EXISTS (SELECT * FROM tb_pondokan_santri inner join tb_presensi_pondokan on tb_pondokan_santri.id_kelas_belajar = tb_presensi_pondokan.id_kelas_belajar  WHERE tb_santri.nis_lokal=tb_pondokan_santri.nis_lokal and tb_presensi_pondokan.id_tahun='$id_tahun') AND tb_santri.pondokan='$pondokan' ");
   }

   function tambahdatasantri($array)
   {
       return $this->db->insert('tb_pondokan_santri',$array);
   }

   function lihatdatasatusantri($id_kelas_santri)
   {
        $this->db->from("tb_pondokan_santri");
        $this->db->join("tb_santri","tb_santri.nis_lokal=tb_pondokan_santri.nis_lokal");
        $this->db->where("tb_pondokan_santri.id_kelas_santri",$id_kelas_santri);
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
        return $this->db->update('tb_pondokan_santri',$array);
    }
    function hapussantri($id_kelas_santri)
    {
        $this->db->where("id_kelas_santri",$id_kelas_santri);
        return $this->db->delete('tb_pondokan_santri');
    }

    ///////////////////////////////////////////////////////
    function lihatdatajadwal($id_kelas_belajar,$hari)
    {
        $this->db->from("tb_presensi_jadwal");
        $this->db->where("id_kelas_belajar",$id_kelas_belajar);
        $this->db->where("hari",$hari);
        $this->db->order_by("jam","asc");
        return $this->db->get();
    }

    function lihatjadwal($id_kelas_belajar)
    {
        $this->db->from("tb_presensi_jadwal");
        $this->db->where("id_kelas_belajar",$id_kelas_belajar);
        $this->db->where("id_mata_pelajaran !=",'Istirahat');
        $this->db->group_by('id_mata_pelajaran');
        return $this->db->get();
    }

    function tambahdatajadwal($array)
   {
       return $this->db->insert('tb_presensi_jadwal',$array);
   }

   function hapusjadwal($id_jadwal)
    {
        $this->db->where("id_jadwal",$id_jadwal);
        return $this->db->delete('tb_presensi_jadwal');
    }

    function lihatdatasatujadwal($id_jadwal)
    {
         $this->db->from("tb_presensi_jadwal");
         $this->db->where("id_jadwal",$id_jadwal);
         return $this->db->get();
    }

    function editdatajadwal($id_jadwal,$array)
    {
        $this->db->where("id_jadwal",$id_jadwal);
        return $this->db->update('tb_presensi_jadwal',$array);
    }

    public function lihatdataajax()
    {
        $requestData= $_REQUEST;
        $columns = array(
            // datatable column index  => database column name
                0=>'tahun_ajaran',
                1=>'nama_kelas_belajar',
                2=> 'nama_kelas',
                3=> 'nama_lengkap',
                3=> 'pondokan',
                3=> 'tingkat'
        );
        $sql = "SELECT * ";
        $sql.=" FROM tb_presensi_pondokan inner join tb_guru on tb_guru.nip_guru=tb_presensi_pondokan.nip_guru
                inner join tb_kelas on tb_kelas.kd_kelas=tb_presensi_pondokan.kd_kelas
                inner join tb_tahun_ajaran on tb_tahun_ajaran.id_tahun=tb_presensi_pondokan.id_tahun
        WHERE 1=1 ";
        $query=$this->db->query($sql);
        $totalData = $query->num_rows();
        $totalFiltered = $totalData;
        if( !empty($requestData['search']['value']) ) {
            $sql.= " AND ( tahun_ajaran LIKE '%".$requestData['search']['value']."%' ";
            $sql.=" OR nama_kelas_belajar LIKE '%".$requestData['search']['value']."%'  ";
            $sql.=" OR nama_kelas LIKE '%".$requestData['search']['value']."%'  ";
            $sql.=" OR nama_lengkap LIKE '%".$requestData['search']['value']."%'  ";
            $sql.=" OR pondokan LIKE '%".$requestData['search']['value']."%'  ";
            $sql.=" OR tingkat LIKE '%".$requestData['search']['value']."%' ) ";
        }
        $query=$this->db->query($sql);
        $totalFiltered = $query->num_rows();
        $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']." LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
        $query=$this->db->query($sql);
        $data = array();
        $no=1;
        foreach($query->result_array() as $row) {  // preparing an array
            $nestedData=array();

            $akd = "    <a href='".base_url('admin/santriakd/lihatkelaspondokan?id='.$row['id_kelas_belajar'].'')."' class='btn btn-primary btn-xs' title='Lihat'><i class='fa fa-eye'></i></a>
            <a href='".base_url('admin/santriakd/editkelaspondokan?id='.$row['id_kelas_belajar'].'')."' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
            <a href='#' class='btn btn-danger btn-xs hapus' title='Hapus' id='".$row['id_kelas_belajar']."'><i class='fa fa-trash-o'></i></a>
            <a href='".base_url('admin/santriakd/printkelaspondokan?id='.$row['id_kelas_belajar'].'')."' class='btn btn-success btn-xs print' title='print' id='".$row['id_kelas_belajar']."'><i class='fa fa-print'></i></a>";
            $nestedData[] = $akd;
            $nestedData[] = $row['tahun_ajaran'];
            $nestedData[] = $row["nama_kelas_belajar"];
            $nestedData[] = $row["nama_kelas"];
            $nestedData[] = $row['nama_lengkap'];
            $nestedData[] = $row['pondokan'];
            $nestedData[] = $row['tingkat'];
            $nestedData[] = "<a href='".base_url('admin/santriakd/jadwalpondokan?id='.$row['id_kelas_belajar'].'')."' class='btn btn-success btn-xs' title='Lihat'><i class='fa fa-clock-o'></i> Jadwal</a>";
            $nestedData[] = "<button class='btn ".($row['status_kelas']=="Aktif"?"btn-success":"btn-warning")." btn-xs edit'  title='Edit' id='".$row['id_kelas_belajar']."' data-toggle='modal' data-target='#myModaledit' ><i class='fa fa-edit'></i> ".$row['status_kelas']."</button>";
            $nestedData[] = "<a href='".base_url('admin/santriakd/lihatkelaspondokansantri?id='.$row['id_kelas_belajar'].'')."' class='btn btn-success btn-xs' title='Lihat'><i class='fa fa-list'></i> Santri</a>";
            $data[] = $nestedData;
            $no++;
        }
        $json_data = array(
            "draw"            => intval( $requestData['draw'] ),
            "recordsTotal"    => intval( $totalData ),
            "recordsFiltered" => intval( $totalFiltered ),
            "data"            => $data
            );

        echo json_encode($json_data);
    }



}
