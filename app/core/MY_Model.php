<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

    protected $table;

    public function __construct() {
        parent::__construct();
    }

    public function insert($data) {
        $this->db->insert($this->table, $data);
		return $this->db->insert_id();
    }

    public function update($data, $where) {
        $this->db->where($where);
        return $this->db->update($this->table, $data);
    }

    public function delete($where) {
        $this->db->where($where);
        return $this->db->delete($this->table);
    }

    public function get_all() {
        return $this->db->get($this->table)->result();
    }

    public function get($where) {
        $this->db->where($where);
        return $this->db->get($this->table)->row();
    }
	
	public function get_all_where($where) {
        $this->db->where($where);
        return $this->db->get($this->table)->result();
    }

}
