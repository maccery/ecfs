<?php
class Our_story extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Our Story | ECFS 2015 - Edinburgh Charity Fashion Show';
        $data['description'] = 'Edinburgh Charity Fashion Show (ECFS) 2015 - coming soon.';

        $this->load->view('common/header', $data);
        $this->load->view('our_story');
        $this->load->view('common/footer');
    }

}