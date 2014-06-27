<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Home extends CI_Controller {

        public function index()
        {
            $data['title'] = 'ECFS 2015';
            $data['description'] = 'ECFS 2015 - coming soon.';

            $this->load->view('common/header', $data);
            $this->load->view('home');
            $this->load->view('common/footer');
        }
    }