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
        $query = "SELECT * from items, items_images WHERE items_images.items_id = items.id GROUP BY items.id";
        return $this->db->query($query)->result();
    }

    public function get_item($id) {
        $this->db->where('id', $id);
        return $this->db->get('items')->row();
    }

    public function get_images($items_id) {
        $this->db->where('items_id', $items_id);

        return $this->db->get('items_images')->result();
    }

    public function get_bid($key) {
        $this->db->where('key', $key);
        return $this->db->get('bids')->row();
    }

}