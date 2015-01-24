<?php

    class Video extends CI_Controller
    {

        public function index()
        {
            $data['title'] = 'Video | ECFS 2015 - Edinburgh Charity Fashion Show';
            $data['description'] = "The Edinburgh Charity Fashion Show (ECFS) is back for 2015...and its back bigger, brighter and bolder than ever. With a fantastic team working hard, ECFS 2015 will be the best year yet and the show promises to be another exciting, unmissable event.";

            $this->load->view('common/header', $data);
            $this->load->view('video/index');
            $this->load->view('common/footer');
        }

    }