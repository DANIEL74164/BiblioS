<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcomeadmin extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model("Portadamodel");
		$this->load->model("PeticionModel");
        $this->load->model("AutorModel");
        $this->load->model('DatosModel');
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->library(['form_validation','session']);

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
    public function autor() {
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


    function about()
  {
    if($this->session->userdata('usua_esadmin')==1){
    $this->load->view('header');
    $this->load->view('footer'); 
    $this->load->view('admin_page');
    $obtener_usuario_id =  $this->session->userdata('usua_id');
    $data['usuarioInfo'] = $this->DatosModel->obtener_usuario_por_id($obtener_usuario_id);
    
    
    $this->form_validation->set_rules('usua_nombres', 'Nombres', 'trim|required');
    $this->form_validation->set_rules('usua_apellidos', 'Apellidos', 'trim|required');
    $this->form_validation->set_rules('usua_direccion', 'Direccion', 'trim|required');
    $this->form_validation->set_rules('usua_email', 'E-mail', 'trim|required');
    $this->form_validation->set_rules('usua_telefono', 'Telefono', 'trim|required');
    $this->form_validation->set_rules('usua_password', 'Contrasenia', 'trim|required');
    $this->form_validation->set_rules('usua_reppassword', 'Confirma contrasenia', 'trim|required');
    
    $this->form_validation->set_error_delimiters('<div class="col-md-6 col-md-offset-3"><div class="alert alert-danger alert-dismissible fade show" role="alert">','</div></div>');
    
    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('info_user',$data);
          $this->load->view('footer');
    }
    else
    {
      $usua_nombres = $this->security->xss_clean($this->input->post('usua_nombres'));
      $usua_apellidos = $this->security->xss_clean($this->input->post('usua_apellidos'));
      $usua_direccion = $this->security->xss_clean($this->input->post('usua_direccion'));
      $usua_email = $this->security->xss_clean($this->input->post('usua_email'));
      $usua_telefono = $this->security->xss_clean($this->input->post('usua_telefono'));
      $usua_password = $this->security->xss_clean(md5($this->input->post('usua_password')));
      $usua_reppassword = $this->security->xss_clean(md5($this->input->post('usua_reppassword')));
      
      if (md5($usua_password)==md5($usua_reppassword) && md5($usua_password)==($this->session->userdata('usua_password'))) {
           $updateData = array('usua_nombres'=>$usua_nombres,
                'usua_apellidos'=>$usua_apellidos,
                'usua_direccion'=>$usua_direccion,
                'usua_email'=>$usua_email,
                'usua_telefono'=>$usua_telefono,
                'usua_password'=>($usua_password),
              );
      $update = $this->DatosModel->actualizar_usuario($updateData, $obtener_usuario_id);
      
      if($update)
      {
        $this->session->set_flashdata('successMsg', 'El usuario ha sido actualizado correctamente');
        redirect('Welcomeadmin/about/'.$obtener_usuario_id);
      }

      }
      else 
      {
        $data['errorMsg'] = 'Error al actualizar, intente de nuevo.';
        $this->load->view('info_user',$data);
      }

    } 
    }else{
      $this->acceso_denegado();
    }
  }
    public function acceso_denegado()
  {
    $this->load->view('header');
    $this->load->view('acceso_denegado_view');
    $this->load->view('footer');
 
  }
  




}