<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_admin extends CI_Controller
{
    function __construct() {
        parent::__construct();

        if(empty($this->session->userdata('id'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
    }

    public function index() {
    	$this->load->model('admin_model', 'admin');
    	$user_id = $this->session->userdata['id'];
    	
    	$utilizador = $this->admin->get_username($user_id);
    	
    	if ($utilizador) {
    		$this->data['username'] = "Olá ".$utilizador->username;
    		
    		$requisicoes = $this->admin->requisicoes($user_id);
    		
    		if ($requisicoes) {
    			$this->data['requisicoes'] = $requisicoes;
    			$this->data['estado'] = "Estas são as suas requisições:";
    		} else{
    			$this->data['mensagem'] = "Atualmente, não existem componentes requisitados.";
    			$this->data['sub_mensagem'] = "Clique em 'Requisições' para ver os componentes disponíveis.";
    			$this->data['video'] = '<iframe src="https://player.vimeo.com/video/153530761" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
    		}
    	} else 
    		$this->data['username'] = "Página principal";
    	
        $this->load->view('home_admin', $this->data);
    }

    public function logout() {
        $data = ['id', 'username', 'admin'];
        $this->session->unset_userdata($data);

        redirect(base_url());
    }
}
