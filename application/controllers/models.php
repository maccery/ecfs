<?php
class Models extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Photoshoots | ECFS 2015 - Edinburgh Charity Fashion Show';
        $data['description'] = "See the latest photoshoots taken by our team of photographers.";

        /* Get photo albums from Facebook */
        $this->load->library('facebook');
        $photos = $this->facebook->getAlbum(762219557148360);
        foreach ($photos as $photo)
        {
            $photo = $photo->images[0];
            $sources[] = $photo->source;
        }

        $data['sources'] = $sources;
        $data['photos'] = $this->load->view('photoshoots/lightbox', $data, TRUE);

        $this->load->view('common/header', $data);
        $this->load->view('models/index', $data);
        $this->load->view('common/footer');
    }

}