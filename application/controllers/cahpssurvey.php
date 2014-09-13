<?php

class Cahpssurvey extends CI_Controller {

    public function index( $area = 'cahpssurvey', $page = 'history') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }
        $this->history();

    }

    public function history( $area = 'cahpssurvey', $page = 'history', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

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
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

    public function details( $area = 'cahpssurvey', $page = 'details', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

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
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }
    public function edit( $area = 'cahpssurvey', $page = 'edit', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['user'])) {
            $user = $_COOKIE['user'];
            if ($user == 'publicuser') {
                $layout = '_ClientLayoutView_CP';

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
                $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial.php', $data, true);
                $this->load->view("shared/_MasterLayout.php", $data);
            };
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php';
            header( "Location: $url" );
        }
    }

}