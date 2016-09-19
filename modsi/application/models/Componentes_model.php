<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Componentes_model extends CI_Model
{

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function insert_componente($nome, $quantidade, $id_componente_grupo) {
    	$componente = array (
    			'nome' => $nome,
    			'quantidade' => $quantidade,
    			'id_componente_grupo' => $id_componente_grupo
    			
    	);
    	$nome_existe = $this->db->select('nome')->where('nome', $nome)->get('componentes')->result();

		if ($nome_existe) {
			$update = "UPDATE componentes SET quantidade=quantidade+'".$quantidade."' WHERE nome='".$nome."'";

			$insert_status = $this->db->query($update);
			return $insert_status;
		}
    	
    	$insert_status = $this->db->insert('componentes', $componente);
    	return $insert_status;
    }
    
    function insertTipo($nome) {
    	$this->db->where('nome', $nome);
    	$result = $this->db->get('grupo_componente');
    		
    	if ( $result->num_rows() > 0 ) {
    		$msg = "Já existe esse registo.";
    		return $msg;
    	}
    	$tipo = array ('nome' => $nome);

    	$insert_status = $this->db->insert('grupo_componente', $tipo);
    	return $insert_status;
    }
    
	function listarGrupos () {
		$result = $this->db->get('grupo_componente')
						   ->result();
		
		$componentes = array();
		foreach ($result as $id => $tipo){
			$componentes[$id] = array(
					'id_componente_grupo' => $tipo->id_componente_grupo,
					'nome' => $tipo->nome
			);
		}
		return $componentes;
	}
	
	function listar_componentes () {
		//$result = $this->db->get('componentes')->result();
		
		$result = $this->db->select('g.id_componente_grupo, c.nome, c.quantidade, g.nome as grupo')
		->from('componentes as c')
		->join('grupo_componente as g', 'g.id_componente_grupo=c.id_componente_grupo')
		->get()->result();
		
		$componentes = array();
		foreach ($result as $id => $tipo){
			$componentes[$id] = array(
					'id_componente_grupo' => $tipo->id_componente_grupo,
					'grupo' => $tipo->grupo,
					'nome' => $tipo->nome,
					'quantidade' => $tipo->quantidade
								
			);
		}
		return $componentes;
	}
	
	function apagar_componente($nome) {
		$query = $this->db->delete('componentes', array('nome' => $nome));
		return $query;
	}
	
	function apagar_grupo_componente($nome) {
		$query = $this->db->delete('grupo_componente', array('nome' => $nome));
		return $query;
	}
	
	function update_componente($nome, $val) {
		if ($val != 0) {
			$query = "UPDATE componentes
			SET quantidade = quantidade - $val
			WHERE nome = '$nome'
			and quantidade > 0";
			
			$result = $this->db->query($query);
			
			return $result;
		}
	}
}
