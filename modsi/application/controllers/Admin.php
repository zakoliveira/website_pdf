<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	function novo () {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome', 'Nome', 'required');
		$this->form_validation->set_rules('apelido', 'Apelido', 'required');
		$this->form_validation->set_rules('utilizador', 'Utilizador', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		 
		$this->load->model('admin_model', 'admin');
		
		$data = array();
		
		if ($this->input->post()){
			if ($this->form_validation->run() == TRUE ){
		
				$insert_user = $this->admin->insertUser($this->input->post('utilizador'), $this->input->post('password'), $this->input->post('nome'), $this->input->post('apelido'), $this->input->post('user_type'));		
				if ($insert_user == true){
					$data['badge'] = '<div class="alert alert-success" role="alert">Registo inserido com sucesso</div>';
				} else {
					$data['badge'] = '<div class="alert alert-danger" role="alert">Registo não inserido!</div>';
				}
			} else {
				$data['badge'] = '<div class="alert alert-danger" role="alert">Por favor, preencha todos os campos</div>';
			}
		} 
		
		$this->load->view('novo_user', $data);
	}
	
	function listar () {
		$data = array();
		$this->load->model('admin_model', 'admin');
		
		if ($this->input->post()){
			
			$form = $this->input->post();
			
			$user = $form['apagar'];
			
			$delete_user = $this->admin->apagarUser($user);
			if ($delete_user == true) {
				$data['badge'] = '<div class="alert alert-success" role="alert">Registo apagado com sucesso</div>';
			} else {
				$data['badge'] = '<div class="alert alert-danger" role="alert">Registo não apagado!</div>';
			}
		}
		$data['list'] = $this->admin->listar();
		
		$this->load->view('lista_user', $data);
	}
	
}
?>