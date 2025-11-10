<?php
class Profiles extends STA_Controller
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
        $data['content_view'] = "$this->current_module/profiles/index";
        $this->layoutcontroller->render($data);
    }
}
