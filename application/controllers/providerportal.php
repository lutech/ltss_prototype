<?php

class ProviderPortal extends CI_Controller {

    public function home( $area = 'providerportal', $page = 'home/home', $layout= '_MasterDetailLayout', $topnav = 'application/views/areas/providerportal/shared/_TopNavPartial.php') {

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
        $data['_leftnavigation'] = $this->load->view('areas/providerportal/home/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);

    }

    public function clientsearch( $area = 'providerportal', $page = 'home/clientsearch', $layout= '_MasterDetailLayout', $topnav = 'application/views/areas/providerportal/shared/_TopNavPartial.php') {

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
        $data['_leftnavigation'] = $this->load->view('areas/providerportal/home/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);

    }

    public function servicesearch( $area = 'providerportal', $page = 'home/servicesearch', $layout= '_MasterDetailLayout', $topnav = 'application/views/areas/providerportal/shared/_TopNavPartial.php') {

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
        $data['_leftnavigation'] = $this->load->view('areas/providerportal/home/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);

    }
    public function myclients( $area = 'providerportal', $page = 'home/myclients', $layout= '_MasterDetailLayout', $topnav = 'application/views/areas/providerportal/shared/_TopNavPartial.php') {

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
        $data['_leftnavigation'] = $this->load->view('areas/providerportal/home/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);

    }
    public function alerts( $area = 'providerportal', $page = 'home/alerts', $layout= '_MasterDetailLayout', $topnav = 'application/views/areas/providerportal/shared/_TopNavPartial.php') {

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
        $data['_leftnavigation'] = $this->load->view('areas/providerportal/home/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);

    }
    public function announcements( $area = 'providerportal', $page = 'home/announcements', $layout= '_MasterDetailLayout', $topnav = 'application/views/areas/providerportal/shared/_TopNavPartial.php') {

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
        $data['_leftnavigation'] = $this->load->view('areas/providerportal/home/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);

    }

    public function helpandsupport( $area = 'providerportal', $page = 'home/helpandsupport', $layout= '_MasterDetailLayout', $topnav = 'application/views/areas/providerportal/shared/_TopNavPartial.php') {

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
        $data['_leftnavigation'] = $this->load->view('areas/providerportal/home/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);

    }

}