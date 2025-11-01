<?php

class LayoutController extends STA_Controller
{

    function __construct()
    {
        parent::__construct();
    }
    public function render($data=null){
            $this->load->view("index",$data);
    }
}