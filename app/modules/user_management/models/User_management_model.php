<?php
class User_management_model extends CI_Model
{
    
    public function __construct()
    {
        parent::__construct();
    }
    public function get_all_users($page,$limit,$order_by,$order_type)
    {
        $this->db->order_by($order_by, $order_type);
        $this->db->limit($limit, ($page - 1) * $limit);
        $query = $this->db->get('users');
        return $query->result();
    }
    public function find_users($keyword,$limit,$order_by,$order_type)
    {
        $this->db->like('username', $keyword);
        $this->db->or_like('email', $keyword);
        $query = $this->db->get('users');
        return $query->result();
    }
    public function add_user($data)
    {
        return $this->db->insert('users', $data);
    }
}
