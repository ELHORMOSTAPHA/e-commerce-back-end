<?php

class LayoutController extends STA_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function render($data=null){
            $this->load->view("index",$data);
    }
    public function hello(){
        echo "hello from layout controller";
    }
}