<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Opciones extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();
        $this->load->helper('html');
        $this->load->helper('url');

	}
}