<?php
    class Welcome extends CI_Controller {

        public function index()
        {
            $data['title'] = 'ECFS 2015 - Edinburgh Charity Fashion Show';
            $data['description'] = 'Edinburgh Charity Fashion Show (ECFS) 2015.';


            /* Get photos from Facebook */
            $this->load->library('facebook');
            $photos = $this->facebook->getAlbum('737865236250459');
            foreach ($photos as $photo)
            {
                $photo = $photo->images[0];
                $sources[] = $photo->source;
            }

            $data['sources'] = $sources;
            $this->load->view('common/header', $data);
            $data['photos'] = $this->load->view('photoshoots/album', $data);
            $this->load->view('common/footer');
        }

    }