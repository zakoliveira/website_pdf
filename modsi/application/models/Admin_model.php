<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function insertUser($username, $password, $nome, $apelido, $tipo) {
    	$this->db->where('username', $username);
    	$result = $this->db->get('utilizadores');
    		
    	if ( $result->num_rows() > 0 ) {
    		$msg = "Já existe um utilizador com esse username.";
    		return $msg;
    	}
    	$insert_user = array (
    			'username' => $username,
    			'password' => $password,
    			'nome' => $nome,
    			'apelido' => $apelido,
    			'admin' => $tipo
    	);
    	$insert_status = $this->db->insert('utilizadores', $insert_user);
    	return $insert_status;
    }

	function listar () {
		$result = $this->db->get('utilizadores')
						  ->result();
		$user_array = array();
		foreach ($result as $id => $user){
			if ($user->admin == 1) {
				$user->admin = "Administrador";
			} else {
				$user->admin = "Simples";
			}
			$user_array[$id] = array(
					'nome' => $user->nome,
					'apelido' => $user->apelido, 
					'username' => $user->username,
					'admin' => $user->admin
			);
		}
		return $user_array;
	}
	
	function apagarUser ($username) {
		$query = $this->db->delete('utilizadores', array('username' => $username));
		return $query;
	}
	
	function get_username($id) {
		$username = $this->db->select('concat(nome, " ", apelido) as username')
		->from('utilizadores')
		->where('id', $id)
		->get();
		
		if ($username) {
			return $username->row();
		} else
			return false;
	}
	
	function requisicoes ($id) {
		$requis = $this->db->select('nome, qtd, data')
		->from('requisicoes')
		->where('id_utilizador', $id)
		->get();
		
		if ($requis) {
			return $requis->result();
		} else
			return false;
	}
}
