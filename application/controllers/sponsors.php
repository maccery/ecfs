<?php
    class Sponsors extends CI_Controller {

        public function index()
        {
            $data['title'] = 'Sponsors | ECFS 2015 - Edinburgh Charity Fashion Show';
            $data['description'] = 'Edinburgh Charity Fashion Show (ECFS) 2015 - coming soon.';

            $this->load->view('common/header', $data);
            $this->load->view('sponsors');
            $this->load->view('common/footer');
        }

    }