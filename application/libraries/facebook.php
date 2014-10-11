<?php
    require_once('autoload.php');

    use Facebook\FacebookSession;
    use Facebook\FacebookRequest;
    use Facebook\GraphUser;
    use Facebook\FacebookRequestException;

    class Facebook {

        var $session;

        public function __construct() {
            FacebookSession::setDefaultApplication('1496735900589861','a39e53de5022e9891bb5017e15add23f');

            $access_token = str_replace('access_token=', '', file_get_contents('https://graph.facebook.com/oauth/access_token?client_id=1496735900589861&client_secret=a39e53de5022e9891bb5017e15add23f&%20grant_type=client_credentials'));
            $this->session = new FacebookSession($access_token);
        }

        public function getEvents($page_id)
        {
            $request = new FacebookRequest(
                $this->session,
                'GET',
                '/' . $page_id . '/events'
            );
            $response = $request->execute();
            $graphObject = $response->getGraphObject();

            return $graphObject->getProperty('data')->asArray();
        }

        public function getEvent($events_id)
        {
            $request = new FacebookRequest(
                $this->session,
                'GET',
                '/' . $events_id
            );
            $response = $request->execute();
            $graphObject = $response->getGraphObject();

            return $graphObject->asArray();
        }


        public function getPhotos($page_id)
        {
            $request = new FacebookRequest(
                $this->session,
                'GET',
                '/' . $page_id . '/photos/uploaded'
            );
            $response = $request->execute();
            $graphObject = $response->getGraphObject();

            return $graphObject->getProperty('data')->asArray();
        }

    }