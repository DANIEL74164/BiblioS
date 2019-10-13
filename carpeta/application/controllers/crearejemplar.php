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
        
        /*$this->form_validation->set_rules('codigo', 'Codigo', 'required');
        $this->form_validation->set_message('is_unique', 'Email already exists.');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[usuario.usua_email]');
        $this->form_validation->set_rules('password', 'Password');*/
        //agregando mas datos 
        /*$this->form_validation->set_rules('codigo','Codigo', 'required');
        $this->form_validation->set_rules('nombres','Nombres', 'required');
        $this->form_validation->set_rules('apellidos','Apellidos', 'required');
        $this->form_validation->set_rules('direccion','Direccion', 'required');
        $this->form_validation->set_rules('usuario','Usuario', 'required');
        $this->form_validation->set_rules('contraseña','Contraseña', 'required');
        $this->form_validation->set_rules('confirmar','confirmar', 'required');
        $this->form_validation->set_rules('email','Email', 'required');
        $this->form_validation->set_rules('telefono','Telefono', 'required');*/
        /*if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url() . 'register');
        } else {*/
            $titulo = $this->input->post('titulo');
            $area = $this->input->post('area');
            $cate = $this->input->post('cate');
            $editorial = $this->input->post('editorial');
            
            $data = [
                'ejem_titulo' => $titulo,
                'ejem_area_id' => $area,
                'ejem_cate_id' => $cate,
                'ejem_editorial' => $editorial];
            

            
            $insert_data = $this->crear->add_ejemplar($data);
            if ($insert_data) {
                //$this->session->set_flashdata('msg', 'Registrado correctamente');
                redirect(base_url() . 'welcomeadmin/ejemplaradmin');
            }

    }
}
 ?>