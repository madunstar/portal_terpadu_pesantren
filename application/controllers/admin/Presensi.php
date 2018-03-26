<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
 //////////////////////////////////////////////////belum dipakai/////////////////////////////////
// class Presensi extends CI_Controller
// {
//   function __construct()
//   {
//     parent::__construct();
//     $this->load->library('session');
//     $this->load->model('back-end/perizinan/m_dashboard');
//     $this->load->model('back-end/perizinan/m_perizinan');
//     $this->load->model('back-end/perizinan/m_denda');
//     $this->load->library('layout_pendaftaran');
//     if ($this->session->userdata('nama_akun')=="") {
//         redirect('admin/login/loginhalaman');
//     }
//     else if ($this->session->userdata('kode_role_admin') == 'adm_pd') {
//         redirect('admin/pendaftaran');
//     }
//     $this->load->helper('text');
//   }
//
//   function logout(){
//       $this->session->unset_userdata('nip_staff_admin');
//       $this->session->unset_userdata('nama_akun');
//       $this->session->unset_userdata('kode_role_admin');
//       session_destroy();
//       redirect('admin/login/loginhalaman');
//   }
//
//   function ubahsandiadmin(){
//       if ($this->input->post()) {
//         $array=array(
//             'nama_role'=> $this->input->post('nama_role'),
//             'nip_staff_admin'=> $this->input->post('nip_staff_admin'),
//             'nama_lengkap'=> $this->input->post('nama_lengkap'),
//             'nama_akun'=> $this->input->post('nama_akun'),
//             'kata_sandi'=> $this->input->post('kata_sandi'),
//             );
//           $nama_akun = $this->input->post("nama_akun");
//           $kata_sandi = md5($this->input->post("kata_sandi"));
//           $kata_sandibr = md5($this->input->post("kata_sandibr"));
//           $rekata_sandibr = md5($this->input->post("rekata_sandibr"));
//           $query = $this->m_dashboard->cekubahsandi($nama_akun);
//           if ($query->kata_sandi!=$kata_sandi) {
//               $variabel['kata_sandi'] =$this->input->post('kata_sandi');
//               $variabel['data'] = $array;
//               $this->layout->render('back-end/perizinan/v_ubah_sandi',$variabel);
//           } else if ($kata_sandibr!=$rekata_sandibr){
//                $variabel['rekata_sandibr'] =$this->input->post('rekata_sandibr');
//                $variabel['data'] = $array;
//                $this->layout->render('back-end/perizinan/v_ubah_sandi',$variabel);
//           } else {
//               $exec = $this->m_dashboard->ubahsandi($nama_akun,$kata_sandi,$kata_sandibr);
//               if ($exec){
//                   redirect(base_url("admin/perizinan/ubahsandiadmin?nama_akun=".$nama_akun."&msg=1"));
//               }
//           }
//       } else {
//           $nama_akun = $this->input->get("nama_akun");
//           $exec = $this->m_dashboard->lihatubahsandi($nama_akun);
//           if ($exec->num_rows()>0){
//               $variabel['data'] = $exec ->row_array();
//               $this->layout->render('back-end/perizinan/v_ubah_sandi',$variabel);
//           } else {
//               redirect(base_url("admin/perizinan/dashboard"));
//           }
//       }
//   }
//
//   function index()
//   {
//       $variabel='';
//       $this->layout->render('back-end/presensi/v_presensi_kelas',$variabel);
//   }
// }

?>
