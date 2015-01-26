<?php

class Assignments extends CI_Controller {

    public function index( $area = 'assignments', $page = 'index', $layout= '_ClientLayoutView') {

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


    public function assignbystaff( $area = 'assignments', $page = 'assignbystaff', $layout= '_LeftNavSingleRowSearchLayout') {

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

    public function assignbyrole( $area = 'assignments', $page = 'assignbyrole', $layout= '_LeftNavSingleRowSearchLayout') {

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