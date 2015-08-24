<?php

class ProviderClient extends CI_Controller {

    public function clientsummary( $area = 'providerportal', $page = 'client/clientsummary', $layout= '_ClientLayoutView', $topnav = 'application/views/areas/providerportal/shared/_TopNavPartial.php', $topnavtab = 'client') {

        setcookie('currenturl', $_SERVER['REQUEST_URI'], time()+36000000, '/');

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['layout'] = $layout;
        $data['page'] = $page;
        $data['area'] = $area;
        $data['topnav'] = $topnav;
        $data['topnavtab'] = $topnavtab;
        $this->load->helper('url');
        $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
        $data['_leftnavigation'] = $this->load->view('areas/providerportal/client/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);

    }
    public function psshistory( $area = 'providerportal', $page = 'client/pss/history', $layout= '_ClientLayoutView', $topnav = 'application/views/areas/providerportal/shared/_TopNavPartial.php', $topnavtab = 'client') {

        setcookie('currenturl', $_SERVER['REQUEST_URI'], time()+36000000, '/');

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['layout'] = $layout;
        $data['page'] = $page;
        $data['area'] = $area;
        $data['topnav'] = $topnav;
        $data['topnavtab'] = $topnavtab;
        $this->load->helper('url');
        $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
        $data['_leftnavigation'] = $this->load->view('areas/providerportal/client/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);

    }
    public function psssummary( $area = 'providerportal', $page = 'client/pss/summary', $layout= '_ClientLayoutView', $topnav = 'application/views/areas/providerportal/shared/_TopNavPartial.php', $topnavtab = 'client') {

        setcookie('currenturl', $_SERVER['REQUEST_URI'], time()+36000000, '/');

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['layout'] = $layout;
        $data['page'] = $page;
        $data['area'] = $area;
        $data['topnav'] = $topnav;
        $data['topnavtab'] = $topnavtab;
        $this->load->helper('url');
        $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
        $data['_leftnavigation'] = $this->load->view('areas/providerportal/client/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);

    }
    public function psstasks( $area = 'providerportal', $page = 'client/pss/tasks', $layout= '_ClientLayoutView', $topnav = 'application/views/areas/providerportal/shared/_TopNavPartial.php', $topnavtab = 'client') {

        setcookie('currenturl', $_SERVER['REQUEST_URI'], time()+36000000, '/');

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['layout'] = $layout;
        $data['page'] = $page;
        $data['area'] = $area;
        $data['topnav'] = $topnav;
        $data['topnavtab'] = $topnavtab;
        $this->load->helper('url');
        $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
        $data['_leftnavigation'] = $this->load->view('areas/providerportal/client/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);

    }
    public function psstasksalt( $area = 'providerportal', $page = 'client/pss/tasksalternate', $layout= '_ClientLayoutView', $topnav = 'application/views/areas/providerportal/shared/_TopNavPartial.php', $topnavtab = 'client') {

        setcookie('currenturl', $_SERVER['REQUEST_URI'], time()+36000000, '/');

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['layout'] = $layout;
        $data['page'] = $page;
        $data['area'] = $area;
        $data['topnav'] = $topnav;
        $data['topnavtab'] = $topnavtab;
        $this->load->helper('url');
        $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
        $data['_leftnavigation'] = $this->load->view('areas/providerportal/client/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);

    }
    public function medicationchangerequestnew( $area = 'providerportal', $page = 'client/pss/medicationchangerequest/create', $layout= '_ClientLayoutView', $topnav = 'application/views/areas/providerportal/shared/_TopNavPartial.php', $topnavtab = 'client') {

        setcookie('currenturl', $_SERVER['REQUEST_URI'], time()+36000000, '/');

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['layout'] = $layout;
        $data['page'] = $page;
        $data['area'] = $area;
        $data['topnav'] = $topnav;
        $data['topnavtab'] = $topnavtab;
        $this->load->helper('url');
        $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
        $data['_leftnavigation'] = $this->load->view('areas/providerportal/client/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);

    }
    public function medicationchangerequestview( $area = 'providerportal', $page = 'client/pss/medicationchangerequest/view', $layout= '_ClientLayoutView', $topnav = 'application/views/areas/providerportal/shared/_TopNavPartial.php', $topnavtab = 'client') {

        setcookie('currenturl', $_SERVER['REQUEST_URI'], time()+36000000, '/');

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['layout'] = $layout;
        $data['page'] = $page;
        $data['area'] = $area;
        $data['topnav'] = $topnav;
        $data['topnavtab'] = $topnavtab;
        $this->load->helper('url');
        $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
        $data['_leftnavigation'] = $this->load->view('areas/providerportal/client/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);

    }
    public function activitysupportplanmanage( $area = 'providerportal', $page = 'client/activitysupportplan/manage', $layout= '_ClientLayoutView', $topnav = 'application/views/areas/providerportal/shared/_TopNavPartial.php', $topnavtab = 'client') {

        setcookie('currenturl', $_SERVER['REQUEST_URI'], time()+36000000, '/');

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['layout'] = $layout;
        $data['page'] = $page;
        $data['area'] = $area;
        $data['topnav'] = $topnav;
        $data['topnavtab'] = $topnavtab;
        $this->load->helper('url');
        $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
        $data['_leftnavigation'] = $this->load->view('areas/providerportal/client/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);

    }
    public function activitysupportplandetails( $area = 'providerportal', $page = 'client/activitysupportplan/details', $layout= '_ClientLayoutView', $topnav = 'application/views/areas/providerportal/shared/_TopNavPartial.php', $topnavtab = 'client') {

        setcookie('currenturl', $_SERVER['REQUEST_URI'], time()+36000000, '/');

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['layout'] = $layout;
        $data['page'] = $page;
        $data['area'] = $area;
        $data['topnav'] = $topnav;
        $data['topnavtab'] = $topnavtab;
        $this->load->helper('url');
        $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
        $data['_leftnavigation'] = $this->load->view('areas/providerportal/client/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);

    }
    public function activitysupportplanedit( $area = 'providerportal', $page = 'client/activitysupportplan/edit', $layout= '_ClientLayoutView', $topnav = 'application/views/areas/providerportal/shared/_TopNavPartial.php', $topnavtab = 'client') {

        setcookie('currenturl', $_SERVER['REQUEST_URI'], time()+36000000, '/');

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['layout'] = $layout;
        $data['page'] = $page;
        $data['area'] = $area;
        $data['topnav'] = $topnav;
        $data['topnavtab'] = $topnavtab;
        $this->load->helper('url');
        $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
        $data['_leftnavigation'] = $this->load->view('areas/providerportal/client/shared/_LeftNavigationPartial.php', $data, true);
        $this->load->view("shared/_MasterLayout.php", $data);

    }
}