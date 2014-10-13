<?php
    class Team extends CI_Controller {

        public function index()
        {
            $data['title'] = 'Team | ECFS 2015 - Edinburgh Charity Fashion Show';
            $data['description'] = 'Edinburgh Charity Fashion Show (ECFS) 2015 - coming soon.';

            $team = array(
                'alex', 'ayesha', 'charlotte', 'ed', 'immy', 'kate', 'leslie', 'georgie', 'meri', 'mia', 'mylo', 'tabby',
                'tom', 'xan'
            );
            /* Randomise team order */
            shuffle($team);
            $data['team'] = $team;

            $this->load->view('common/header', $data);
            $this->load->view('team', $data);
            $this->load->view('common/footer');
        }

    }