<?php
class AuthController extends STA_Controller{
    public function  __construct(){
        parent::__construct();
        $this->load->model('AuthModel','auth');
    }
    public function index()
    {
        if ($this->session->userSession) {
            return redirect(base_url() . "dashboard", 'location', 301);
        }
        //echo password_hash('ass919', PASSWORD_DEFAULT),
        $data['jsOutput'] = "";
        $this->load->view("index", $data);
    }
    public function login()
    {
        if ($this->input->post(NULL, TRUE)) {
            $username = $this->input->post('username', TRUE);
            $password = $this->input->post('password', TRUE);

            if (!empty($username) && !empty($password)) {

                if ($this->auth->login()) {
                    echo json_encode(array("status" => "success"));
                } else {
                    echo json_encode(array("status" => "error1"));
                }
            } else {
                echo json_encode(array("status" => "user not"));;
            }
        } else {
            echo json_encode(array("status" => "error3"));
        }
    }
    public function Singup()
    {
        if ($this->input->post(NULL, TRUE)) {
            $username = $this->input->post('username', TRUE);
            $password = $this->input->post('password', TRUE);
            $password = $this->input->post('role_id', TRUE);
            $password = $this->input->post('first_name', TRUE);
            $password = $this->input->post('last_name', TRUE);
            $password = $this->input->post('phone', TRUE);
            if (!empty($username) && !empty($password)) {
                if ($this->auth->login()) {
                    echo json_encode(array("status" => "success"));
                } else {
                    echo json_encode(array("status" => "error1"));
                }
            } else {
                echo json_encode(array("status" => "user not"));;
            }
        } else {
            echo json_encode(array("status" => "error3"));
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
     public function logout()
    {
        if ($this->session->has_userdata('userSession')) :
            session_destroy();
        endif;
        redirect(base_url(), 'location', 301);
    }
}