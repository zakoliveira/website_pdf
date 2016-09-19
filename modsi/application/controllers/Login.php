<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Login extends CI_Controller {
	function __construct() {
		parent::__construct ();
		$this->load->model ( "login_model", "login" );
		/*
		 * if (! empty ( $_SESSION ['id'] ))
		 * redirect ( 'home' );
		 */
		$this->load->helper ( 'url' );
	}
	public function index() {
		if (!empty($_POST)) {
			$result = $this->login->validate_user ( $_POST );
			if ($result) {
				$data = [ 
						'id' => $result->id,
						'username' => $result->username,
						'admin' => $result->admin 
				];
				
				$this->session->set_userdata ( $data );
				redirect ( 'home_admin' );
			} else {
				redirect ('login/error');
			}
		}
		$this->load->view ('login');
	}
	
	function error (){
		$this->load->view ('login_error');
		
	}
}
