<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendedor extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('vendedores_model');
	}

	public function index(){
		$this->load->view('vendedor/index');
	}

	public function listaVendedor(){
		$campos = $this->vendedores_model->listaVendedor();
		$jTableResult['Result'] = "OK";
		$jTableResult['Records'] = $campos;
		header("Content-Type: application/json");
		echo json_encode($jTableResult);

	}

	public function insertarVendedor(){
		$idVendedor = $this->vendedores_model->crearVendedor($_POST);
		if($idVendedor==0){
			$jTableResult['Result'] = 'ERROR';
			$jTableResult['Message']= 'No Inserto el registro';
		} else{
			$crearVendedor = $this->vendedores_model->one($idVendedor);
			$jTableResult['Result'] = "OK";
			$jTableResult['Record'] = $crearVendedor;	
			$jTableResult['Message']= 'Inserto el registro';	
		}
		header("Content-Type: application/json");
		echo json_encode($jTableResult);
	}

	public function editarVendedor(){
		$idVendedor = $_POST['idVendedor'];
		unset($_POST['idVendedor']);
		$estado = $this->vendedores_model->editarVendedor($idVendedor, $_POST);
		if($estado){
			$crearVendedor = $this->vendedores_model->one($idVendedor);
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
		$estado = $this->vendedores_model->eliminarVendedor($_POST['idVendedor']);
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