<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requisicoes_model extends CI_Model
{

	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function insert_requisicao($id_utilizador, $nome, $qtd) {
		$data = array(
				'id_utilizador' => $id_utilizador,
				'nome' => $nome,
				'qtd' => $qtd,
				'data' => date("Y-m-d H:i:s")
		);
		
		$req_existe = $this->db->select('nome')->where('id_utilizador', $id_utilizador)->where('nome', $nome)->get('requisicoes')->result();
		
		if ($req_existe) {
			$update = "UPDATE requisicoes SET qtd=qtd+'".$qtd."' WHERE nome='".$nome."'";
		
			$insert = $this->db->query($update);
			return $insert;
		}
		$insert = $this->db->insert('requisicoes', $data);
		return $insert;
	}
	
	function lista_requisicao() {
		$output = $this->db->select('concat(u.nome, " ", u.apelido) as nome, r.qtd, r.data, u.username')
		->from('requisicoes as r')
		->join('utilizadores as u', 'u.id=r.id_utilizador')
		->get()->result();
		
		return $output;
	}

}
