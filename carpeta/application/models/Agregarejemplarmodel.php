<?php
class Agregarejemplarmodel extends CI_Model{
    public function add_ejemplar($data){
        return $this->db->insert('ejemplar', $data);
    }
}
?>