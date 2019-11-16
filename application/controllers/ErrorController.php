<?php

class ErrorController extends CI_Controller
{
    public function error404()
    {
        $this->load->view('errors/custom/404');
    }
}