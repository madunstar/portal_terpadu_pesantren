<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
class m_pengumuman extends CI_Model
{
  function __construct()
  {
      parent::__construct();
  }

  function lihatpengumuman()
  {
      return $this->db->get('tb_pengumuman');
  }
}