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
			$crearCliente = $this->Cliente->one($id);
			$jTableResult['Result'] = 'OK';
			$jTableResult['record']= $crearCliente;			
		}
		header("Content-Type: application/json");
		echo json_encode($jTableResult);
	}	

}

/* End of file visitas */
/* Location: ./application/controllers/visitas */