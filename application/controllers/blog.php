<?php
    class Blog extends CI_Controller {

        public function index()
        {
            $data['title'] = 'ECFS 2015 - Edinburgh Charity Fashion Show';
            $data['description'] = 'Edinburgh Charity Fashion Show (ECFS) 2015 - coming soon.';

            $this->load->view('common/blog_header', $data);
            $this->load->view('blog');
            $this->load->view('common/footer');
        }

    }