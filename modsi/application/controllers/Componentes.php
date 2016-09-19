<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Componentes extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function novo() {
    	
    	$this->load->library('form_validation');
    	 
    	$this->load->model('Componentes_model', 'componentes');
    	 
    	$form_post = $this->input->post();
    	
    	$this->data['lista_grupos'] = $this->componentes->listarGrupos();
    	
    	$this->form_validation->set_rules('nome', 'Nome', 'required');
    	$this->form_validation->set_rules('quantidade', 'Quantidade', 'required');
    	$this->form_validation->set_rules('grupo_componente', 'Grupo de Componente', 'required');
    	 
    	if ( $form_post && ($this->form_validation->run() == TRUE ) ){
    		$insert = $this->componentes->insert_componente($_POST['nome'], $_POST['quantidade'], $_POST['grupo_componente']);
    		if ($insert == true){
    			$this->data['badge'] = '<div class="alert alert-success" role="alert">Registo inserido com sucesso</div>';
    		} else {
    			$this->data['badge'] = '<div class="alert alert-danger" role="alert">Registo não inserido!</div>';
    		}
    	
    	} else if ($form_post && ($this->form_validation->run() == FALSE )) {
    		$this->data['badge'] = '<div class="alert alert-warning" role="alert">Por favor, preencha todos os campos</div>';
    	}
    	
    	$this->load->view('criar_componente', $this->data);
    }
    
    function gerir() {
    	
    	$this->load->model('Componentes_model', 'componentes');
    	if ($this->input->post()) {
    		$nome = $this->input->post('apagar');
    		$return = $this->componentes->apagar_componente($nome);
    		
    		if ($return == true){
    			$this->data['badge'] = '<div class="alert alert-success" role="alert">Registo apagado com sucesso</div>';
    		} else {
    			$this->data['badge'] = '<div class="alert alert-danger" role="alert">Registo não apagado!</div>';
    		}
    	}
    	
    	$this->data['lista_componentes'] = $this->componentes->listar_componentes();
    	
    	$this->load->view('componentes_listar', $this->data);
    }
    
}
