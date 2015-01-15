<?php

class Css extends CI_Controller {

    public function index( $area = 'css', $page = 'basecss') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }
        $this->basecss();

    }


    public function basecss( $area = 'css', $page = 'basecss', $layout= '_ClientLayoutView') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['layout'] = $layout;
        $data['page'] = $page;
        $data['area'] = $area;
        $this->load->helper('url');
        $data['_leftnavigation'] = $this->load->view('areas/css/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);
    }


}