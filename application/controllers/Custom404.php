<?php 
defined('BASEPATH') OR exit('Pas d\'accès directe du script autorisée');
class Custom404 extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->output->set_status_header('404');
        $this->load->view('error404');
    }
}