<?php

	class Login extends CI_Controller {
			
	public function index($page = 'login') {
		
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}		
		
		$data['page'] = $page;
		$data['section'] = "";
		$data['mainlinks'] = array(
									'home' => 'Home',
									'providers' => 'Find Services',
									'info' => 'Help & Info',
									$section  => 'My Care Record'
									);
		$this->load->helper('url');
		$this->load->view("templates/master-layout.php", $data);
	}
	
}