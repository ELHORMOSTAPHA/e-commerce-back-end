<?php
class AuthController extends STA_Controller{
    public function  __construct(){
        parent::__construct();
        $this->load->model('AuthModel','auth');
    }
    public function index(){
        $this->load->view('index');
    }
    public function login()
    {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);

        // check username and password
        $this->db->select('users.id,users.token,users.profile_id,users.username,users.password,users.first_name,users.last_name,users.email,users.phone,profiles.name,profiles.name as role,
        users.concession_id,users.site_id')
            ->join('profiles', 'profiles.id = users.profile_id')
            ->where('username', $username)
            ->where('status', '1');
        $query = $this->db->get('users');

        // check total number results
        $num = $query->num_rows();
        if ($num > 0) {
            $user = $query->first_row();
            if (!password_verify($password, $user->password)) {
                return false;
            } else {
                // user connected successfully
                $this->setLogedUser($user->id);
                $filename =  filterString($user->first_name . '-' . $user->last_name . '-' . $user->id);
                if (file_exists('public/assets/media/users/' . $filename . '-vignette.jpg')) :
                    $user->avatar =  $filename . '-vignette.jpg';
                else :
                    $user->avatar = 'default.jpg';
                endif;
                //create session user
                $this->session->set_userdata('userSession', $user);
                return true;
            }
        } else {
            return false;
        }
    }
    public function test(){
        $this->load->database();
        if ($this->db->conn_id) {
            echo "Database connected successfully!";
        } else {
            echo "Failed to connect database!";
        }
    }
}