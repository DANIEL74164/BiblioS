<?php  
	class Autormodel extends CI_Model{
		public function autor(){
			return $this->db->get('autor');
		}
		public function autores(){
			$this->db->query("SELECT * FROM autor");
			return $result->row();
		}
	}
?>