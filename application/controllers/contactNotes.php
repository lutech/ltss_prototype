<?php

	class contactNotes extends CI_Controller {
			
	public function index( $area = 'contactNotes', $page = 'contactsearch') {
		
		if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
		{
			show_404();
		}	
		$this->contactNotessearch();
		
	}

	
	public function contactNotessearch( $area = 'contactNotes', $page = 'contactsearch', $layout= '_Search-DoubleRow-LayoutView') {

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

        public function newContact( $area = 'contactNotes', $page = 'newContact', $layout= '_ClientLayoutView') {

            if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
            {
                show_404();
            }

            $data['layout'] = $layout;
            $data['page'] = $page;
            $data['area'] = $area;
            $this->load->helper('url');
            $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationContactNotesPartial.php', $data, true);
            $this->load->view("shared/_MasterLayout.php", $data);
        }

        public function editContact( $area = 'contactNotes', $page = 'editContact', $layout= '_ClientLayoutView') {

            if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
            {
                show_404();
            }

            $data['layout'] = $layout;
            $data['page'] = $page;
            $data['area'] = $area;
            $this->load->helper('url');
            $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationContactNotesPartial.php', $data, true);
            $this->load->view("shared/_MasterLayout.php", $data);
        }
	
}