<?php
class login extends MY_Controller
{
	public function __construct()
	{
	parent::__construct();
	if($this->session->userdata('username'))
	return redirect('profile/welcome');
	}
	public function index()
	{
    $this->form_validation->set_rules('username','User Name','required|alpha|min_length[3]|max_length[10]');
	$this->form_validation->set_rules('password','Password','required|min_length[3]|max_length[10]');
	$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
	if($this->form_validation->run())
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$this->load->model('loginmodel');
		
		$user_name=$this->loginmodel->is($username,$password);		
		$login_id=$this->loginmodel->isvalidate($username,$password);
		if($login_id)
		{
			$this->session->set_userdata('id',$login_id);
			$this->session->set_userdata('username',$user_name);
			return redirect('profile/welcome');
		}
		else
		{
			$this->session->set_flashdata('Login_failed','Invalid Username or password');
			return redirect('users/login');
		}
	}
	else
	{
		$this->load->view('users/login');

	}

	}
	
}
?>