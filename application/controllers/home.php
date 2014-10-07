<?php
class Home extends CI_Controller {

    public function index()
    {
        $data['title'] = 'ECFS 2015 - Edinburgh Charity Fashion Show';
        $data['description'] = 'Edinburgh Charity Fashion Show (ECFS) 2015 - coming soon.';

        $this->load->view('common/header', $data);
        $this->load->view('welcome', $data);
        $this->load->view('our_story', $data);
        $this->load->view('events', $data);
        $this->load->view('design', $data);
        $this->load->view('charity', $data);
        $this->load->view('sponsors', $data);
        $this->load->view('teams', $data);
        $this->load->view('common/footer');
    }

}