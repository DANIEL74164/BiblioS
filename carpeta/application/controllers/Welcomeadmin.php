<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcomeadmin extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model("Portadamodel");
		$this->load->model("PeticionModel");
        $this->load->model("AutorModel");
        $this->load->helper('html');
        $this->load->helper('url');

	}

    public function index() {
        $this->load->view('header');
        $this->load->view('admin_page');
        $this->load->view('inicio_admin');
        $this->load->view('footer');
    }
    public function vistageneral() {
        $result = $this->db->get('ejemplar');
        $dato = array('consulta' => $result);
        $this->load->view('header');
        $this->load->view('admin_page');
        $this->load->view('vistageneral',$dato);
        $this->load->view('footer'); 
    }

    public function ejemplaradmin() {
        $result = $this->db->get('ejemplar');
        $dato = array('consulta' => $result);
        $this->load->view('header');
        $this->load->view('admin_page');
        $this->load->view('ejemplaradmin',$dato);
        $this->load->view('footer'); 
    }
    public function autores() {
        $result = $this->db->get('autor');
        $dato = array('consulta' => $result);
        $this->load->view('header');
        $this->load->view('admin_page');
        $this->load->view('autor',$dato);
        $this->load->view('footer'); 
    }

    public function peticionesdelibros() {
        $result = $this->db->get('peticion');
        $dato = array('consulta' => $result);
        $this->load->view('header');
        $this->load->view('admin_page');
        $this->load->view('peticionesdelibros',$dato);
        $this->load->view('footer'); 
    }
    public function librosprestados() {
        $result = $this->db->get('prestamo');
        $dato = array('consulta' => $result);
        $this->load->view('header');
        $this->load->view('admin_page');
        $this->load->view('librosprestados',$dato);
        $this->load->view('footer'); 
    }
    public function reportes() {
        /*$result = $this->db->get('prestamo');
        $dato = array('consulta' => $result);*/
        $this->load->view('header');
        $this->load->view('admin_page');
        $this->load->view('reportes',/*$dato*/);
        $this->load->view('footer'); 
    }




}