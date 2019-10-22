<?php
class Editarejemplar extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper("url"); 
        $this->load->model("Editarejemplarmodel");
        $this->load->library("session");
    }
    public function index(){
         
        //array asociativo con la llamada al metodo
        //del modelo
        $usuarios["ver"]=$this->usuarios_model->ver();
         
        //cargo la vista y le paso los datos
        $this->load->view("usuarios_view",$usuarios);
    }
    public function mod($id_usuario){
        if(is_numeric($id_usuario)){
          $datos["mod"]=$this->Editarejemplarmodel->mod($id_usuario);
          $this->load->view('header');
          $this->load->view('admin_page');
          $this->load->view('editarejemplar',$datos);
          $this->load->view('footer'); 


          //$this->load->view("modificar_view",$datos);
          if($this->input->post("submit")){
                $mod=$this->Editarejemplarmodel->mod(
                        $id_usuario,
                        $this->input->post("submit"),
                        $this->input->post("email"),
                        $this->input->post("password"),
                        $this->input->post("nombre"),
                        $this->input->post("apellido")
                        );
                if($mod==true){
                    //Sesion de una sola ejecución
                    $this->session->set_flashdata('correcto', 'Usuario modificado correctamente');
                }else{
                    $this->session->set_flashdata('incorrecto', 'Usuario modificado correctamente');
                }
                redirect(base_url());
            }
        }else{
            redirect(base_url());
        }
    }
    public function eliminar($id){
        if(is_numeric($id)){
          $eliminar=$this->Editarejemplarmodel->eliminar($id);
          if($eliminar==true){
              $this->session->set_flashdata('correcto', 'Usuario eliminado correctamente');
          }else{
              $this->session->set_flashdata('incorrecto', 'Usuario eliminado correctamente');
          }
          redirect(base_url() . 'welcomeadmin/ejemplaradmin');
        }else{
          //redirect(base_url());
        }
    }
}
?>
