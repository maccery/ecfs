<?php
    class Team extends CI_Controller {

        public function index()
        {
            $data['title'] = 'Team | ECFS 2015 - Edinburgh Charity Fashion Show';
            $data['description'] = "The ECFS committee is made up of 70 students in Edinburgh. The committee is split into 10 teams and this page shows the area heads. ";

            $team = array(
                'alex', 'ayesha', 'charlotte', 'ed', 'erica', 'immy', 'kate', 'leslie', 'georgie', 'meri', 'mia', 'mylo', 'tabby',
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