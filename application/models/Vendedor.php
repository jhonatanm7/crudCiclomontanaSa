<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class cliente extends CI_Model {
	function listaVendedor(){
		$this->db->select('*');
		$this->db->from('vendedor');
		return $this->db->get()->result_array();
	}
	function one($idVendedor){
		$this->db->select('*');
		$this->db->from('vendedor');
		$this->db->where('idVendedor', $idVendedor);
		return $this->db->get()->row_array();
	}
	function crearVendedor($params){
		$this->db->insert('vendedor', $params);
		return $this->db->insert_id();
	}
	function editarVendedor($idVendedor, $params){
		$this->db->where('idVendedor', $idVendedor);
		return $this->db->update('vendedor', $params);

	}
	function eliminarVendedor($idVendedor){
		$this->db->where('idVendedor',$idVendedor);
		return $this->db->delete('vendedor');
	}

}

/* End of file cliente.php */
/* Location: ./application/models/cliente.php */