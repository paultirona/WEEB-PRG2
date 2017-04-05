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
	
	//////////////////////VIEWS OF GAMES//////////////////////////////////// 
	
	public function game_overwatch(){
		
		$this->load->view('game-overwatch');

	}
	
	public function game_hearthstone(){
		
		$this->load->view('game-hearthstone');

	}
	
	public function game_starcraft(){
		
		$this->load->view('game-starcraft');

	}
	
	public function game_mordor(){
		
		$this->load->view('game-mordor');

	}
	
	public function game_forhonor(){
		
		$this->load->view('game-forhonor');

	}
	///////////////////////VIEWS OF LOGGED GAMES////////////////////////////
	
	
	public function game_overwatch_logged(){
		
	
		if($this->session->userdata('is_logged_in')){
			
	

			$this->load->view('game-overwatch-logged');
		
		} else {
			
			redirect('index.php/Account/restricted');
		}	

	}
	
	public function game_hearthstone_logged(){
		
	
		if($this->session->userdata('is_logged_in')){
			
			$this->load->view('game-hearthstone-logged');
		
		} else {
			
			redirect('index.php/Account/restricted');
		}	

	}
	
	public function game_starcraft_logged(){
		
	
		if($this->session->userdata('is_logged_in')){
			
	

			$this->load->view('game-starcraft-logged');
		
		} else {
			
			redirect('index.php/Account/restricted');
		}	

	}
	
	public function game_mordor_logged(){
		
	
		if($this->session->userdata('is_logged_in')){
			
			$this->load->view('game-mordor-logged');
		
		} else {
			
			redirect('index.php/Account/restricted');
		}	

	}
	
	public function game_forhonor_logged(){
		
	
		if($this->session->userdata('is_logged_in')){
			
			$this->load->view('game-forhonor-logged');
		
		} else {
			
			redirect('index.php/Account/restricted');
		}	

	}
	
	
	///////////////////////VIEWS OF NORMAL LOGGED ////////////////////////////
	
	
	public function homelogged(){
	
		if($this->session->userdata('is_logged_in')){
			$this->load->view('homelogged');
		} else {
			
			redirect('index.php/Account/restricted');
		}	
		
	}
	
	
	public function historytransaction(){
	
		if($this->session->userdata('is_logged_in')){
			
			$this->load->model('model_users');
			
			
			$username = $this->session->userdata('username');
			
			$UserID = $this->model_users->get_userID($username);
		
			$IntUserID = (int)$UserID;
			
			
			$data['trans'] = $this->model_users->get_transaction($IntUserID);
			
			
			
			$this->load->view('historytransaction',$data);
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
	
	/////////////////////////////////PAYMENT VIEWS///////////////////////////////
	public function payment_overwatch(){
	
		if($this->session->userdata('is_logged_in')){
			
			$this->load->view('payment-overwatch');
		} else {
			redirect('index.php/Account/restricted');
		}	
		
	}
	
	
	public function payment_hearthstone(){
	
		if($this->session->userdata('is_logged_in')){
			
			$this->load->view('payment-hearthstone');
		} else {
			redirect('index.php/Account/restricted');
		}	
		
	}
	
	
	public function payment_starcraft(){
	
		if($this->session->userdata('is_logged_in')){
			
			$this->load->view('payment-starcraft');
		} else {
			redirect('index.php/Account/restricted');
		}	
		
	}
	
	
	public function payment_mordor(){
	
		if($this->session->userdata('is_logged_in')){
			
			$this->load->view('payment-mordor');
		} else {
			redirect('index.php/Account/restricted');
		}	
		
	}
	
	public function payment_forhonor(){
	
		if($this->session->userdata('is_logged_in')){
			
			$this->load->view('payment-forhonor');
		} else {
			redirect('index.php/Account/restricted');
		}	
		
	}
	
	///////////////////////////////PAYMENT VIEWS////////////////////////////////////

	
	
	
	
	
	
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
		
		/*
		echo "THIS IS A TEST PAGE";
		echo "<br>";
		
		
		$this->load->model('model_users');
		
	//	$this->model_users->get_gameInfotest(1);
		
	//	$this->model_users->add_transaction(1,1);
		
		$username = $this->session->userdata('username');
		
		$UserID = $this->model_users->get_userID($username);
		
		$IntUserID = (int)$UserID;
		echo $UserID;
		echo "<br>";
		echo "Type is: ";
		echo gettype($UserID);
		
		echo "<br>";
		echo "<br>";
		echo $IntUserID;
		echo "<br>";
		echo "Type is: ";
		echo gettype($IntUserID);
		*/
		
		//ABOVE IS FIRST TEST CASE
		
		
		$this->load->model('model_users');
		$data['trans'] = $this->model_users->get_transaction(1);
		
		$this->load->view('test',$data);
		
		
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
	
	

	
	public function pay_validation_overwatch()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('card-holder-name','Card Holders Name','required|trim');
		$this->form_validation->set_rules('card-number','Card Number','required|trim');
		$this->form_validation->set_rules('cvv','Card CVV','required|trim');
		
		//Meaning no error
		if($this->form_validation->run())
		{
			$this->load->model('model_users');
			$username = $this->session->userdata('username');
			
			$UserID = $this->model_users->get_userID($username);
			
			$IntUserID = (int)$UserID;
			
			
			$GameID = $this->input->post('GameID');
			$IntGameID = (int)$GameID;
			
			
			$this->model_users->add_transaction($IntUserID,$IntGameID);
			
			
		
			$this->load->view('homelogged');
			
		}else{		
			
			$this->load->view('payment-overwatch');
		}
	
	}
	
	public function pay_validation_hearthstone()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('card-holder-name','Card Holders Name','required|trim');
		$this->form_validation->set_rules('card-number','Card Number','required|trim');
		$this->form_validation->set_rules('cvv','Card CVV','required|trim');
		
		//Meaning no error
		if($this->form_validation->run())
		{
			$this->load->model('model_users');
			$username = $this->session->userdata('username');
			
			$UserID = $this->model_users->get_userID($username);
			
			$IntUserID = (int)$UserID;
			
			
			$GameID = $this->input->post('GameID');
			$IntGameID = (int)$GameID;
			
			
			$this->model_users->add_transaction($IntUserID,$IntGameID);
			
			
		
			$this->load->view('homelogged');
			
		}else{		
			
			$this->load->view('payment-hearthstones');
		}
	
	}
	
	public function pay_validation_starcraft()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('card-holder-name','Card Holders Name','required|trim');
		$this->form_validation->set_rules('card-number','Card Number','required|trim');
		$this->form_validation->set_rules('cvv','Card CVV','required|trim');
		
		//Meaning no error
		if($this->form_validation->run())
		{
			$this->load->model('model_users');
			$username = $this->session->userdata('username');
			
			$UserID = $this->model_users->get_userID($username);
			
			$IntUserID = (int)$UserID;
			
			
			$GameID = $this->input->post('GameID');
			$IntGameID = (int)$GameID;
			
			
			$this->model_users->add_transaction($IntUserID,$IntGameID);
			
			
		
			$this->load->view('homelogged');
			
		}else{		
			
			$this->load->view('payment-starcraft');
		}
	
	}
	
	public function pay_validation_mordor()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('card-holder-name','Card Holders Name','required|trim');
		$this->form_validation->set_rules('card-number','Card Number','required|trim');
		$this->form_validation->set_rules('cvv','Card CVV','required|trim');
		
		//Meaning no error
		if($this->form_validation->run())
		{
			$this->load->model('model_users');
			$username = $this->session->userdata('username');
			
			$UserID = $this->model_users->get_userID($username);
			
			$IntUserID = (int)$UserID;
			
			
			$GameID = $this->input->post('GameID');
			$IntGameID = (int)$GameID;
			
			
			$this->model_users->add_transaction($IntUserID,$IntGameID);
			
			
		
			$this->load->view('homelogged');
			
		}else{		
			
			$this->load->view('payment-mordor');
		}
	
	}
	
	public function pay_validation_forhonor()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('card-holder-name','Card Holders Name','required|trim');
		$this->form_validation->set_rules('card-number','Card Number','required|trim');
		$this->form_validation->set_rules('cvv','Card CVV','required|trim');
		
		//Meaning no error
		if($this->form_validation->run())
		{
			$this->load->model('model_users');
			$username = $this->session->userdata('username');
			
			$UserID = $this->model_users->get_userID($username);
			
			$IntUserID = (int)$UserID;
			
			
			$GameID = $this->input->post('GameID');
			$IntGameID = (int)$GameID;
			
			
			$this->model_users->add_transaction($IntUserID,$IntGameID);
			
			
		
			$this->load->view('homelogged');
			
		}else{		
			
			$this->load->view('payment-forhonor');
		}
	
	}
	
	
	
	
	public function send_email_logged()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('name','Full Name','required|trim');
		$this->form_validation->set_rules('phone','Phone Number','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim');
		$this->form_validation->set_rules('message','Message','required|trim');
		
		
		if($this->form_validation->run())
		{
			
			$this->load->library("email");
			
			//change later?
			$this->email->from(set_value("email"),set_value("fullname"));
			$this->email->to();
			
			
			$this->email->subject('OGS Support Request');
			
			
			
			$this->email->message();
			$this->email->send();
			
			echo "Email successfully sent!";
			$this->load->view('contactlogged');
			
		}else{		
			
			$this->load->view('contactlogged');
		}
		
	}
	
	public function send_email()
	{	
		/*
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('name','Full Name','required|trim');
		$this->form_validation->set_rules('phone','Phone Number','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim');
		$this->form_validation->set_rules('message','Message','required|trim');
		
		
		*/
		
		
		
		
		////////////////////////
		
		$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'OGShelpdeskPH@gmail',
				'smtp_pass' => 'ogspassword',
				'mailtype'  => 'html', 
				'charset'   => 'iso-8859-1'
			);
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");

			// Set to, from, message, etc.

			$name = $this->input->post('name');	
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$message = $this->input->post('message');
					
			$this->email->from($email,$name);
			$this->email->to('OGShelpdeskPH@gmail.com');
			$this->email->message($message.'Phone number: '.$phone);
			$this->email->send();
			
			echo $this->email->print_debugger();
			

			$result = $this->email->send();
		
			
			echo "Test";
			$this->load->view('test');
		

		
		/*
		
		if($this->form_validation->run())
		{
			
			$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'OGShelpdeskPH@gmail',
				'smtp_pass' => 'ogspassword',
				'mailtype'  => 'html', 
				'charset'   => 'iso-8859-1'
			);
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");

			// Set to, from, message, etc.

			$name = $this->input->post('name');	
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$message = $this->input->post('message');
					
			$this->email->from($email,$name);
			$this->email->to('OGShelpdeskPH@gmail.com');
			$this->email->message($message.'Phone number: '.$phone);
			$this->email->send();
			
			echo $this->email->print_debugger();
			

			$result = $this->email->send();
		
			
			echo "Email successfully sent!";
			$this->load->view('home');
			
		}else{		
			
			echo "NOTHING HAPPENED";
			$this->load->view('test');
		}
		*/
		
	}
	
}

?>








