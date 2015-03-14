<?php
    class Auction extends CI_Controller {

        public function index()
        {
            $data['title'] = 'Auction | ECFS 2015 - Edinburgh Charity Fashion Show';
            $data['description'] = 'Auction | ECFS 2015 - Edinburgh Charity Fashion Show';

            $this->load->view('common/header', $data);

            $this->load->view('auction/done');
            $this->load->view('common/footer');
        }



    }