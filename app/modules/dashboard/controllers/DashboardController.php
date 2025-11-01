<?php
class DashboardController extends STA_Controller{
    private $current_module = "dashboard";
    public function __construct()
    {
        parent::__construct();
        // $this->load->model("layout/LayoutController",'layout');
        $this->load->module("layout/LayoutController");

        // $this->load->model("dashboard/DashboardController", "dashboard");
    }
    public function index(){
        $data['content_view'] = "$this->current_module/index";
        $this->layoutcontroller->render($data);
    }
}