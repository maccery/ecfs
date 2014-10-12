<?php
    class Events extends CI_Controller {

        public function index()
        {
            $data['title'] = 'ECFS 2015 - Edinburgh Charity Fashion Show';
            $data['description'] = 'Edinburgh Charity Fashion Show (ECFS) 2015 - coming soon.';

            /* Get events from Facebook */
            $this->load->library('facebook');
            $events = $this->facebook->getEvents('386828244687495');

            foreach ($events as $event)
            {
                $event = $this->facebook->getEvent($event->id);
                $event_views[] = $this->load->view('events/event', $event, TRUE);
            }

            $data['event_views'] = $event_views;

            $this->load->view('common/header', $data);
            $this->load->view('events/index', $data);
            $this->load->view('common/footer');
        }

    }