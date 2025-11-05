<?php
class Permissions extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function verifyAuth()
    {
        if (!$this->session->userSession) {
            redirect(base_url('quit'), 'location', 301);
        }
    }
}