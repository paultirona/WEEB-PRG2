<?php

class Account extends CI_Controller{
	
	public function index()
    {

        $this->load->view('home');

    }
	
	public function login(){
		
		$this->load->view('login');
		
	}
	
	public function home(){
		$this->load->view('home');
	}
	
	public function signup(){
		
		$this->load->view('signup');
	}
	
	public function about(){
		
		$this->load->view('about');

	}
	
	public function contact(){
		
		$this->load->view('contact');

	}
	
	public function Shop(){
		
		$this->load->view('Shop');

	}
	
	//VIEWS OF GAMES 
	
	public function game_overwatch(){
		
		$this->load->view('game-overwatch');

	}
	
	//VIEWS OF LOGGED GAMES
	
	
	public function game_overwatch_logged(){
		
	
		if($this->session->userdata('is_logged_in')){
			$this->load->view('game-overwatch-logged');
		} else {
			
			redirect('index.php/Account/restricted');
		}	

	}
	
	//LOGGED 
	
	public function homelogged(){
	
		if($this->session->userdata('is_logged_in')){
			$this->load->view('homelogged');
		} else {
			
			redirect('index.php/Account/restricted');
		}	
		
	}
	
	
	public function shoplogged(){
	
		if($this->session->userdata('is_logged_in')){
			$this->load->view('Shoplogged');
		} else {
			
			redirect('index.php/Account/restricted');
		}	
		
	}
	
	public function aboutlogged(){
	
		if($this->session->userdata('is_logged_in')){
			$this->load->view('aboutlogged');
		} else {
			
			redirect('index.php/Account/restricted');
		}	
		
	}
	
	public function contactlogged(){
	
		if($this->session->userdata('is_logged_in')){
			$this->load->view('contactlogged');
		} else {
			
			redirect('index.php/Account/restricted');
		}	
		
	}
	
	
	
	
	
	
	//Unused yet
	public function accountdetails()
	{
		$this->load->model('model_users');
		$username = $this->session->userdata('username');

		$data["email"] = $this->model_users->get_email($username);		
		
		$this->load->view('accountdetails', $data);
	
	}
	
	
	public function test()
	{
		echo "THIS IS A TEST PAGE";
		
		
		
		
	}
	
	
	
	
	//TEST TEST TEST
	
	public function restricted(){
		$this->load->view('restricted');
	}
	
	
	public function login_validation(){
		
		$this->load->library('form_validation');
		//$this->form_validation->set_rules('username','Username','required|trim');
		//$this->form_validation->set_rules('username','Username','required|trim|xss_clean|callback_validate_credentials');
		
		
		$this->form_validation->set_rules('username','Username','required|trim|callback_validate_credentials');
		$this->form_validation->set_rules('password','Password','required|trim');
		
		
		if($this->form_validation->run()){
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => 1
			);
			$this->session->set_userdata($data);
			
			redirect('index.php/Account/homelogged');
		}else{			
			$this->load->view('login');
		}
		
		/*
		echo $_POST['username'];
		echo $this->input->post('username');
		*/
	}
	
	
	
	public function signup_validation()
	{
		
		$this->load->library('form_validation');
		
		
		$this->form_validation->set_rules('name','Name','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[account.email]');
		$this->form_validation->set_rules('username','Username','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');
		$this->form_validation->set_rules('cpassword','Confirm Password','required|trim|matches[password]');
		
		
		$this->form_validation->set_message('is_unique', "That email address already exists.");
		
		if($this->form_validation->run()){
			
			
			
			$this->load->model('model_users');
			
			$result = $this->model_users->add_user();
			
			if($result)
			{
				$this->load->view('login');
			}
			else
			{
				
				echo "no pass";
				$this->load->view('login');
			}
			
		}else{		
			$this->load->view('signup');
		}
	
	}
	
	
	
	public function update_validation()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('opassword','Old Password','required|trim|callback_validate_oldpassword');
		$this->form_validation->set_rules('npassword','New Password','required|trim');
		$this->form_validation->set_rules('cpassword','Confirm Password','required|trim|matches[npassword]');
		
		//Meaning no error
		if($this->form_validation->run())
		{
			$this->load->model('model_users');
			$username = $this->session->userdata('username');
			
			$result = $this->model_users->update_password($username);
			
			if($result)
			{	
				
				
				$this->load->model('model_users');
				$username = $this->session->userdata('username');
				$data["email"] = $this->model_users->get_email($username);	
				$this->load->view('accountdetails',$data);
				
				
				//echo "Password updated!";
				
			}
			
			
		}else{		
		
			$this->load->model('model_users');
			$username = $this->session->userdata('username');
			$data["email"] = $this->model_users->get_email($username);		
			
			$this->load->view('accountdetails',$data);
		}
	
	}
	
	
	
	
	
	//Check if account exist
	public function validate_credentials(){
			
			$this->load->model('model_users');
			
			if($this->model_users->can_log_in()){

				return true;
			} else{
				$this->form_validation->set_message('validate_credentials','Incorrect username/password');
				return false;
			}
			
	}
	
	
	public function validate_oldpassword()
	{
		$this->load->model('model_users');
		
		$data = $this->session->userdata('username');
		
		$old = $this->input->post('opassword');
		
		$result = $this->model_users->matchOldPassword($data,$old);
		
		if($result){			
			return true;
		} else{
			$this->form_validation->set_message('validate_oldpassword','Incorrect old password');
			return false;
		}
		
		
	}
	
	
	public function register_user(){
		$this->load->model('model_users');
		
	}
	
	
	
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('index.php/Account/login');
	}
	
	

	
	
	
}

?>








