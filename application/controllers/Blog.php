<?php
class Blog extends CI_Controller {

        public function index()
        {
			$this->load->view('signup');
              //  echo 'Hello World!';
        }
		
		public function comments()
        {
                echo 'This is comments!';
        }
}