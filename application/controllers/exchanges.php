<?php

	class Exchanges extends CI_Controller {
			
	public function index( $area = 'exchanges', $page = 'inbox') {
		
		if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
		{
			show_404();
		}	
		$this->inbox();
		
	}	
	
	public function inbox( $area = 'exchanges', $page = 'inbox', $layout= '_ClientLayoutView', $topnavtab = '') {
		
		if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
		{
			show_404();
		}		
		
		if (isset($_COOKIE['user'])) {			
			$user = $_COOKIE['user'];
			if ($user == 'publicuser') {
				$layout = '_ClientLayoutView_CP';
                $page = 'inbox_CP';
				$data['layout'] = $layout;
				$data['area'] = $area;
				$data['page'] = $page;
				$this->load->helper('url');
				$data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
				$this->load->view("shared/_MasterLayout_CP.php", $data);
				
			} else if ($user == 'admin') {					
				$data['layout'] = $layout;
				$data['page'] = $page;
				$data['area'] = $area;		
				$data['topnavtab'] = $topnavtab;
				$this->load->helper('url');		
				$data['_leftnavigation'] = $this->load->view('areas/exchanges/shared/_LeftNavigationPartial.php', $data, true);
				$this->load->view("shared/_MasterLayout.php", $data);
			};
		} else {
			$this->load->helper('url');
			$url = base_url().'index.php';
			header( "Location: $url" );	
		}
	}
	
	
	public function sent( $area = 'exchanges', $page = 'sent', $layout= '_ClientLayoutView', $topnavtab = '') {
		
		if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
		{
			show_404();
		}		
		
		if (isset($_COOKIE['user'])) {			
			$user = $_COOKIE['user'];
			if ($user == 'publicuser') {
				$layout = '_ClientLayoutView_CP';
                $page = 'sent_CP';
				$data['layout'] = $layout;
				$data['area'] = $area;
				$data['page'] = $page;
				$this->load->helper('url');
				$data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
				$this->load->view("shared/_MasterLayout_CP.php", $data);
				
			} else if ($user == 'admin') {					
				$data['layout'] = $layout;
				$data['page'] = $page;
				$data['area'] = $area;		
				$data['topnavtab'] = $topnavtab;
				$this->load->helper('url');		
				$data['_leftnavigation'] = $this->load->view('areas/exchanges/shared/_LeftNavigationPartial.php', $data, true);
				$this->load->view("shared/_MasterLayout.php", $data);
			};
		} else {
			$this->load->helper('url');
			$url = base_url().'index.php';
			header( "Location: $url" );	
		}
	}
}