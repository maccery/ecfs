<?php
    class Photoshoots extends CI_Controller {

        public function index($album_id = NULL)
        {
            $data['title'] = 'ECFS 2015 - Edinburgh Charity Fashion Show';
            $data['description'] = 'Edinburgh Charity Fashion Show (ECFS) 2015 - coming soon.';

            /* Get photo albums from Facebook */
            $this->load->library('facebook');
            $albums = $this->facebook->getAlbums('386828244687495');

            if (!$album_id)
            {
                $album_id = $albums[0]->id;
            }
            print_r($this->facebook->getAlbum($album_id));
            foreach ($photos as $photo)
            {
                $sources[] = $photo->source;
            }

            $data['photos'] = $this->load->view('welcome', $sources, TRUE);

            $data['albums'] = $albums;

            //$this->load->view('common/header', $data);
            ///$this->load->view('photoshoots/index', $data);
            //$this->load->view('common/footer');
        }

    }