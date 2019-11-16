<?php

class FrontController extends CI_Controller
{
    public function index()
    {
        $this->load->view('front');
    }
}