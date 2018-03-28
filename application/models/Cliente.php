<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cliente extends CI_Model {

	function listaCliente(){
		$this->db->select('*');
		$this->db->from('cliente');
		return $this->db->get()->result_array();
	}

	function one($id){
		$this->db->select('*');
		$this->db->from('cliente');
		$this->db->where('idCliente', $id);
		return $this->db->get()->row_array();
	}
	function crearCliente($params){
		$this->db->insert('cliente', $params);
		return $this->db->insert_id();
	}


	

}

/* End of file cliente.php */
/* Location: ./application/models/cliente.php */