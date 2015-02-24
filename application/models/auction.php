<?php
class Auction extends CI_Model {

    public function create_bid($data) {
        $this->db->set($data);
        $this->db->insert('bids');
    }

    public function confirm_bid($key) {
        $this->db->where($key);
        $this->db->set('confirmed', TRUE);
        $this->db->update('bids');
    }

}