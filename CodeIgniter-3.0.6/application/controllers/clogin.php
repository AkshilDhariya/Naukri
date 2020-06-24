<?php
class clogin extends MY_Controller
{
	public function __construct()
	{
	parent::__construct();
	if($this->session->userdata('companyname'))
	return redirect('company/welcome');
	}
	public function index()
	{
    $this->form_validation->set_rules('companyname','Company Name','required|alpha|min_length[3]|max_length[10]');
	$this->form_validation->set_rules('password','Password','required|min_length[3]|max_length[10]');
	$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
	if($this->form_validation->run())
	{
		$companyname=$this->input->post('companyname');
		$password=$this->input->post('password');
		$this->load->model('loginmodel');
		$company_name=$this->loginmodel->is1($companyname,$password);
		$login_id=$this->loginmodel->isvalidate1($companyname,$password);
		if($login_id)
		{
			$this->session->set_userdata('id',$login_id);
			$this->session->set_userdata('companyname',$company_name);
			return redirect('company/welcome');
		}
		else
		{
			$this->session->set_flashdata('Login_failed','Invalid Username or password');
			return redirect('clogin');
		}
	}
	else
	{
		$this->load->view('company/clogin');

	}

	}
	
}
?>