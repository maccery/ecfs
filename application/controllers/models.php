<?php
class Models extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Models | ECFS 2015 - Edinburgh Charity Fashion Show';
        $data['description'] = "Models of this year's Edinburgh Charity Fashion Show.";

        /* Get photo albums from Facebook */
        $this->load->library('facebook');
        $photos = $this->facebook->getAlbum(762219557148360);
        foreach ($photos as $photo)
        {
            $photo = $photo->images[0];
            $sources[] = $photo->source;
        }

        $data['sources'] = $sources;
        shuffle($sources);
        $data['random_model'] = $sources[0];
        $data['photos'] = $this->load->view('photoshoots/lightbox', $data, TRUE);

        $this->load->view('common/header', $data);
        $this->load->view('models/index', $data);
        $this->load->view('common/footer');
    }

}