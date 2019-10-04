<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcomeadmin extends MY_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('admin_page');
        $this->load->view('footer');
    }
}