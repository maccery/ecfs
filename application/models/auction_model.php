<?php
class Auction_model extends CI_Model {

    public function __construct() {
        $this->load->database('auction');
    }

    public function create_bid($data) {
        $this->db->set($data);
        $this->db->insert('bids');
    }

    public function confirm_bid($key) {
        $this->db->where('key', $key);
        $this->db->set('confirmed', TRUE);
        $this->db->update('bids');
    }

    public function get_items() {
        $this->db->order_by('item_name', 'asc');
        return $this->db->get('items')->result();
    }

    public function get_item($id) {
        $this->db->where('id', $id);
        return $this->db->get('items')->row();
    }

    public function get_bid($key) {
        $this->db->where('key', $key);
        return $this->db->get('bids')->row();
    }

}