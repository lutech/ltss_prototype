<?php

	class Clients extends CI_Controller {
			
	public function index( $area = 'clients', $page = 'clientsearch') {
		
		if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
		{
			show_404();
		}	
		$this->clientsearch();
		
	}
	
	
	public function clientsearch( $area = 'clients', $page = 'clientsearch', $layout= '_Search-DoubleRow-LayoutView') {
		
		if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
		{
			show_404();
		}
		
		$data['layout'] = $layout;
		$data['page'] = $page;
		$data['area'] = $area;
		$this->load->helper('url');
		$this->load->view("shared/_MasterLayout.php", $data);
	}
	
	
}