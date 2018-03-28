<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class visitas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Cliente');
	}

	public function index(){
		$this->load->view('cliente/index');
	}

	public function listaCliente(){
		$campos = $this->Cliente->listaCliente();
		$jTableResult['Result'] = "OK";
		$jTableResult['Records'] = $campos;
		header("Content-Type: application/json");
		echo json_encode($jTableResult);

	}

	public function insertarCliente(){
		$idCliente = $this->Cliente->crearCliente($_POST);
		if($idCliente==0){
			$jTableResult['Result'] = 'ERROR';
			$jTableResult['Message']= 'No Inserto el registro';
		} else{
			$crearCliente = $this->Cliente->one($idCliente);
			$jTableResult['Result'] = "OK";
			$jTableResult['Record'] = $crearCliente;	
			$jTableResult['Message']= 'Inserto el registro';	
		}
		header("Content-Type: application/json");
		echo json_encode($jTableResult);
	}

	public function editarCliente(){
		$idCliente = $_POST['idCliente'];
		unset($_POST['idCliente']);
		$estado = $this->Cliente->editarCliente($idCliente, $_POST);
		if($estado){
			$crearCliente = $this->Cliente->one($idCliente);
			$jTableResult['Result'] = "OK";
			$jTableResult['Record'] = $crearCliente;
		}else{
			$jTableResult['Result'] = 'ERROR';
			$jTableResult['Message']= 'No se actualizo el registro';
		}
		header("Content-Type: application/json");
		echo json_encode($jTableResult);
		
	}	

}

/* End of file visitas */
/* Location: ./application/controllers/visitas */