<?php


class DdaEligibilityApplication extends CI_Controller {

    public function index( $area = 'ddaeligibilityapplication', $page = 'history') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }
        $this->history();

    }


    public function details( $area = 'ddaapplication', $page = 'ddaeligibilityapplication/details', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        setcookie('currenturl', $_SERVER['REQUEST_URI'], time()+36000000, '/');

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['role'])) {
            $role = $_COOKIE['role'];
            if ($role == 'client') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else {
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

    public function create( $area = 'ddaapplication', $page = 'ddaeligibilityapplication/create', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        setcookie('currenturl', $_SERVER['REQUEST_URI'], time()+36000000, '/');

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['role'])) {
            $role = $_COOKIE['role'];
            if ($role == 'client') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else {
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


    public function save() {
        $newdate = new DateTime();
        $date =  $newdate->format('m/d/Y') . "\n";
        $username ="";

        if (isset($_COOKIE['username'])){
            $username = $_COOKIE['username'];
        }
        setcookie('ddaeligibilityapplicationlastmodifiedby', $username, time()+36000000, '/');

        setcookie('confirmation', 'saved', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationstatus', 'In Progress', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationactive', 'Inactive', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationlastmodifieddate', $date, time()+36000000, '/');
        setcookie('ddaeligibilityapplicationdatecurrentstatusattained', $date, time()+36000000, '/');
        setcookie('ddaeligibilityapplicationapplicationdate', $date, time()+36000000, '/');

        $this->load->helper('url');
        $url = base_url().'index.php/ddaeligibilityapplication/details';
        header( "Location: $url" );
    }

    public function requestinformation() {
        $newdate = new DateTime();
        $date =  $newdate->format('m/d/Y') . "\n";
        if (isset($_COOKIE['username'])){
            $username = $_COOKIE['username'];
        }
        setcookie('ddaeligibilityapplicationlastmodifiedby', $username, time()+36000000, '/');

        setcookie('confirmation', 'saved', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationstatus', 'Information Requested', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationactive', 'Inactive', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationlastmodifieddate', $date, time()+36000000, '/');
        setcookie('ddaeligibilityapplicationdatecurrentstatusattained', $date, time()+36000000, '/');

        $this->load->helper('url');
        $url = base_url().'index.php/ddaapplication/summary';
        header( "Location: $url" );
    }

    public function submit() {
        $newdate = new DateTime();
        $date =  $newdate->format('m/d/Y') . "\n";
        if (isset($_COOKIE['username'])){
            $username = $_COOKIE['username'];
        }

        if (isset($_COOKIE['ddaeligibilityapplicationstatus'])){
            if ($_COOKIE['ddaeligibilityapplicationstatus'] == "In Progress") {
                setcookie('ddaeligibilityapplicationstatus', 'Complete', time()+36000000, '/');
                setcookie('ddaeligibilityapplicationactive', 'Active', time()+36000000, '/');
            }
            else  if ($_COOKIE['ddaeligibilityapplicationstatus'] == "Information Requested") {
                setcookie('ddaeligibilityapplicationstatus', 'In Progress', time()+36000000, '/');
            }
        }

        setcookie('ddaeligibilityapplicationlastmodifiedby', $username, time()+36000000, '/');
        setcookie('confirmation', 'submitted', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationlastmodifieddate', $date, time()+36000000, '/');
        setcookie('ddaeligibilityapplicationdatecurrentstatusattained', $date, time()+36000000, '/');
        setcookie('ddaeligibilityapplicationcompletiondate', $date, time()+36000000, '/');

        $this->load->helper('url');
        $url = base_url().'index.php/ddaapplication/summary';
        header( "Location: $url" );
    }

    public function revise() {
        $newdate = new DateTime();
        $date =  $newdate->format('m/d/Y') . "\n";
        if (isset($_COOKIE['username'])){
            $username = $_COOKIE['username'];
        }
        setcookie('ddaeligibilityapplicationlastmodifiedby', $username, time()+36000000, '/');

        setcookie('ddaeligibilityapplicationstatus', 'In Progress', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationactive', 'Inactive', time()+36000000, '/');
        setcookie('confirmation', 'saved', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationlastmodifieddate', $date, time()+36000000, '/');
        setcookie('ddaeligibilityapplicationdatecurrentstatusattained', $date, time()+36000000, '/');
        setcookie('ddaeligibilityapplicationapplicationdate', $date, time()+36000000, '/');
        setcookie('ddaeligibilityapplicationcompletiondate', "", time()+36000000, '/');

        $this->load->helper('url');
        $url = base_url().'index.php/ddaeligibilityapplication/details';
        header( "Location: $url" );
    }
    public function discard() {
        $newdate = new DateTime();
        $date =  $newdate->format('m/d/Y') . "\n";
        if (isset($_COOKIE['username'])){
            $username = $_COOKIE['username'];
        }
        setcookie('ddaeligibilityapplicationlastmodifiedby', $username, time()+36000000, '/');

        setcookie('ddaeligibilityapplicationstatus', 'Discarded', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationactive', 'Inactive', time()+36000000, '/');
        setcookie('confirmation', 'discarded', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationlastmodifieddate', $date, time()+36000000, '/');
        setcookie('ddaeligibilityapplicationdatecurrentstatusattained', $date, time()+36000000, '/');

        $this->load->helper('url');
        $url = base_url().'index.php/ddaapplication/summary';
        header( "Location: $url" );
    }

    public function editapplicantsinformation( $area = 'ddaapplication', $page = 'ddaeligibilityapplication/editApplicantsInformation', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        setcookie('currenturl', $_SERVER['REQUEST_URI'], time()+36000000, '/');

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['role'])) {
            $role = $_COOKIE['role'];
            if ($role == 'client') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else {
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
    public function saveapplicantsinformation() {
        $newdate = new DateTime();
        $date =  $newdate->format('m/d/Y') . "\n";
        if (isset($_COOKIE['username'])){
            $username = $_COOKIE['username'];
        }
        setcookie('ddaeligibilityapplicationlastmodifiedby', $username, time()+36000000, '/');

        setcookie('confirmation', 'saved', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationlastmodifieddate', $date, time()+36000000, '/');

        $this->load->helper('url');
        $url = base_url().'index.php/ddaeligibilityapplication/details';
        header( "Location: $url" );
    }
    public function savenextapplicantsinformation() {
        $newdate = new DateTime();
        $date =  $newdate->format('m/d/Y') . "\n";
        if (isset($_COOKIE['username'])){
            $username = $_COOKIE['username'];
        }
        setcookie('ddaeligibilityapplicationlastmodifiedby', $username, time()+36000000, '/');

        setcookie('confirmation', 'saved', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationlastmodifieddate', $date, time()+36000000, '/');

        $this->load->helper('url');
        $url = base_url().'index.php/ddaeligibilityapplication/applicantsselfassessment/edit';
        header( "Location: $url" );
    }

    public function editapplicantsselfassessment( $area = 'ddaapplication', $page = 'ddaeligibilityapplication/editApplicantsSelfAssessment', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        setcookie('currenturl', $_SERVER['REQUEST_URI'], time()+36000000, '/');

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['role'])) {
            $role = $_COOKIE['role'];
            if ($role == 'client') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else {
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


    public function saveapplicantsselfassessment() {
        $newdate = new DateTime();
        $date =  $newdate->format('m/d/Y') . "\n";
        if (isset($_COOKIE['username'])){
            $username = $_COOKIE['username'];
        }
        setcookie('ddaeligibilityapplicationlastmodifiedby', $username, time()+36000000, '/');

        setcookie('confirmation', 'saved', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationlastmodifieddate', $date, time()+36000000, '/');

        $this->load->helper('url');
        $url = base_url().'index.php/ddaeligibilityapplication/details';
        header( "Location: $url" );
    }
    public function savenextapplicantsselfassessment() {
        $newdate = new DateTime();
        $date =  $newdate->format('m/d/Y') . "\n";
        if (isset($_COOKIE['username'])){
            $username = $_COOKIE['username'];
        }
        setcookie('ddaeligibilityapplicationlastmodifiedby', $username, time()+36000000, '/');

        setcookie('confirmation', 'saved', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationlastmodifieddate', $date, time()+36000000, '/');

        $this->load->helper('url');
        $url = base_url().'index.php/ddaeligibilityapplication/documentation/manage';
        header( "Location: $url" );
    }

    public function managedocumentation( $area = 'ddaapplication', $page = 'ddaeligibilityapplication/manageDocumentation', $layout= '_ClientLayoutView', $topnavtab = 'client') {

        setcookie('currenturl', $_SERVER['REQUEST_URI'], time()+36000000, '/');

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        if (isset($_COOKIE['role'])) {
            $role = $_COOKIE['role'];
            if ($role == 'client') {
                $layout = '_ClientLayoutView_CP';

                $data['layout'] = $layout;
                $data['area'] = $area;
                $data['page'] = $page;
                $this->load->helper('url');
                $data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
                $this->load->view("shared/_MasterLayout_CP.php", $data);

            } else {
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