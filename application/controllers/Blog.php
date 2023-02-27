<?php
class Blog extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['title'] = 'Ini adalah Title';
        $data['content'] = 'Ini adalah Content';
        $this->load->view('blog_view', $data);
    }
}