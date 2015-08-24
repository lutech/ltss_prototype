<?php

class ApplicationPacket extends CI_Controller {

    public function index( $area = 'applicationpacket', $page = 'history') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }
        $this->history();

    }


    public function history( $area = 'applicationpacket', $page = 'history', $layout= '_ClientLayoutView', $topnavtab = 'client') {

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


    public function save(){

        if($_POST['programtype'] != 0)	{

            $newdate = new DateTime();
            $date =  $newdate->format('m/d/Y') . "\n";
            $username = "";
            $programtype = "";

            if ($_POST['programtype'] == 1) {
                $programtype =  "NRW";
            }

            if (isset($_COOKIE['username'])){
                $username = $_COOKIE['username'];
            }

            setcookie('ddaapplicationpacketcreatedby', $username, time()+36000000, '/');
            setcookie('ddaapplicationpacketprogramtype', $programtype, time()+36000000, '/');
            setcookie('ddaapplicationpacketstatus', 'In Progress', time()+36000000, '/');
            setcookie('ddaapplicationpacketactive', 'Inactive', time()+36000000, '/');
            setcookie('ddaapplicationpacketcreatedate', $date, time()+36000000, '/');
            setcookie('ddaapplicationpacketcompletedate', '', time()+36000000, '/');
            setcookie('confirmation', 'saved', time()+36000000, '/');

            $this->load->helper('url');
            $url = base_url().'index.php/applicationpacket/summary';
            header( "Location: $url" );

        } else {

            setcookie('confirmation', 'error', time()+36000000, '/');
            setcookie('confirmationmsg', 'Program Type is Required', time()+36000000, '/');
            $this->load->helper('url');
            $url = base_url().'index.php/applicationpacket/history';
            header( "Location: $url" );
        }

    }

    public function submit(){

            $newdate = new DateTime();
            $date =  $newdate->format('m/d/Y') . "\n";

            if (isset($_COOKIE['ddaapplicationpacketstatus'])){
                 if ($_COOKIE['ddaapplicationpacketstatus'] == "In Progress") {
                     setcookie('ddaapplicationpacketstatus', 'Pending Regional Staff Review', time()+36000000, '/');
                     setcookie('confirmation', 'submitted', time()+36000000, '/');
                 }
                 else  if ($_COOKIE['ddaapplicationpacketstatus'] == "Pending Regional Staff Review") {
                     setcookie('ddaapplicationpacketstatus', 'Pending Waiver Unit Staff Review', time()+36000000, '/');
                     setcookie('confirmation', 'submitted', time()+36000000, '/');
                 }
                 else  if ($_COOKIE['ddaapplicationpacketstatus'] == "Pending Waiver Unit Staff Review") {
                     setcookie('ddaapplicationpacketstatus', 'Complete', time()+36000000, '/');
                     setcookie('ddaapplicationpacketcompletedate', $date, time()+36000000, '/');
                     setcookie('ddaapplicationpacketactive', 'Active', time()+36000000, '/');
                     setcookie('confirmation', 'submitted', time()+36000000, '/');
                 }
                 else if ($_COOKIE['ddaapplicationpacketstatus'] == "Clarification Requested by Regional Staff") {
                     setcookie('ddaapplicationpacketstatus', 'Pending Regional Staff Review', time()+36000000, '/');
                     setcookie('confirmation', 'submitted', time()+36000000, '/');
                 }
                 else  if ($_COOKIE['ddaapplicationpacketstatus'] == "Clarification Requested by Waiver Unit") {
                     setcookie('ddaapplicationpacketstatus', 'Pending Waiver Unit Staff Review', time()+36000000, '/');
                     setcookie('confirmation', 'submitted', time()+36000000, '/');
                 }

            } else {
                setcookie('confirmation', 'error', time()+36000000, '/');
            }

            $this->load->helper('url');
            $url = base_url().'index.php/applicationpacket/summary';
            header( "Location: $url" );

    }

    public function requestclarification(){

            $newdate = new DateTime();
            $date =  $newdate->format('m/d/Y') . "\n";

            if (isset($_COOKIE['ddaapplicationpacketstatus'])){
                if ($_COOKIE['ddaapplicationpacketstatus'] == "Pending Regional Staff Review") {
                    setcookie('ddaapplicationpacketstatus', 'Clarification Requested by Regional Staff', time()+36000000, '/');
                }
                else  if ($_COOKIE['ddaapplicationpacketstatus'] == "Pending Waiver Unit Staff Review") {
                    setcookie('ddaapplicationpacketstatus', 'Clarification Requested by Waiver Unit', time()+36000000, '/');
                }
            }
            setcookie('confirmation', 'submitted', time()+36000000, '/');

            $this->load->helper('url');
            $url = base_url().'index.php/applicationpacket/summary';
            header( "Location: $url" );

    }


    public function summary( $area = 'applicationpacket', $page = 'summary', $layout= '_ClientLayoutView', $topnavtab = 'client') {

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