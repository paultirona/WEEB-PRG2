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
	
	
	
	public function add_transaction($UserID,$id)
	{
		
		
		$this->db->select('GameName,Price,GameKey');
		$this->db->where('GameID',$id);
		$query = $this->db->get('gameinfo');
		
		
		foreach ($query->result() as $row)
		{
			$gamename = $row->GameName;
		//	echo "<br>";
			$price = $row->Price;
		//	echo "<br>";
		//	echo $row->GameKey;
		}
		
		
		$data = array(
			
			'UserID' => $UserID,
			'GameName' =>  $gamename,
			'TransacDate' => date("Y-m-d"),
			'Price' =>  $price
		
		);
		
		$this->db->insert('transaction',$data);
		
	}
	

	
	
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
	
	
	public function get_userID($data)
	{
		$this->db->select('UserID');
		$this->db->where('Username',$data);
		$query = $this->db->get('account');	
		$row = $query->row();
		
		return $row->UserID;
		
	}
	
	
	public function get_transaction($data)
	{
		$this->db->select('TransacID,GameName,TransacDate,Price');
		$this->db->where('UserID',$data);
		$query = $this->db->get('transaction');	
		return $query;
	}
	
	
}

