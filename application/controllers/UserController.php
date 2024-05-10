<?php

class UserController extends CI_Controller
{
	public function User(){
		$this->load->helper('test_helper');
		testUser();
		// $this->load->model('UserModel');
		$data['users'] = $this->UserModel->getUserData();

		$this->load->view('user-list',$data);
	}
}	
?>
