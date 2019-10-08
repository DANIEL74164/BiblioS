<?php
class Register extends CI_Controller {
    public function __construct() {
        parent::__construct(); 
        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);
        $this->load->database();
        $this->load->model('RegisterModel', 'register');
    }
    
    public function index() {
        if ($this->session->userdata('logged_in')) {
            redirect(base_url() . 'welcome');
        }
        $this->load->view('header');
        $this->load->view('register_page');
        $this->load->view('footer');
    }
    
    public function doRegister() {
        
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
            $codigo = $this->input->post('codigo');
            $nombres = $this->input->post('nombres');
            $apellidos = $this->input->post('apellidos');
            $direccion = $this->input->post('direccion');
            $usuario = $this->input->post('usuario');
            $contraseña = $this->input->post('password');
            $email = $this->input->post('email');
            $telefono = $this->input->post('telefono');
            
            $data = [
                'usua_login' => $usuario, 'usua_password' => $contraseña, 'usua_codigo' => $codigo, 'usua_nombres' => $nombres, 'usua_apellidos' => $apellidos, 'usua_direccion' => $direccion, 'usua_email' => $email, 'usua_telefono' => $telefono];
            
            $insert_data = $this->register->add_user($data);
            if ($insert_data) {
                $this->session->set_flashdata('msg', 'Registrado correctamente');
                redirect(base_url() . 'login');
            }
        //}
    }
}