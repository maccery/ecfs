<?php
    class Charities extends CI_Controller {

        public function index()
        {
            $data['title'] = 'Charities | ECFS 2015 - Edinburgh Charity Fashion Show';
            $data['description'] = "This year we're supporting two charities: Elephant Family and SAMH.";

            $this->load->view('common/header', $data);
            $this->load->view('charities');
            $this->load->view('common/footer');
        }

    }