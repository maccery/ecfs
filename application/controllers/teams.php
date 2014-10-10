<?php
    class Teams extends CI_Controller {

        public function index()
        {
            $data['title'] = 'ECFS 2015 - Edinburgh Charity Fashion Show';
            $data['description'] = 'Edinburgh Charity Fashion Show (ECFS) 2015 - coming soon.';

            $this->load->view('common/header', $data);
            $this->load->view('teams');
            $this->load->view('common/footer');
        }

    }