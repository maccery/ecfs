<?php
    class Events extends CI_Controller {

        public function index()
        {
            $data['title'] = 'Events | ECFS 2015 - Edinburgh Charity Fashion Show';
            $data['description'] = "Find out all the latest upcoming ECFS events.";

            /* Get events from Facebook */
            $this->load->library('facebook');
            $events = $this->facebook->getEvents('386828244687495');

            foreach ($events as $event)
            {
                $event = $this->facebook->getEvent($event->id);
                $event['start_time'] = date('l NS F Y H:i', strtotime($event['start_time']));
                $event['end_time'] = date('l NS F Y H:i', strtotime($event['end_time']));
                $event_views[] = $this->load->view('events/event', $event, TRUE);
            }

            $data['event_views'] = $event_views;

            $this->load->view('common/header', $data);
            $this->load->view('events/index', $data);
            $this->load->view('common/footer');
        }

    }