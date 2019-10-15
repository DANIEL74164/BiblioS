<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatosModel extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	function obtener_tabla_usuario()
	{
		$this->db->select('*');
		$qry = $this->db->get('usuario');
		$rs = $qry->result_array();
		
		return $rs;
	}
	function obtener_usuario_por_id($id)
	{
		$this->db->select('*');
		$this->db->like('usua_id', $id);
		$qry = $this->db->get('usuario');
		$rs = $qry->result_array();
		return $rs[0];
	}
	
	function actualizar_usuario($data,$id)
	{
		if($this->db->update('usuario', $data, 'usua_id = '.$id))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}	