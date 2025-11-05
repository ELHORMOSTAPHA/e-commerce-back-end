<?php
class AuthModel extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    // public function getUsers(){
    //     $query = $this->db->get('users');
    //     return $query->result();
    // }
    public function login()
    {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
        // check username and password
        $this->db->select('users.id,users.role_id,users.status,users.password,users.first_name,users.last_name,users.email,users.phone,roles.id,roles.name as role')
            ->join('roles', 'roles.id = users.role_id')
            ->where('email', $username)
            ->where('status', '1');
        $query = $this->db->get('users');
        // check total number results
        $num = $query->num_rows();
        if ($num > 0) {
            $user = $query->first_row();
            if (!password_verify($password, $user->password)) {
                return false;
            } else {
                //create session user
                // Remove password from user object before storing in session for security
                // unset($user->password);
                $this->session->set_userdata('userSession', $user);
                return true;
            }
        } else {
            return false;
        }
    }
}
?>