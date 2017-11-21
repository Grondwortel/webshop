<?php
class Contact extends CI_Controller {

        public function __construct() {
                parent:: __construct();
                $this->load->model('Contact_model');
        }

        public function index() {
                $this->load->view('templates/header');
                $this->load->view('users/contact');
                $this->load->view('templates/footer');
        }
}