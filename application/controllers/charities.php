<?php
    class Charities extends CI_Controller {

        public function index()
        {
            $data['title'] = 'Charities | ECFS 2015 - Edinburgh Charity Fashion Show';
            $data['description'] = 'Edinburgh Charity Fashion Show (ECFS) 2015 - coming soon.';

            $this->load->view('common/header', $data);
            $this->load->view('charities');
            $this->load->view('common/footer');
        }

    }