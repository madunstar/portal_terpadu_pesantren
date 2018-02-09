<?php  
	if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
	
	
	if ( ! function_exists('valid'))
	{
		function valid($variabel)
		{
			$variabel=trim($variabel);
			$variabel=html_escape($variabel);
			return $variabel;
		}
	}

	if ( ! function_exists('validsql'))
	{
		function validsql($variabel)
		{
			$variabel=trim($variabel);
			$variabel=html_escape($variabel);
			$variabel=addslashes($variabel);
			return $variabel;
		}
	}

	if ( ! function_exists('validxss'))
	{
		function validxss($variabel)
		{
			$variabel=trim($variabel);
			$variabel=html_escape($variabel);
			$variabel=stripslashes($variabel);
			return $variabel;
		}
	}

	if ( ! function_exists('csrf'))
	{
		function csrf()
		{
			$ci = &get_instance();
			$variabel = array(
				'name' => $ci->security->get_csrf_token_name(),
				'hash' => $ci->security->get_csrf_hash()
			);
			return $variabel;
		}
	}

