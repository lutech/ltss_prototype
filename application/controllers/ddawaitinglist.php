<?php

	class DdaWaitinglist extends CI_Controller {
			
	public function index( $area = 'ddawaitinglist', $page = 'history') {
		
		if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
		{
			show_404();
		}	
		$this->clientsearch();
		
	}
	
	
	public function history( $area = 'ddawaitinglist', $page = 'history', $layout= '_LeftNavDoubleRowSearchLayout') {
		
		if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
		{
			show_404();
		}
		
		$data['layout'] = $layout;
		$data['page'] = $page;
		$data['area'] = $area;
        $this->load->helper('url');
        $data['_leftnavigation'] = $this->load->view('areas/waitinglist/shared/_LeftNavigationPartial.php', $data, true);

		$this->load->view("shared/_MasterLayout.php", $data);
	}
	
	
}