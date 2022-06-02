<?php
class Login extends CI_Controller
{
	function __construct()
	{
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
		$cek = $this->Model->selectName("users", $where)->num_rows();
		$this->db->where($where);
		$data = $this->db->get("users")->row();
		// $data = $this->Model->selectName("users", $where);
		if ($cek > 0) {

			$data_session = array(
				'nama' => $username,
				'status' => "login",
				'role' => $data->role
			);

			$this->session->set_userdata($data_session);
			// print_r($data->role);
			if ($data->role == "Member") {
				redirect(base_url("order"));
			} else {
				redirect(base_url("order/data"));
			}
		} else {
			echo "Username dan password salah !";
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
