<?php 
	class Crearautor extends CI_Controller {
    public function __construct() {
        parent::__construct(); 
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('AgregarautorModel', 'crear');
    }
    public function index() {
        $this->load->view('header');
        $this->load->view('admin_page');
        $this->load->view('crearautoradmin');
        $this->load->view('footer');
    }
     public function Crear() {
            $nombres = $this->input->post('nombre');
            $apellidos = $this->input->post('apellidos');
            $biografia = $this->input->post('biografia');
           
            $data = [
                'auto_nombres' => $nombres,
                'auto_apellidos' => $apellidos,
                'auto_biografia' => $biografia,
            ];
            

            $insert_data = $this->crear->add_autor($data);
            if ($insert_data) {
                redirect(base_url() . 'welcomeadmin/autor');
            }

    }
}
 ?>