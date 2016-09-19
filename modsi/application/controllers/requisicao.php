<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class requisicao extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function nova() {
    	$this->load->model("componentes_model", "componente");
    	$this->load->model("Requisicoes_model", "requisicao");
    	
    	if ($this->input->post()) {
    		$values = $this->input->post();

    		unset($values['requisitar']);
    		
    		$user_id = $this->session->userdata['id'];
    		$status = false;
    		
    		foreach ($values as $nome => $quantidade){
    			if ($quantidade != 0) {
    				$this->componente->update_componente($nome, $quantidade);
    				$this->requisicao->insert_requisicao($user_id, $nome, $quantidade);
    				$status = true;
    			}
    		}
    		if ($status) {
    			$this->data['badge'] = '<div class="alert alert-success" role="alert">Requisição efetuada com sucesso</div>';
    		} else 
    			$this->data['badge'] = '<div class="alert alert-danger" role="alert">Erro ao efetuar equisição</div>';
    	}
    	
    	$this->data['entries'] = $this->componente->listar_componentes();
    	
    	$this->load->view('requisicao_nova', $this->data);
    }
    
    function gerir() {
    	$this->load->model("Requisicoes_model", "requisicao");
    	$this->data['lista'] = $this->requisicao->lista_requisicao();
    	$this->load->view('requisicao_lista', $this->data);
    }
    
}
