<?php
class loginmodel extends CI_model
{
	public function isvalidate($username,$password)
	{

		$q=$this->db->where([ 'username'=>$username,'password'=>$password ])
		            ->get('users');


		       if($q->num_rows())
		         {
		         	return $q->row()->id;
		         }
		         else
		         {
		         	return false;
		         }
	}
	public function is($username,$password)
	{

		$q=$this->db->where([ 'username'=>$username,'password'=>$password ])
		            ->get('users');


		       if($q->num_rows())
		         {
		         	return $q->row()->username;
		         }
		         else
		         {
		         	return false;
		         }
	}
	public function is3($field_name)
	{

		$q=$this->db->where([ 'field_name'=>$field_name ])
		            ->get('companys');


		       if($q->num_rows())
		         {
		         	return $q->row()->field_name;
		         }
		         else
		         {
		         	return false;
		         }
	}
	public function is4($field_name,$state_name,$city_name)
	{

		$q=$this->db->where([ 'field_name'=>$field_name,'state_name'=>$state_name,'city_name'=>$city_name ])
		            ->get('companys');


		       if($q->num_rows())
		         {
		         	return $q->row()->city_name;
		         }
		         else
		         {
		         	return false;
		         }
	}
	public function is5($field_name,$state_name,$city_name)
	{

		$q=$this->db->where(['field_name'=>$field_name,'state_name'=>$state_name,'city_name'=>$city_name ])
		            ->get('companys');


		       if($q->num_rows())
		         {
		         	return $q->row()->state_name;
		         }
		         else
		         {
		         	return false;
		         }
	}
	public function isvalidate1($companyname,$password)
	{

		$q=$this->db->where([ 'companyname'=>$companyname,'password'=>$password ])
		            ->get('company');


		       if($q->num_rows())
		         {
		         	return $q->row()->id;
		         }
		         else
		         {
		         	return false;
		         }
	}
	public function is1($companyname,$password)
	{

		$q=$this->db->where([ 'companyname'=>$companyname,'password'=>$password ])
		            ->get('company');


		       if($q->num_rows())
		         {
		         	return $q->row()->companyname;
		         }
		         else
		         {
		         	return false;
		         }
	}
	

	
	public function update_company($companyid,Array $company)
	{
		return $this->db->where('id',$companyid)
				        ->update('companys',$company);
	}
	public function all_company_count()
	{
		$field_name=$this->session->userdata('field_name');
		$q=$this->db->select()
					->where(['field_name'=>$field_name])
					->from('companys')
					->get();
				return $q->num_rows();
	}
	public function all_companylist($limit,$offset)
	{
		$field_name=$this->session->userdata('field_name');
		$q=$this->db->select()
					->from('companys')
					->limit($limit,$offset)
					->where(['field_name'=>$field_name ])
					->get();
				return $q->result();
	}
	public function num_rows()
	{
		$id=$this->session->userdata('id');
		$q=$this->db->select()
				 	->from('companys')
					->where(['user_id'=> $id ])
				 	->get();
				 	return $q->num_rows();
	}
	public function num_row2()
	{
		$id=$this->session->userdata('id');
		$q=$this->db->select()
				 	->from('question')
					->where(['userid'=> $id ])
				 	->get();
				 	return $q->num_rows();
	}
	public function num_row3()
	{
		$company_name=$this->session->userdata('companyname');
		$q=$this->db->select()
				 	->from('question')
					->where(['company_name'=> $company_name])
				 	->get();
				 	return $q->num_rows();
	}

	
	public function companyList($limit,$offset)
	{
		$id=$this->session->userdata('id');
		$q=$this->db->select()
				 	->from('companys')
					->where(['user_id'=> $id ])
					->limit($limit,$offset)
				 	->get();
				 return $q->result();
				 	
				 	}
	public function userList2($limit,$offset)
	{
		$id=$this->session->userdata('id');
		$q=$this->db->select()
				 	->from('question')
					->where(['userid'=> $id ])
					->limit($limit,$offset)
				 	->get();
				 return $q->result();
	}
	public function userList5($limit,$offset)
	{
		$company_name=$this->session->userdata('companyname');
		$q=$this->db->select()
				 	->from('question')
					->where(['company_name'=> $company_name])
				 	->get();
				 return $q->result();
	}
	
	public function userList()
	{
		$id=$this->session->userdata('id');
		$q=$this->db->select()
				 	->from('resume')
					->where(['userid' => $id ])
				 	->get();
				 return $q->row();
				 	
	}
	public function add_company($array)
	{
		return $q=$this->db->insert('companys',$array);
	}
	public function add_job($array)
	{
		$id=$this->session->userdata('id');
		return $q=$this->db->insert('resume',$array);

	}
	public function insert_company($array)
	{
		return $q=$this->db->insert('company',$array);
	}
	
	public function insert_user($array)
	{
		return $q=$this->db->insert('users',$array);
	}

	public function insert_profile($array)
	{
		return $q=$this->db->insert('resume',$array);
	}
	public function insert_que($array)
	{
		return $q=$this->db->insert('question',$array);
	}
	public function del($id)
	{
		return $this->db->delete('companys',['id'=>$id]);

	}
	public function find_company($companyid)
	{
		$q=$this->db->select()
					->where('id',$companyid)
				 	->get('companys');
				 return $q->row();
	}
	public function find_company1($companyid)
	{
		$q=$this->db->select()
					->where('id',$companyid)
				 	->get('companys');
				 if($q->num_rows())
		         {
		         	return $q->row()->company_name;
		         }
		         else
		         {
		         	return false;
		         }
	}
	public function find_company2($companyid)
	{
		$q=$this->db->select()
					->where('id',$companyid)
				 	->get('companys');
				 if($q->num_rows())
		         {
		         	return $q->row()->field_name;
		         }
		         else
		         {
		         	return false;
		         }
	}
	public function find_company3($companyid)
	{
		$q=$this->db->select()
					->where('id',$companyid)
				 	->get('companys');
				 if($q->num_rows())
		         {
		         	return $q->row()->salary;
		         }
		         else
		         {
		         	return false;
		         }
	}
	public function find_company4($companyid)
	{
		$q=$this->db->select()
					->where('id',$companyid)
				 	->get('companys');
				 if($q->num_rows())
		         {
		         	return $q->row()->state_name;
		         }
		         else
		         {
		         	return false;
		         }
	}
	public function find_company5($companyid)
	{
		$q=$this->db->select()
					->where('id',$companyid)
				 	->get('companys');
				 if($q->num_rows())
		         {
		         	return $q->row()->city_name;
		         }
		         else
		         {
		         	return false;
		         }
	}
	public function details($companyid)
	{
		$q=$this->db->select()
					->where('id',$companyid)
				 	->get('companys');
				 return $q->row();
	}
	public function fetch()
	{
		$id=$this->session->userdata('id');
		   	 $q=$this->db->select()
						 ->where(['userid'=>$id])
						 ->get('resume');
				 return $q->row();
		

	}
	public function get_user($userid)
	{
		   	 $q=$this->db->select()
						 ->where('userid',$userid)
						 ->get('resume');
				 return $q->row();
		

	}
	public function num_row()
	{
		$id=$this->session->userdata('id');
		$q=$this->db->select()
					->where(['userid'=> $id ])
				 	->get('question');
				 	return $q->num_rows();
	}
	public function userList3($limit,$offset)
	{
		$id=$this->session->userdata('id');
		$q=$this->db->select()
				 	->from('question')
					->where(['userid'=> $id ])
					->limit($limit,$offset)
				 	->get();
				 return $q->result();
				 	
				 	}
	public function fetch2()
	{
		$id=$this->session->userdata('id');
		   	 $q=$this->db->select()
						 ->where(['userid'=>$id])
						 ->get('question');
				 return $q->row();
		

	}
	public function fetch_state()
	{
		$this->db->order_by("state_name","ASC");
		$query=$this->db->get("state");
		return $query->result();
	}
    public function fetch_city($state_id)
	{
		$this->db->where('state_id', $state_id);
		$this->db->order_by('city_name','ASC');
		$query = $this->db->get('city');
		$output = '<option value="">Select City</option>';
		foreach($query->result() as $row)
		{
			$output .= '<option value="' .$row->city_id. '">' .$row->city_name.'</option>';
		}
		return $output;
	}
}
?>