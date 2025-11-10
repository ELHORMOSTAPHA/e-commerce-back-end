<?php
class Users extends STA_Controller
{
    private $current_module = 'user_management';
    public function __construct()
    {
        parent::__construct();
          $this->load->module("layout/LayoutController");
          $this->Permissions->verifyAuth();
    }
    public function index()
    {
        $data['content_view'] = "$this->current_module/userlist/index";
        $this->layoutcontroller->render($data);
    }
    public function add_user()
    {
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $phone_number = $this->input->post('phone_number');
        $email = $this->input->post('email');
        if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email = null;
          

        }
        $profile_image = ''; // Handle file upload as needed
        $user_data = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'phone_number' => $phone_number,
            'profile_image' => $profile_image
        );
        $this->User_management_model->add_user($user_data);
        redirect('user_management/users');
    }
}
