<?php
	class Forum extends CI_Controller {
		private $title;
		
		public function __construct() {
			parent::__construct(); //heritage

			$this->title = __CLASS__;
		}

		public function index() {
			$this->accueil();
		}
		public function getTitle() {
			$this->title;
		}

	}