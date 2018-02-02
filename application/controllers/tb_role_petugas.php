<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tb_role_petugas extends CI_Controller {

function __construct()
{
        parent::__construct();

/* Standard Libraries of codeigniter are required */
$this->load->database();
$this->load->helper('url');
/* ------------------ */

$this->load->library('grocery_CRUD');

}

public function tb_role_admin()
{
$crud = new grocery_CRUD();
$crud->set_table('tb_role_admin');
$output = $crud->render();

$this->_example_output($output);
}

function _example_output($output = null)

{
$this->load->view('role_admin_output.php',$output);
}
}
