<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct()
 	{
 		parent::__construct();

 		$this->load->database();
 		$this->load->helper('url');

 		$this->load->library('grocery_CRUD');
 	}

 	public function _example_output($output = null)
 	{
		$this->load->view('sidebar_master');
 		$this->load->view('main_content_ex.php',(array)$output);
		$this->load->view('footer');
 	}

 	public function offices()
 	{
 		$output = $this->grocery_crud->render();

 		$this->_example_output($output);
 	}

 	public function index()
 	{
 		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
 	}

 	public function offices_management()
 	{
 		try{
 			$crud = new grocery_CRUD();

 			$crud->set_theme('datatables');
 			$crud->set_table('offices');
 			$crud->set_subject('Office');
 			$crud->required_fields('city');
 			$crud->columns('city','country','phone','addressLine1','postalCode');

 			$output = $crud->render();


 			$this->_example_output($output);

 		}catch(Exception $e){
 			show_error($e->getMessage().' --- '.$e->getTraceAsString());
 		}
 	}

}
