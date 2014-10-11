<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lol extends CI_Controller {

	public function index() {
        $this->load->library('facebook');

        print_r($this->facebook->getEvents('386828244687495'));

    }
}

