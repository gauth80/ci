<?php
	class News extends Ci_Controller {

		public function __construct() {
			parent::__construct();
		}
		public function index() {
			$this->accueil();
		}
		public function accueil() {
			$data = array();
			$data['pseudo'] = "onsenfou";
			$data['email'] = "onsenfou@wanado.be";
			$data['online'] = TRUE; 


			$this->load->view("views/lavue");
		}
	}