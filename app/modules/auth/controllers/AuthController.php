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
                echo json_encode(array("status" => "error2"));;
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
}