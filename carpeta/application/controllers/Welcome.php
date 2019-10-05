<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model("Portadamodel");
	}
    public function index() {
        $this->load->view('header');
        $this->load->view('usuario_page');
        $this->load->view('inicio');
        $this->load->view('footer');
    }
    public function portada() {
    	$result = $this->db->get('ejemplar');
    	$dato = array('consulta' => $result);
        $this->load->view('header');
        $this->load->view('usuario_page');
        $this->load->view('portada',$dato);
        $this->load->view('footer'); 
    }
    public function buscarlibro() {
        $this->load->view('header');
        $this->load->view('usuario_page');
        $this->load->view('portada');
        $this->load->view('footer');
    }
    public function prestados() {
        $this->load->view('header');
        $this->load->view('usuario_page');
        $this->load->view('portada');
        $this->load->view('footer');
    }
    public function favoritos() {
        $this->load->view('header');
        $this->load->view('usuario_page');
        $this->load->view('portada');
        $this->load->view('footer');
    }
}