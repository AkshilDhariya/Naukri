<?php
class Users extends MY_Controller
{
public function index()
{
		$field_name=$this->input->post('field_name');
		$state=$this->input->post('state_name');
		$city=$this->input->post('city_name');
		$this->load->model('loginmodel');
		$field_name=$this->loginmodel->is3($field_name);
		if($field_name)
		{
			$this->session->set_userdata('field_name',$field_name);
			$this->load->model('loginmodel');
			$this->load->library('pagination');
			$config=[
			'base_url'=>base_url('Users/index'),
			'per_page'=>3,
			'total_rows'=>$this->loginmodel->all_company_count(),
			'full_tag_open' => "<ul class='pagination'>",
			'full_tag_close' => "</ul>",
			'next_tag_open' =>"<li class='page-item'>",
			'next_tag_close' =>"</li>",
			'prev_tag_open' =>"<li class='page-item'>",
			'prev_tag_close' =>"</li>",
			'num_tag_open' =>"<li class='page-item'>",
			'num_tag_close' =>"</li>",
			'cur_tag_open' =>"<li class='page-item active'><a>",
			'cur_tag_close'=>"</a></li>"
			];
			$this->pagination->initialize($config);
			$companys=$this->loginmodel->all_companylist($config['per_page'],$this->uri->segment(4));
			$this->load->view('users/company_list',compact('companys'));
		}
		else
		{
			$this->session->set_flashdata('msg5','please enter given value');
			$this->session->set_flashdata('msg_class5','alert-success');
			return redirect('Home/index');
		}
	}
	
}

?>