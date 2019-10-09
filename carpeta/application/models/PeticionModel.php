<?php  

	class Peticionmodel extends CI_Model{
		public function peticion(){
			return $this->db->get('peticion');
		}
		public function peticiondelibros(){
			$this->db->query("SELECT * FROM peticion");
			return $result->row();
		}
	}
?>