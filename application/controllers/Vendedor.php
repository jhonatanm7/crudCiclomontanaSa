<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class visitas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Vendedor');
	}

	public function index(){
		$this->load->view('Vendedor/index');
	}

	public function listaVendedor(){
		$campos = $this->Cliente->listaVendedor();
		$jTableResult['Result'] = "OK";
		$jTableResult['Records'] = $campos;
		header("Content-Type: application/json");
		echo json_encode($jTableResult);

	}

	public function insertarVendedor(){
		$idCliente = $this->Vendedor->crearVendedor($_POST);
		if($idCliente==0){
			$jTableResult['Result'] = 'ERROR';
			$jTableResult['Message']= 'No Inserto el registro';
		} else{
			$crearCliente = $this->Vendedor->one($idCliente);
			$jTableResult['Result'] = "OK";
			$jTableResult['Record'] = $crearCliente;	
			$jTableResult['Message']= 'Inserto el registro';	
		}
		header("Content-Type: application/json");
		echo json_encode($jTableResult);
	}

	public function editarVendedor(){
		$idCliente = $_POST['idCliente'];
		unset($_POST['idCliente']);
		$estado = $this->Vendedor->editarVendedor($idVendedor, $_POST);
		if($estado){
			$crearCliente = $this->Vendedor->one($idVendedor);
			$jTableResult['Result'] = "OK";
			$jTableResult['Record'] = $crearVendedor;
		}else{
			$jTableResult['Result'] = 'ERROR';
			$jTableResult['Message']= 'No se actualizo el registro';
		}
		header("Content-Type: application/json");
		echo json_encode($jTableResult);		
	}
	public function eliminarVendedor(){
		$estado = $this->Vendedor->eliminarVendedor($_POST['idVendedor']);
		if($estado){
			$jTableResult['Result'] = "OK";
		}else{
			$jTableResult['Result'] = 'ERROR';
			$jTableResult['Message']= 'No se elimino el registro';
		}
		header("Content-Type: application/json");
		echo json_encode($jTableResult);	
	}	

}

/* End of file visitas */
/* Location: ./application/controllers/visitas */