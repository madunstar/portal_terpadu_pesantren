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
        return $this->db->query("SELECT `tb_kelas_santri_p`.nis_lokal,`tb_presensi_kelas`.`id_kelas_belajar`, `tb_presensi_kelas`.`nama_kelas_belajar`, `tb_presensi_kelas`.`jenjang`, `tb_presensi_kelas`.`tingkat`, `tb_tahun_ajaran`.`tahun_ajaran` FROM `tb_kelas_santri_p` inner join `tb_presensi_kelas` on `tb_presensi_kelas`.`id_kelas_belajar`=`tb_kelas_santri_p`.`id_kelas_belajar` inner join `tb_tahun_ajaran` on `tb_tahun_ajaran`.`id_tahun`=`tb_presensi_kelas`.`id_tahun` where `nis_lokal` = '$nis_lokal' order by `tb_presensi_kelas`.`tingkat` asc ");
      }

      function lihattingkatanpondokan($nis_lokal){
        return $this->db->query("SELECT `tb_pondokan_santri_p`.nis_lokal,`tb_presensi_pondokan_p`.`id_kelas_belajar`, `tb_presensi_pondokan_p`.`nama_kelas_belajar`, `tb_presensi_pondokan_p`.`pondokan`, `tb_presensi_pondokan_p`.`tingkat`, `tb_tahun_ajaran`.`tahun_ajaran` FROM `tb_pondokan_santri_p` inner join `tb_presensi_pondokan_p` on `tb_presensi_pondokan_p`.`id_kelas_belajar`=`tb_pondokan_santri_p`.`id_kelas_belajar` inner join `tb_tahun_ajaran` on `tb_tahun_ajaran`.`id_tahun`=`tb_presensi_pondokan_p`.`id_tahun` where `nis_lokal` = '$nis_lokal' order by `tb_presensi_pondokan_p`.`tingkat` asc ");
      }

      public function upload_santri($filename){
        ini_set('memory_limit', '-1');
        $inputFileName = './assets/import/'.$filename;
          try {
          $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
          } catch(Exception $e) {
          die('Error loading file :' . $e->getMessage());
          }

          $worksheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
          $numRows = count($worksheet);

          for ($i=2; $i < ($numRows+1) ; $i++) {
              if (  $this->db->where("nis_lokal",$worksheet[$i]["A"])->get('tb_santriwati')->num_rows() > 0){

                } else {

              $ins = array(
                      'nis_lokal'=>                   $worksheet[$i]["A"],
                      'email_santri'=>                $worksheet[$i]["B"],
                      'nisn'=>                        $worksheet[$i]["C"],
                      'nik'=>                         $worksheet[$i]["D"],
                      'nama_lengkap'=>                $worksheet[$i]["E"],
                      'tempat_lahir'=>                $worksheet[$i]["F"],
                      'tgl_lahir'=>                   $worksheet[$i]["G"],
                      'jenis_kelamin'=>               $worksheet[$i]["H"],
                      'alamat_lengkap'=>              $worksheet[$i]["I"],
                      'provinsi'=>                    $worksheet[$i]["J"],
                      'kabupaten_kota'=>              $worksheet[$i]["K"],
                      'kecamatan'=>                   $worksheet[$i]["L"],
                      'desa_kelurahan'=>              $worksheet[$i]["M"],
                      'kode_pos'=>                    $worksheet[$i]["N"],
                      'hobi'=>                        $worksheet[$i]["O"],
                      'cita_cita'=>                   $worksheet[$i]["P"],
                      'jenis_sekolah_asal'=>          $worksheet[$i]["Q"],
                      'status_sekolah_asal'=>         $worksheet[$i]["R"],
                      'nomor_peserta_ujian'=>         $worksheet[$i]["S"],
                      'jarak_ke_sekolah'=>            $worksheet[$i]["T"],
                      'alat_transportasi'=>           $worksheet[$i]["U"],
                      'status_tempat_tinggal'=>       $worksheet[$i]["V"],
                      'no_kk'=>                       $worksheet[$i]["W"],
                      'nik_ayah'=>                    $worksheet[$i]["X"],
                      'nama_lengkap_ayah'=>           $worksheet[$i]["Y"],
                      'pendidikan_terakhir_ayah'=>    $worksheet[$i]["Z"],
                      'pekerjaan_ayah'=>              $worksheet[$i]["AA"],
                      'nik_ibu'=>                     $worksheet[$i]["AB"],
                      'nama_lengkap_ibu'=>            $worksheet[$i]["AC"],
                      'pendidikan_terakhir_ibu'=>     $worksheet[$i]["AD"],
                      'pekerjaan_ibu'=>               $worksheet[$i]["AE"],
                      'penghasilan_orang_tua'=>       $worksheet[$i]["AF"],
                      'nik_wali'=>                    $worksheet[$i]["AG"],
                      'nama_lengkap_wali'=>           $worksheet[$i]["AH"],
                      'pendidikan_terakhir_wali'=>    $worksheet[$i]["AI"],
                      'pekerjaan_wali'=>              $worksheet[$i]["AJ"],
                      'penghasilan_wali'=>            $worksheet[$i]["AK"],
                      'jumlah_saudara_kandung'=>      $worksheet[$i]["AL"],
                      'hp'=>                          $worksheet[$i]["AM"],
                      'hpayah'=>                      $worksheet[$i]["AN"],
                      'hpibu'=>                       $worksheet[$i]["AO"],
                      'hpwali'=>                      $worksheet[$i]["AP"],
                      'kelas'=>                       $worksheet[$i]["AQ"],
                      'pondokan'=>                    $worksheet[$i]["AR"],
                      'foto' => ''
                     );

              $this->db->insert('tb_santriwati', $ins);

            }
      }
  }
      //////////////////////////////////

      public function listsantriajax()
      {
          $requestData= $_REQUEST;
          $columns = array(
              // datatable column index  => database column name
                  0=>'tb_santriwati.nis_lokal',
                  1=>'tb_santriwati.nama_lengkap',
                  2=> 'tb_santriwati.nisn',
                  3=> 'tb_santriwati.gender'
          );
          $sql = "SELECT * ";
          $sql.=" FROM tb_santriwati WHERE 1=1 ";
          $query=$this->db->query($sql);
          $totalData = $query->num_rows();
          $totalFiltered = $totalData;
          if( !empty($requestData['search']['value']) ) {
              $sql.= " AND ( tb_santriwati.nis_lokal LIKE '%".$requestData['search']['value']."%' ";
              $sql.=" OR tb_santriwati.nama_lengkap LIKE '%".$requestData['search']['value']."%'  ";
              $sql.=" OR tb_santriwati.nisn LIKE '%".$requestData['search']['value']."%' ) ";
          }
          $query=$this->db->query($sql);
          $totalFiltered = $query->num_rows();
          $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']." LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
          $query=$this->db->query($sql);
          $data = array();
          $no=1;
          foreach($query->result_array() as $row) {  // preparing an array
              $nestedData=array();

              $akd = " <a href='".base_url('admin/datamaster/santriwatilihat?nis='.$row['nis_lokal'].'')."' class='btn btn-primary btn-xs' title='Lihat'><i class='fa fa-eye'></i></a>
              <a href='".base_url('admin/datamaster/santriwatiedit?nis='.$row['nis_lokal'].'')."' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
              <a href='#' class='btn btn-danger btn-xs hapus' title='Hapus' id='".$row['nis_lokal']."'><i class='fa fa-trash-o'></i></a>
              <a href='".base_url('admin/datamaster/cetakkartup?nis='.$row['nis_lokal'].'')."' class='btn btn-info btn-xs' title='cetak' id='".$row['nis_lokal']."' target='_blank'><i class='fa fa-print'></i></a>";
              $nestedData[] = $akd;
              $nestedData[] = $row['nama_lengkap'];
              $nestedData[] = $row["nis_lokal"];
              $nestedData[] = $row["nisn"];
              $nestedData[] = $row['jenis_kelamin']=="L"?"Laki-laki":"Perempuan";
              $nestedData[] = "<button class='btn btn-default btn-xs edit2'  title='Edit' id='".$row['nis_lokal']."' data-toggle='modal' data-target='#myModaledit' ><i class='fa fa-list'></i> ".$row['pondokan']."</button>";
              $nestedData[] = "<button class='btn btn-default btn-xs edit'  title='Edit' id='".$row['nis_lokal']."' data-toggle='modal' data-target='#myModaledit' ><i class='fa fa-list'></i> ".$row['kelas']."</button>";
              $nestedData[] = "<a href='".base_url('admin/datamaster/santriwatiberkas?nis='.$row['nis_lokal'].'')."' class='btn btn-success btn-xs' title='Berkas'><i class='fa fa-file-text-o'></i></a>
              <a href='".base_url('admin/datamaster/prestasisantriwati?nis='.$row['nis_lokal'].'')."' class='btn btn-primary btn-xs' title='Prestasi'><i class='fa fa-trophy'></i></a>
              <a href='".base_url('admin/datamaster/pelanggaransantriwati?nis='.$row['nis_lokal'].'')."' class='btn btn-danger btn-xs' title='Pelanggaran'><i class='fa fa-ban'></i></a>
              <a href='".base_url('admin/datamaster/dataakunortup?nis='.$row['nis_lokal'].'')."' class='btn btn-primary btn-xs' title='Akun Orang Tua'><i class='fa fa-cogs'></i></a>
              <a href='".base_url('admin/datamaster/detilinfaqp?nis='.$row['nis_lokal'].'')."' class='btn btn-primary btn-xs' title='detil bayar infaq'><i class='fa fa-money'></i></a>";
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
