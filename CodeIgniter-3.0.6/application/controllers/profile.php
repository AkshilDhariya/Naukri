<?php
class profile extends MY_Controller
{
	public function __constructor()
{
	parent::__constructor();
	if(!$this->session->userdata('username'))
	return redirect('login');
}
public function register()
{
	$this->load->view('users/register');
}
public function welcome()
{
	$this->load->model('loginmodel');
		$this->load->library('pagination');
		$config=[
			'base_url'=>base_url('profile/welcome'),
			'per_page'=>2,
			'total_rows'=>$this->loginmodel->num_row2(),
			'full_tag_open' => "<ul class='pagination'>",
			'full_tag_close' => "</ul>",
			'next_tag_open' =>"<li class='page-item'>",
			'next_tag_close' =>"</li>",
			'prev_tag_open' =>"<li class='page-item'>",
			'prev_tag_close' =>"</li>",
			'num_tag_open' =>"<li class='page-item'>",
			'num_tag_close' =>"<li>",
			'cur_tag_open' =>"<li class='page-item active'><a>",
			'cur_tag_close'=>"</a></li>"
			];
			$this->pagination->initialize($config);
			$question=$this->loginmodel->userList2($config['per_page'],$this->uri->segment(3));
			$this->load->view('users/profile',['question'=>$question]);}

public function sendmail()
{
	 $this->form_validation->set_rules('username','User Name','required|alpha|min_length[3]|max_length[10]');
	$this->form_validation->set_rules('password','Password','required|min_length[3]|max_length[10]');
	$this->form_validation->set_rules('firstname','Firstname','required|min_length[3]');
	$this->form_validation->set_rules('lastname','Lastname','required|min_length[3]');
	$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]|min_length[3]');
	$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
	if($this->form_validation->run())
	{
		$post=$this->input->post();
		$this->load->model('loginmodel');
		if($this->loginmodel->insert_user($post))
		{
			$this->session->set_flashdata('user','user added successfully please login');
			$this->session->set_flashdata('user_class','alert-success');
		}
		else
		{
			$this->session->set_flashdata('user','user not added successfully');
			$this->session->set_flashdata('user_class','alert-success');
		}
		return redirect('login');
		$this->load->library('email');
		$this->email->from(set_value('email'),set_value('firstname'));
		$this->email->to('akshildhariya@gmail.com');
		$this->email->subject("Register Greeting..");
		$this->email->message("Thank You For Registration");
		$this->email->set_newline("\r \n");
		$this->email->send();
		if(!$this->email->send())
		{
			show_error($this->email->print_debugger());
		}
		else{
			echo "Your e-mail has been sent!";
		}
	}
	else
	{
		$this->load->view('users/register');

	}
}
public function submit()
{
	$this->load->view('users/question');
}
public function addjob()
{
	$this->load->view('users/addjob');
}
public function job()
{
	$this->form_validation->set_rules('job','Job','min_length[3]|max_length[70]');
	if($this->form_validation->run())
	{
		$post=$this->input->post();
		$id=$this->session->userdata('id');
		$this->session->set_userdata('job');
		$post['id']=$id;
		$this->load->model('loginmodel');
		if($this->loginmodel->add_job($post))
		{
			$this->session->set_flashdata('msg1','Job added successfully ');
			$this->session->set_flashdata('msg1_class','alert-success');
		}
		else
		{
			$this->session->set_flashdata('msg1','Job  not added please try again');
			$this->session->set_flashdata('msg1_class','alert-danger');
		}
		return redirect('profile/resume');
	}
}

		public function que()
{

			$this->load->model('loginmodel');
			$users =$this->loginmodel->userList();

			if(!$users)
			{
				$this->load->view('users/que');
			}
			else
			{
				return redirect('profile/resume');
			}
	
}
public function updateprofile()
{
	 $this->form_validation->set_rules('education','Education','required|min_length[3]');
	$this->form_validation->set_rules('job','Job','min_length[3]|max_length[10]');
	$this->form_validation->set_rules('internship','Internship','min_length[3]');
	$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
	if($this->form_validation->run())
	{
		$username=$this->session->userdata('username');	
		$post=$this->input->post();
		$this->session->set_userdata('education');
		$this->session->set_userdata('job');
		$this->session->set_userdata('internship');
		$this->load->model('loginmodel');
		if($this->loginmodel->insert_profile($post))
		{
			
			$this->session->set_flashdata('user','Resume added successfully please login');
			$this->session->set_flashdata('user_class','alert-success');
		}
		return redirect('profile/resume');
		}
		else
	{
		$this->load->view('users/que');

	}

}
public function enter()
{
	 $this->form_validation->set_rules('que1','Question','required|min_length[3]|max_length[100]');
	$this->form_validation->set_rules('que2','Question','required|min_length[3]|max_length[100]');
	$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
	if($this->form_validation->run())
	{
		$username=$this->session->userdata('username');	
		$post=$this->input->post();
		$this->session->set_userdata('que1');
		$this->session->set_userdata('que2');
		$this->load->model('loginmodel');
		if($this->loginmodel->insert_que($post))
		{
			
			$this->session->set_flashdata('user3','Answer added successfully please login');
			$this->session->set_flashdata('user3_class','alert-success');
			return redirect('profile/welcome');
			$this->load->library('email');
			$this->email->from('akshildhariya@gmail.com');
			$this->email->to(set_value('email'),set_value('firstname'));
			$this->email->subject("Apply successfully..");
			$this->email->message("Thank You For Apply");
			$this->email->set_newline("\r \n");
			$this->email->send();
			if(!$this->email->send())
			{
			show_error($this->email->print_debugger());
			}
			else
			{
				echo "Your e-mail has been sent!";
			}
	}
	else
	{
		$this->load->view('users/question');

	}
		}

		else
		{
		$this->load->view('users/question');
		}
		

}
public function resume()
{
	
	$this->load->model('loginmodel');
	$user=$this->loginmodel->fetch();
	$this->load->view('users/resume',['user'=> $user]);

}
public function logout()
{
	$this->session->unset_userdata('username');
	return redirect('login');
}
}
?>