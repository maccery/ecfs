<?php
    class Photoshoots extends CI_Controller {

        public function index()
        {
            $this->photos();
        }

        public function view($album_id = NULL)
        {
            $this->photos($album_id);
        }

        private function photos($album_id = NULL)
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
            // print_r($this->facebook->getAlbum($album_id));
            $photos = $this->facebook->getAlbum($album_id);
            foreach ($photos as $photo)
            {
                $photo = $photo->images[0];
                $sources[] = $photo->source;
            }

            $data['sources'] = $sources;
            $data['photos'] = $this->load->view('photoshoots/album', $data, TRUE);

            $data['albums'] = $albums;

            $this->load->view('common/header', $data);
            $this->load->view('photoshoots/index', $data);
            $this->load->view('common/footer');
        }

    }