<?php
class company extends MY_Controller
{
public function __constructor()
{
	parent::__constructor();
	if(!$this->session->userdata('id'))
	return redirect('clogin');
}
public function welcome()
{
		$this->load->model('loginmodel');
		$this->load->library('pagination');
		$config=[
			'base_url'=>base_url('company/welcome'),
			'per_page'=>2,
			'total_rows'=>$this->loginmodel->num_rows(),
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
			$companys=$this->loginmodel->companyList($config['per_page'],$this->uri->segment(3));
			$this->load->view('company/dashbord',['companys'=>$companys]);}
	
public function adduser()
{
	$this->load->view('company/add_company_field');
}
public function uservalidation()
{
	$config=[
			'upload_path'=>'./upload/',
			'allowed_types'=>'gif|jpg|png|jpeg',
			'max_size'=>'200',
	];
	$this->load->library('upload',$config);
	if($this->form_validation->run('add_company_rules') && $this->upload->do_upload())
	{
		$post=$this->input->post();
		$this->session->set_userdata('company_detail',$company_detail);
		$this->session->set_userdata('field_name',$field_name);
		$this->session->set_userdata('state_name',$state_name);
		$this->session->set_userdata('city_name',$city_name);
		$data=$this->upload->data();
		$image_path=base_url("upload/".$data['raw_name'].$data['file_ext']);
		$post['image_path']=$image_path;
		$this->load->model('loginmodel');
		if($this->loginmodel->add_company($post))
		{
			$this->session->set_flashdata('msg','company field added successfully ');
			$this->session->set_flashdata('msg_class','alert-success');
		}
		else
		{
			$this->session->set_flashdata('msg','company field  not added please try again');
			$this->session->set_flashdata('msg_class','alert-danger');
		}
		return redirect('company/welcome');
	}
	else
	{
		$upload_error=$this->upload->display_errors();
		$this->load->view('company/add_company_field',compact('upload_error'));

	}
}

	public function edituser($id)
{	
	$this->load->model('loginmodel');
	$company=$this->loginmodel->find_company($id);
	$this->load->view('company/edit_company',['company'=>$company]);
}

public function updatecompany($company_id)
{
	if($this->form_validation->run('add_company_rules'))
	{
		$post=$this->input->post();
		//$companyid=$post['company_id'];
		$this->load->model('loginmodel');
		if($this->loginmodel->update_company($company_id,$post))
		{
			$this->session->set_flashdata('msg','company field edit successfully ');
			$this->session->set_flashdata('msg_class','alert-success');
		}
		else
		{
			$this->session->set_flashdata('msg','company field  not edit please try again');
			$this->session->set_flashdata('msg_class','alert-danger');
		}
		return redirect('company/welcome');
	}
	else
	{
		$this->load->view('company/edituser');

	}

}

public function logout()
{
	$this->session->unset_userdata('id');
	return redirect('login');
}
public function register()
{
	$this->load->view('company/register');
}
public function delcompany()
{
	$id=$this->input->post('id');
	$this->load->model('loginmodel');
		if($this->loginmodel->del($id))
		{
			$this->session->set_flashdata('msg','company field delete successfully ');
			$this->session->set_flashdata('msg_class','alert-success');
		}
		else
		{
			$this->session->set_flashdata('msg','company field  not delete please try again');
			$this->session->set_flashdata('msg_class','alert-danger');
		}
		return redirect('company/welcome');
}
public function sendmail()
{
	 $this->form_validation->set_rules('companyname','Company Name','required|alpha|min_length[3]|max_length[10]');
	$this->form_validation->set_rules('password','Password','required|min_length[3]|max_length[10]');
	$this->form_validation->set_rules('firstname','Firstname','required|min_length[3]');
	$this->form_validation->set_rules('lastname','Lastname','required|min_length[3]');
	$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]|min_length[3]');
	$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
	if($this->form_validation->run())
	{
		$post=$this->input->post();
		$this->load->model('loginmodel');
		if($this->loginmodel->insert_company($post))
		{
			$this->session->set_flashdata('company','company added successfully please login');
			$this->session->set_flashdata('company_class','alert-success');
		}
		else
		{
			$this->session->set_flashdata('company','company not added successfully');
			$this->session->set_flashdata('company_class','alert-success');
		}
		return redirect('clogin');
		$this->load->library('email');
		$this->email->from('akshildhariya99@gmail.com');
		$this->email->to(set_value('email'),set_value('firstname'));
		$this->email->subject("Registration successfully..");
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
		$this->load->view('company/register');

	}
}
public function details($id)
{
	$this->load->model('loginmodel');
	$company=$this->loginmodel->find_company($id);
	$company_name=$this->loginmodel->find_company1($id);
	$this->session->set_userdata('company_name',$company_name);
	$field_name=$this->loginmodel->find_company2($id);
	$this->session->set_userdata('field_name',$company_name);
	$salary=$this->loginmodel->find_company3($id);
	$this->session->set_userdata('salary',$salary);
	$state_name=$this->loginmodel->find_company4($id);
	$this->session->set_userdata('state_name',$state_name);
	$city_name=$this->loginmodel->find_company5($id);
	$this->session->set_userdata('city_name',$city_name);
	$this->load->view('home/details',['company'=>$company]);
}
public function mail()
{
	$this->load->library('email');
		$this->email->from('akshildhariya99@gmail.com');
		$this->email->to(set_value('email'),set_value('firstname'));
		$this->email->subject("Apply For job..");
		$this->email->message("Details in Attachment");
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

}
?>