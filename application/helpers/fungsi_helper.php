<?php  
	if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

	
	if ( ! function_exists('pesan_get'))
	{
		function pesan_get($variabel,$pesansukses, $pesangagal = NULL, $pesangagal2 = NULL)
		{
			 
			 if (isset($_GET[$variabel])) {
				$ci = &get_instance();
				$var = $ci->input->get($variabel,TRUE);
				if ($var=='1' && $pesansukses!= NULL) { 
					echo "
					<div class='alert alert-success'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						<i class='fa fa-info-circle'></i>
						".$pesansukses."
					</div> ";
				 } else if ($var=='0' && $pesangagal!= NULL) {
					echo "
					<div class='alert alert-danger'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						<i class='fa fa-info-circle'></i>
						".$pesangagal."
					</div> ";
				 } else if ($var=='2' && $pesangagal2!= NULL) {
					echo "
					<div class='alert alert-warning'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						<i class='fa fa-info-circle'></i>
						".$pesangagal2."
					</div> ";
				 }
			} else if (isset($_POST[$variabel])) {
				$ci = &get_instance();
				$var = $ci->input->post($variabel,TRUE);
				if ($var=='1' && $pesansukses!= NULL) { 
					echo "
					<div class='alert alert-success'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						<i class='fa fa-info-circle'></i>
						".$pesansukses."
					</div> ";
				 } else if ($var=='0' && $pesangagal!= NULL) {
					echo "
					<div class='alert alert-danger'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						<i class='fa fa-info-circle'></i>
						".$pesangagal."
					</div> ";
				 } else if ($var=='2' && $pesangagal2!= NULL) {
					echo "
					<div class='alert alert-warning'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						<i class='fa fa-info-circle'></i>
						".$pesangagal2."
					</div> ";
				 }
			}
		
		}
	}

	if ( ! function_exists('pesanvar'))
	{
		function pesanvar($variabel,$pesansukses, $pesangagal = NULL, $pesangagal2 = NULL)
		{
			 
				$ci = &get_instance();
				$var = $variabel;
				if ($var=='1' && $pesansukses!= NULL) { 
					echo "
					<div class='alert alert-success'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						<i class='fa fa-info-circle'></i>
						".$pesansukses."
					</div> ";
				 } else if ($var=='0' && $pesangagal!= NULL) {
					echo "
					<div class='alert alert-danger'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						<i class='fa fa-info-circle'></i>
						".$pesangagal."
					</div> ";
				 } else if ($var=='2' && $pesangagal2!= NULL) {
					echo "
					<div class='alert alert-warning'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						<i class='fa fa-info-circle'></i>
						".$pesangagal2."
					</div> ";
				 }
	
		
		}
	}

	
	if (!function_exists('ceklogin'))
	{
		function ceklogin()
		{	
			$ci = &get_instance();
			if($ci->session->userdata('js8aena9sakfdh98sdkg80q3uierhkjk') != "login"){
				redirect(base_url("stockkosong/admin/login"));
			}
		}
	}

	if (!function_exists('ceklogin2'))
	{
		function ceklogin2()
		{	
			$ci = &get_instance();
			if($ci->session->userdata('kljhgfhji23wedd2843er9ufidj34ewsd') != "login"){
				redirect(base_url("stockkosong/login"));
			}
		}
	}

	if (!function_exists('cekloginuserproduk'))
	{
		function cekloginuserproduk()
		{	
			$ci = &get_instance();
			if($ci->session->userdata('iuyhgbnm09876tfvbnmko98765redfcv') != "login"){
				redirect(base_url("produk/login"));
			}
		}
	}

	if (!function_exists('cekloginadminproduk'))
	{
		function cekloginadminproduk()
		{	
			$ci = &get_instance();
			if($ci->session->userdata('js8aena9sakfdh98sdkg80q3uierhkjk') != "login"){
				redirect(base_url("produk/admin/login"));
			}
		}
	}