<?php
class Login extends CI_Controller{
    function __construct(){
		parent::__construct();
        $this->load->model('Model');
		$this->load->helper('url');
	}
    public function index()
    {
        $this->load->view('login');
    }
    public function loginProcess()
    {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->Model->selectName("users",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("order/data"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
    public function logout()
    {
        $this->session->sess_destroy();
		redirect(base_url('login'));
    }
}