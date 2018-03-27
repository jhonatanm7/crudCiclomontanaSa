<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cliente extends CI_Model {

	function listaCliente(){
		$this->db->select('*');
		$this->db->from('cliente');
		return $this->db->get()->result_array();
	}

	

}

/* End of file cliente.php */
/* Location: ./application/models/cliente.php */