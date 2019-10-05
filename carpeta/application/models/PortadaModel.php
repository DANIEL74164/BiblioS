<?php  

	class Portadamodel extends CI_Model{
		public function ejemplar(){
			return $this->db->get('ejemplar');
		}
		public function ejemplardatos(){
			$this->db->query("SELECT * FROM ejemplar");
			return $result->row();
		}
	}
?>