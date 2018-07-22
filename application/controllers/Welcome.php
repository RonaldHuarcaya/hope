<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
	}
	
	public function index()
	{
		$data['user_list'] = $this->users_model->get_all_users();
		$this->load->view('welcome_message', $data);
	}
	
	
}
