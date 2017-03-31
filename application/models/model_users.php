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
	//TEST
	// insert
	function insert_user($data)
    {
		return $this->db->insert('account', $data);
	}
	
	
	
	
}

