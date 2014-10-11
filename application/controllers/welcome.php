<?php
    class Welcome extends CI_Controller {

        public function index()
        {
            $data['title'] = 'ECFS 2015 - Edinburgh Charity Fashion Show';
            $data['description'] = 'Edinburgh Charity Fashion Show (ECFS) 2015 - coming soon.';


            /* Get photos from Facebook */
            $this->load->library('facebook');
            $photos = $this->facebook->getPhotos('386828244687495');
            $data['photos'] = $photos;
            $this->load->view('common/header', $data);
            $this->load->view('welcome', $data);
            $this->load->view('common/footer');
        }

    }