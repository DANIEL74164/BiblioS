<?php
class Agregarautormodel extends CI_Model{
    public function add_autor($data){
        return $this->db->insert('autor', $data);
    }
}
?>