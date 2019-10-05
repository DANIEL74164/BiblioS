<?php
class LoginModel extends CI_Model {
    public function checkLogin($usuario, $contraseña) {
        $this->db->where('usua_login', $usuario);
        $this->db->where('usua_password', $contraseña);
       
        $query = $this->db->get('usuario');
        return $query->num_rows();
    }
public function esadminLogin($admin){
 $this->db->where('usua_esadmin', $admin);
   $query = $this->db->get('usuario');
        return $query->num_rows();
    }
}
