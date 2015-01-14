<?php
    class Events extends CI_Controller {

        public function index()
        {
            $data['title'] = 'Events | ECFS 2015 - Edinburgh Charity Fashion Show';
            $data['description'] = "Find out all the latest upcoming ECFS events.";

            $this->load->view('common/header', $data);
            try {

                /* Get events from Facebook */
                $this->load->library('facebook');

                $events = $this->facebook->getEvents('386828244687495');

                $event_views = NULL;
                foreach ($events as $event)
                {
                    $fb_event = $this->facebook->getEvent($event->id);

                    $event = array(
                        'start_time' => '',
                        'end_time' => '',
                        'location' => '',
                        'description' => '',
                        'id' => '',
                        'name' => ''
                    );
                    
                    $event['start_time'] = date('l dS F Y H:i', strtotime($fb_event['start_time']));
                    if (array_key_exists('end_time', $fb_event))
                    {
                        $event['end_time'] = date('l dS F Y H:i', strtotime($fb_event['end_time']));
                    }
                    if (array_key_exists('location', $fb_event))
                    {
                        $event['location'] = $fb_event['location'];
                    }
                    if (array_key_exists('name', $fb_event))
                    {
                        $event['name'] = str_replace('//', '', $fb_event['name']);
                    }
                    $event_views[] = $this->load->view('events/event', $event, TRUE);
                }

                $data['event_views'] = $event_views;
                $this->load->view('events/index', $data);

            }

            catch (Exception $e)
            {
                $this->load->view('common/error');
            }

            $this->load->view('common/footer');
        }

    }