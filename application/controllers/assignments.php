<?php

	class Assignments extends CI_Controller {
			
	public function index( $area = 'assignments', $page = 'flexibleassignments/summary') {
		
		if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
		{
			show_404();
		}	
		$this->flexibleassignmentssummary();
		
	}
	
	
	public function flexibleassignmentssummary( $area = 'assignments', $page = 'flexibleassignments/summary', $layout= '_ClientLayoutView') {

        setcookie('currenturl', $_SERVER['REQUEST_URI'], time()+36000000, '/');

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
		{
			show_404();
		}


        $data['layout'] = $layout;
        $data['page'] = $page;
        $data['area'] = $area;
        $this->load->helper('url');
        $data['_leftnavigation'] = $this->load->view('areas/assignments/shared/_LeftNavigationPartial.php', $data, true);

        $this->load->view("shared/_MasterLayout.php", $data);
		
	}
	
}