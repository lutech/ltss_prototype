<?php

class Prototypes extends CI_Controller {
    var $topnav = "areas/prototypes/shared/_LeftNavigationPartial.php";
    public function index( $area = 'prototypes', $page = 'index', $layout= '_ClientLayoutView', $topnav = 'application/views/areas/prototypes/shared/_TopNavPartial.php') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['layout'] = $layout;
        $data['page'] = $page;
        $data['area'] = $area;
        $data['topnav'] = $topnav;
        $this->load->helper('url');
        $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
        $data['_leftnavigation'] = $this->load->view('areas/prototypes/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);

    }


    public function esignbillofrightsdetails( $area = 'prototypes', $page = 'esignatures/billofrights/details', $layout= '_ClientLayoutView', $topnav = 'application/views/areas/prototypes/shared/_TopNavPartial.php') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }


        $data['layout'] = $layout;
        $data['page'] = $page;
        $data['area'] = $area;
        $data['topnav'] = $topnav;
        $this->load->helper('url');
        $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
        $data['_leftnavigation'] = $this->load->view('areas/prototypes/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);
    }

    public function esignbillofrightsedit( $area = 'prototypes', $page = 'esignatures/billofrights/edit', $layout= '_ClientLayoutView', $topnav = 'application/views/areas/prototypes/shared/_TopNavPartial.php') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }


        $data['layout'] = $layout;
        $data['page'] = $page;
        $data['area'] = $area;
        $data['topnav'] = $topnav;
        $this->load->helper('url');
        $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
        $data['_leftnavigation'] = $this->load->view('areas/prototypes/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);
    }

    public function esignpssmanage( $area = 'prototypes', $page = 'esignatures/pss/manage', $layout= '_ClientLayoutView', $topnav = 'application/views/areas/prototypes/shared/_TopNavPartial.php') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }


        $data['layout'] = $layout;
        $data['page'] = $page;
        $data['area'] = $area;
        $data['topnav'] = $topnav;
        $this->load->helper('url');
        $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
        $data['_leftnavigation'] = $this->load->view('areas/prototypes/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);
    }

    public function icfocdetails( $area = 'prototypes', $page = 'icfocform/details', $layout= '_ClientLayoutView', $topnav = 'application/views/areas/prototypes/shared/_TopNavPartial.php') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }


        $data['layout'] = $layout;
        $data['page'] = $page;
        $data['area'] = $area;
        $data['topnav'] = $topnav;
        $this->load->helper('url');
        $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
        $data['_leftnavigation'] = $this->load->view('areas/prototypes/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);
    }

    public function icfocedit( $area = 'prototypes', $page = 'icfocform/edit', $layout= '_ClientLayoutView', $topnav = 'application/views/areas/prototypes/shared/_TopNavPartial.php') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }


        $data['layout'] = $layout;
        $data['page'] = $page;
        $data['area'] = $area;
        $data['topnav'] = $topnav;
        $this->load->helper('url');
        $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
        $data['_leftnavigation'] = $this->load->view('areas/prototypes/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);
    }
}