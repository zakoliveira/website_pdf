<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Grupo_componentes extends CI_Controller {
	function __construct() {
		parent::__construct ();
		$this->load->database ();
	}
	function novo() {
		$this->load->model ( 'Componentes_model', 'componentes' );
		
		if ($this->input->post () && ($_POST ['nome_grupo'] != null)) {
			$insert_tipo = $this->componentes->insertTipo ( $_POST ['nome_grupo'] );
			
			if ($insert_tipo == true) {
				$this->data ['badge'] = '<div class="alert alert-success" role="alert">Registo inserido com sucesso</div>';
			} else {
				$this->data ['badge'] = '<div class="alert alert-danger" role="alert">Registo não inserido!</div>';
			}
		} else if($this->input->post () && ($_POST ['nome_grupo'] == null)){
			$this->data ['badge'] = '<div class="alert alert-danger" role="alert">Por favor, preencha a designação do grupo</div>';
		}
		
		$this->data ['lista'] = $this->componentes->listarGrupos ();
		
		$this->load->view ( 'grupo_novo', $this->data );
	}
	function gerir() {
		$this->load->model ( 'Componentes_model', 'componentes' );
		
		if ($this->input->post()) {
			$nome = $this->input->post('apagar');
			if ($nome) {
				$return = $this->componentes->apagar_grupo_componente($nome);
				if ($return == true){
					$this->data['badge'] = '<div class="alert alert-success" role="alert">Registo apagado com sucesso</div>';
				} else {
					$this->data['badge'] = '<div class="alert alert-danger" role="alert">Registo não apagado!</div>';
				}
			}
		}
		$this->data ['lista'] = $this->componentes->listarGrupos ();
		
		$this->load->view ( 'grupo_gerir', $this->data );
	}
}
