<?php 
class Home extends MY_Controller
{
	public function index()
	{
		$this->load->model('loginmodel');
		$data['state']=$this->loginmodel->fetch_state();
		$this->load->view('home/home',$data);
	}
    function fetch_city()
	{
		if($this->input->post('state_id'))
		{
			echo $this->loginmodel->fetch_city($this->input->post('state_id'));
		}
	}
}
?>