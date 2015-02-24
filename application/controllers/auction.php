<?php
    class Auction extends CI_Controller {

        public function index()
        {
            $data['title'] = 'Auction | ECFS 2015 - Edinburgh Charity Fashion Show';

            $this->load->view('common/header', $data);
            $this->load->view('charities');
            $this->load->view('common/footer');
        }

        public function do_email()
        {
            $this->load->library('email');

            $this->email->from('donotreply@edinburghcharityfashionshow.com', 'ECFS');
            $this->email->to('tommacmichael@me.com');
            $this->email->subject('Email Test');
            $this->email->message('Testing the email class.');

            $this->email->send();
        }

    }