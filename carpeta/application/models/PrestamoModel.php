<?php  

	class Prestamomodel extends CI_Model{
		public function prestamo(){
			return $this->db->get('prestamo');
		}
		public function librosprestados(){
			$this->db->query("SELECT * FROM prestamo");
			return $result->row();
		}
	}
?>