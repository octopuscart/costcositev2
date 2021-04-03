<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ItSolutions extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }


    function artificial_intelligence() {
        $this->load->view('ItSolutions/artificial_intelligence');
    }

}
