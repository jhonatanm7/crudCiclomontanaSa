<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class visitas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('cliente');
	}

	public function index(){
		$this->load->view('cliente/index');
	}

	public function list(){
		$campos=$this->cliente->list();
		
	}


}

/* End of file visitas */
/* Location: ./application/controllers/visitas */