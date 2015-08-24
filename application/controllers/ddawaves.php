<?php

	class DdaWaves extends CI_Controller {
			
	public function index( $area = 'ddawaves', $page = 'history') {
		
		if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
		{
			show_404();
		}	
		$this->clientsearch();
		
	}
	
	
	public function history( $area = 'ddawaves', $page = 'history', $layout= '_LeftNavDoubleRowSearchLayout') {

        setcookie('currenturl', $_SERVER['REQUEST_URI'], time()+36000000, '/');

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
	
	public function manage( $area = 'ddawaves', $page = 'manage', $layout= '_ClientLayoutView') {

        setcookie('currenturl', $_SERVER['REQUEST_URI'], time()+36000000, '/');

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