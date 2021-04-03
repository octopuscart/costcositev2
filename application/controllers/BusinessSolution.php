<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BusinessSolution extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    function company_formation() {
        $this->load->view('BusinessSolution/company_formation');
    }

    function secretarial_service() {
        $this->load->view('BusinessSolution/secretarial_service');
    }

    function taxation() {
        $this->load->view('BusinessSolution/taxation');
    }
    function taxation() {
        $this->load->view('BusinessSolution/taxation');
    }

}
