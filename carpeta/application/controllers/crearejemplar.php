<?php 
	class Crearejemplar extends CI_Controller {
    public function __construct() {
        parent::__construct(); 
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('AgregarejemplarModel', 'crear');
    }
    public function index() {
        $this->load->view('header');
        $this->load->view('admin_page');
        $this->load->view('crearejemplaradmin');
        $this->load->view('footer');
    }
     public function Crear() {
            $titulo = $this->input->post('titulo');
            $editorial = $this->input->post('editorial');
            $paginas = $this->input->post('paginas');
            $isbn = $this->input->post('isbn');
            $idioma = $this->input->post('idioma');
            $portada = $this->input->post('portada');
            $digital = $this->input->post('digital');
            $audio = $this->input->post('audio');
            $resumen = $this->input->post('resumen');
            $tipo = $this->input->post('tipo');
            $categoria = $this->input->post('categoria');
            $date = $this->input->post('date');
           
            $data = [
                'ejem_titulo' => $titulo,
                'ejem_editorial' => $editorial,
                'ejem_paginas' => $paginas,
                'ejem_isbn' => $isbn,
                'ejem_idioma' => $idioma,
                'ejem_portada' => $portada,
                'ejem_digital' => $digital,
                'ejem_audio' => $audio,
                'ejem_resumen' => $resumen,
                'ejem_tipo_id' => $tipo,
                'ejem_cate_id' => $categoria,
                'ejem_anio' => $date
            ];
            

            $insert_data = $this->crear->add_ejemplar($data);
            if ($insert_data) {
                redirect(base_url() . 'welcomeadmin/ejemplaradmin');
            }

    }
}
 ?>