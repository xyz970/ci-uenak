<?php
class Register extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('register');
    }

    public function insert()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->Model->insert(
            "users",
            array(
                "username" => $username,
                "password" => $password
            )
        );
        redirect(base_url('login'));
    }
}
