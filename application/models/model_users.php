<?php



class Model_users extends CI_Model{

	public function can_log_in(){
		$this->db->where('username',$this->input->post('username'));
		
		$this->db->where('password',$this->input->post('password'));
		
		$query = $this->db->get('account');
		
		
		if($query->num_rows() == 1){
			return true;
		} else {
			return false;
		}
	}
	
	
	public function matchOldPassword($data,$old){
		
		
		$this->db->select('password');
		$this->db->where('username',$data);
		$query = $this->db->get('account');	
		$row = $query->row();
		
		$temp = $row->password;
		
		/*
		echo $temp;
		
		echo $old;
		*/
		if($temp == $old){
			return true;
		} else {
			return false;
		}
		
	}
	
	public function update_password($user)
	{
		
		
		$data = array(		
			'password' => $this->input->post('npassword')
			
		);
		
		$this->db->where('username',$user);
		$query = $this->db->update('account',$data);
		
		if($query){
			return true;
		} else {
			return false;
		}
			
	}
	
	
	
	public function add_user(){
		
		$data = array(
			
			'name' => $this->input->post('name'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
		
		);
		
		$query = $this->db->insert('account',$data);
		
		if($query){
			return true;
		}else{
			return false;
		}
	}

	// insert
	
	
	function insert_user($data)
    {
		return $this->db->insert('account', $data);
	}
	
	
	public function get_email($data)
	{			
		$this->db->select('email');
		$this->db->where('username',$data);
		$query = $this->db->get('account');	
		$row = $query->row();
		
		return $row->email;
	//	echo $row->email;	
	}
	
	//data is current username
	/*
	public function matchOldPassword($data)
	{
		$this->db->select('password');
		$this->db->where('password'
		$query = $this->db->get('account');
	}
	*/
	
}

