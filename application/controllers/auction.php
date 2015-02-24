<?php
    class Auction extends CI_Controller {

        public function index()
        {
            $data['title'] = 'Auction | ECFS 2015 - Edinburgh Charity Fashion Show';
            $data['description'] = 'Auction | ECFS 2015 - Edinburgh Charity Fashion Show';

            $this->load->view('common/header', $data);

            $this->load->model('auction_model');
            $items = $this->auction_model->get_items();

            $this->load->view('auction/index', array('items' => $items));
            $this->load->view('common/footer');
        }

        public function bid($id)
        {
            $data['title'] = 'Auction | ECFS 2015 - Edinburgh Charity Fashion Show';
            $data['description'] = 'Auction | ECFS 2015 - Edinburgh Charity Fashion Show';

            $this->load->view('common/header', $data);

            $this->load->model('auction_model');
            $item = $this->auction_model->get_item($id);

            if (!$item)
            {
                $this->load->helper('url_helper');
                redirect('/auction');
            }

            $this->load->view('auction/bid', $item);
            $this->load->view('common/footer');
        }

        public function do_bid()
        {
            $data['title'] = 'Auction | ECFS 2015 - Edinburgh Charity Fashion Show';
            $data['description'] = 'Auction | ECFS 2015 - Edinburgh Charity Fashion Show';

            try
            {
                /* Validate input */
                $this->load->library('form_validation');

                $this->form_validation->set_rules('items-id', 'Item', 'int|required');
                $this->form_validation->set_rules('bid-amount', 'Bid amount', 'decimal|required');
                $this->form_validation->set_rules('email', 'Email', 'valid_email|required');

                if ($this->form_validation->run() == FALSE)
                {
                    throw new Exception(validation_errors());
                }

                /* Generate random bid key */
                $key = md5(uniqid(rand(), true));

                $data = array(
                    'items_id' => $this->input->post('items-id'),
                    'email' => $this->input->post('email'),
                    'bid_amount' => $this->input->post('bid-amount'),
                    'key' => $key,
                    'timestamp' => time()
                );

                /* Create bid */
                $this->load->model('auction_model');
                $this->auction_model->create_bid($data);

                /* Send email confirmation */
                $this->send_confirmation_email($data);

                $this->load->view('common/header', $data);
                $this->load->view('auction/bid_success');


            } Catch (Exception $e)
            {

                $this->load->view('common/header', $data);
                $this->load->view('auction/bid_failed', array('message' => $e->getMessage()));
                $this->load->view('common/footer');
            }
        }

        public function confirm_bid($key)
        {
            $data['title'] = 'Auction | ECFS 2015 - Edinburgh Charity Fashion Show';
            $data['description'] = 'Auction | ECFS 2015 - Edinburgh Charity Fashion Show';

            try {
                $this->load->model('auction_model');
                /* Check key */
                $bid = $this->auction_model->get_bid($key);

                if (!$bid) {
                    throw new Exception();
                }

                $this->auction_model->confirm_bid($key);

                $this->load->view('common/header', $data);
                $this->load->view('auction/bid_confirmed');
                $this->load->view('common/footer');
            }
            Catch (Exception $e)
            {
                $this->load->view('common/header', $data);
                $this->load->view('auction/bid_confirmed_failed');
                $this->load->view('common/footer');
            }
        }

        private function send_confirmation_email($data)
        {
            $this->load->library('email');

            $this->email->from('donotreply@edinburghcharityfashionshow.com', 'ECFS');
            $this->email->to($data['email']);
            $this->email->subject('Confirm Your Bid (ECFS Auction)');

            $message = "Confirm your bid by going to: http://edinburghcharityfashionshow.org/auction/confirm-bid/" . $data['key'];
            $this->email->message($message);

            $this->email->send();
        }

    }