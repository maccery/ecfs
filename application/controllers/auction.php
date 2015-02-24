<?php
    class Auction extends CI_Controller {

        public function index()
        {
            $data['title'] = 'Auction | ECFS 2015 - Edinburgh Charity Fashion Show';

            $this->load->view('common/header', $data);
            $this->load->view('auction/index');
            $this->load->view('common/footer');
        }

        public function bid()
        {

            try
            {
                /* Validate input */
                $this->load->library('form_validation');

                $this->form_validation->set_rules('item-name', 'Item name', 'required');
                $this->form_validation->set_rules('bid-amount', 'Bid amount', 'decimal|required');
                $this->form_validation->set_rules('email', 'Email', 'valid_email|required');

                if ($this->form_validation->run() == FALSE)
                {
                    throw new Exception(validation_errors());
                }

                /* Generate random bid key */
                $key = md5(uniqid(rand(), true));

                $data = array(
                    'item_name' => $this->input->post('item-name'),
                    'email' => $this->input->post('email'),
                    'bid_amount' => $this->input->post('bid_amount'),
                    'key' => $key
                );

                /* Create bid */
                $this->load->model('auction');
                $this->auction->create_bid($data);

                /* Send email confirmation */
                $this->send_confirmation_email($data);

                $this->load->view('auction/bid_success');


            } Catch (Exception $e)
            {
                $this->load->view('auction/bid_failed');
            }
        }

        public function confirm_bid($key)
        {
            try {
                $this->load->model('auction');
                $this->auction->confirm_bid($key);

                $this->load->view('auction/bid_confirmed');
            }
            Catch (Exception $e)
            {
                $this->load->view('auction/bid_confirmed_failed');
            }
        }

        public function do_email($data)
        {
            $this->load->library('email');

            $this->email->from('donotreply@edinburghcharityfashionshow.com', 'ECFS');
            $this->email->to($data['email']);
            $this->email->subject('Confirm Your Bid (ECFS Auction)');
            $this->email->message('Testing the email class.');

            $this->email->send();
        }

    }