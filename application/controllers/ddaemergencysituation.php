<?php


class DdaEmergencySituation extends CI_Controller {

    //Details
    public function details( $area = 'ddaapplication', $page = 'ddaemergencysituation/details', $layout= '_ClientLayoutView', $topnavtab = 'client') {

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

    //Create
    public function create( $area = 'ddaapplication', $page = 'ddaemergencysituation/create', $layout= '_ClientLayoutView', $topnavtab = 'client') {

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

    //Save
    public function save() {
        $newdate = new DateTime();
        $date =  $newdate->format('m/d/Y') . "\n";
        $username ="";

        if (isset($_COOKIE['username'])){
            $username = $_COOKIE['username'];
        }
        setcookie('ddaemergencysituationlastmodifiedby', $username, time()+36000000, '/');
        setcookie('ddaemergencysituationlastmodifieddate', $date, time()+36000000, '/');
        setcookie('ddaemergencysituationstatus', 'In Progress', time()+36000000, '/');
        setcookie('ddaemergencysituationactive', 'Inactive', time()+36000000, '/');
        setcookie('ddaemergencysituationdecision', '', time()+36000000, '/');
        setcookie('ddaemergencysituationcreatedate', $date, time()+36000000, '/');

        setcookie('regionalProgramSupervisorDecision', '', time()+36000000, '/');
        setcookie('regionalDirectorDecision', '', time()+36000000, '/');
        setcookie('ddaDirectorDecision', '', time()+36000000, '/');
        setcookie('denyReason', '', time()+36000000, '/');

        setcookie('confirmation', 'saved', time()+36000000, '/');
        $this->load->helper('url');
        $url = base_url().'index.php/ddaemergencysituation/details';
        header( "Location: $url" );
    }

    public function editdecisiononauthorization( $area = 'ddaapplication', $page = 'ddaemergencysituation/editDecisionOnAuthorization', $layout= '_ClientLayoutView', $topnavtab = 'client') {

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
    public function savedecisiononauthorization() {
            if(isset($_POST['submit']))	{

                if(isset($_POST['regionalProgramSupervisorDecision']))	{
                    $regionalProgramSupervisorDecision = $_POST['regionalProgramSupervisorDecision'];
                    setcookie('regionalProgramSupervisorDecision', $regionalProgramSupervisorDecision, time()+36000000, '/');

                    if ($regionalProgramSupervisorDecision == "approve") {
                        setcookie('denyReason', "", time()+36000000, '/');
                    } else if  ($regionalProgramSupervisorDecision == "deny") {
                        if(isset($_POST['denyReason']))	{
                            $denyReason = $_POST['denyReason'];
                            setcookie('denyReason', $denyReason, time()+36000000, '/');
                        }
                    }
                }
                if(isset($_POST['regionalDirectorDecision']))	{
                    $regionalDirectorDecision = $_POST['regionalDirectorDecision'];
                    setcookie('regionalDirectorDecision', $regionalDirectorDecision, time()+36000000, '/');

                    if ($regionalDirectorDecision == "approve") {
                        setcookie('denyReason', "", time()+36000000, '/');
                    } else if  ($regionalDirectorDecision == "deny") {
                        if(isset($_POST['denyReason']))	{
                            $denyReason = $_POST['denyReason'];
                            setcookie('denyReason', $denyReason, time()+36000000, '/');
                        }
                    }
                }
                if(isset($_POST['ddaDirectorDecision']))	{
                    $ddaDirectorDecision = $_POST['ddaDirectorDecision'];
                    setcookie('ddaDirectorDecision', $ddaDirectorDecision, time()+36000000, '/');

                    if ($ddaDirectorDecision == "approve") {
                        setcookie('denyReason', "", time()+36000000, '/');
                    } else if  ($ddaDirectorDecision == "deny") {
                        if(isset($_POST['denyReason']))	{
                            $denyReason = $_POST['denyReason'];
                            setcookie('denyReason', $denyReason, time()+36000000, '/');
                        }
                    }
                }


            setcookie('confirmation', 'saved', time()+36000000, '/');

            $this->load->helper('url');
            $url = base_url().'index.php/ddaemergencysituation/details';
            header( "Location: $url" );
        } else {

                setcookie('confirmation', 'error', time()+36000000, '/');

                $this->load->helper('url');
                $url = base_url().'index.php/ddaemergencysituation/details';
                header( "Location: $url" );
            }
    }

    //Submit
    public function submit() {
        $newdate = new DateTime();
        $date =  $newdate->format('m/d/Y') . "\n";
        if (isset($_COOKIE['username'])){
            $username = $_COOKIE['username'];
        }

        if (isset($_COOKIE['ddaemergencysituationstatus'])){
            if ($_COOKIE['ddaemergencysituationstatus'] == "In Progress") {
                if (isset($_COOKIE['regionalProgramSupervisorDecision'])) {
                    if ($_COOKIE['regionalProgramSupervisorDecision'] == "approve") {
                        setcookie('ddaemergencysituationstatus', 'Pending Regional Director Review', time()+36000000, '/');

                        setcookie('ddaemergencysituationlastmodifiedby', $username, time()+36000000, '/');
                        setcookie('ddaemergencysituationlastmodifieddate', $date, time()+36000000, '/');
                        setcookie('confirmation', 'submitted', time()+36000000, '/');
                        $this->load->helper('url');
                        $url = base_url().'index.php/ddaapplication/summary';
                        header( "Location: $url" );

                    } else if ($_COOKIE['regionalProgramSupervisorDecision'] == "deny") {
                        setcookie('ddaemergencysituationstatus', 'Complete', time()+36000000, '/');
                        setcookie('ddaemergencysituationactive', 'Active', time()+36000000, '/');
                        setcookie('ddaemergencysituationdecision', 'Denied by Regional Program Supervisor', time()+36000000, '/');

                        setcookie('ddaemergencysituationlastmodifiedby', $username, time()+36000000, '/');
                        setcookie('ddaemergencysituationlastmodifieddate', $date, time()+36000000, '/');
                        setcookie('confirmation', 'submitted', time()+36000000, '/');
                        $this->load->helper('url');
                        $url = base_url().'index.php/ddaapplication/summary';
                        header( "Location: $url" );
                    }
                } else {

                    setcookie('confirmation', 'error-submit', time()+36000000, '/');

                    $this->load->helper('url');
                    $url = base_url().'index.php/ddaemergencysituation/details';
                    header( "Location: $url" );
                }
            }
            else  if ($_COOKIE['ddaemergencysituationstatus'] == "Pending Regional Director Review") {
                if (isset($_COOKIE['regionalDirectorDecision'])) {
                    if ($_COOKIE['regionalDirectorDecision'] == "approve") {
                        setcookie('ddaemergencysituationstatus', 'Pending DDA Director Review', time()+36000000, '/');

                        setcookie('ddaemergencysituationlastmodifiedby', $username, time()+36000000, '/');
                        setcookie('ddaemergencysituationlastmodifieddate', $date, time()+36000000, '/');
                        setcookie('confirmation', 'submitted', time()+36000000, '/');
                        $this->load->helper('url');
                        $url = base_url().'index.php/ddaapplication/summary';
                        header( "Location: $url" );

                    } else if ($_COOKIE['regionalDirectorDecision'] == "deny") {
                        setcookie('ddaemergencysituationstatus', 'Complete', time()+36000000, '/');
                        setcookie('ddaemergencysituationactive', 'Active', time()+36000000, '/');
                        setcookie('ddaemergencysituationdecision', 'Denied by Regional Director', time()+36000000, '/');

                        setcookie('ddaemergencysituationlastmodifiedby', $username, time()+36000000, '/');
                        setcookie('ddaemergencysituationlastmodifieddate', $date, time()+36000000, '/');
                        setcookie('confirmation', 'submitted', time()+36000000, '/');
                        $this->load->helper('url');
                        $url = base_url().'index.php/ddaapplication/summary';
                        header( "Location: $url" );
                    }
                } else {

                    setcookie('confirmation', 'error-submit', time()+36000000, '/');

                    $this->load->helper('url');
                    $url = base_url().'index.php/ddaemergencysituation/details';
                    header( "Location: $url" );
                }
            }
            else  if ($_COOKIE['ddaemergencysituationstatus'] == "Pending DDA Director Review") {
                if (isset($_COOKIE['ddaDirectorDecision'])) {
                    if ($_COOKIE['ddaDirectorDecision'] == "approve") {
                        setcookie('ddaemergencysituationstatus', 'Complete', time()+36000000, '/');
                        setcookie('ddaemergencysituationactive', 'Active', time()+36000000, '/');
                        setcookie('ddaemergencysituationdecision', 'Approved', time()+36000000, '/');

                        setcookie('ddaemergencysituationlastmodifiedby', $username, time()+36000000, '/');
                        setcookie('ddaemergencysituationlastmodifieddate', $date, time()+36000000, '/');
                        setcookie('confirmation', 'submitted', time()+36000000, '/');
                        $this->load->helper('url');
                        $url = base_url().'index.php/ddaapplication/summary';
                        header( "Location: $url" );

                    } else if ($_COOKIE['ddaDirectorDecision'] == "deny") {
                        setcookie('ddaemergencysituationstatus', 'Complete', time()+36000000, '/');
                        setcookie('ddaemergencysituationactive', 'Active', time()+36000000, '/');
                        setcookie('ddaemergencysituationdecision', 'Denied by DDA Director', time()+36000000, '/');

                        setcookie('ddaemergencysituationlastmodifiedby', $username, time()+36000000, '/');
                        setcookie('ddaemergencysituationlastmodifieddate', $date, time()+36000000, '/');
                        setcookie('confirmation', 'submitted', time()+36000000, '/');
                        $this->load->helper('url');
                        $url = base_url().'index.php/ddaapplication/summary';
                        header( "Location: $url" );
                    }
                } else {

                    setcookie('confirmation', 'error-submit', time()+36000000, '/');

                    $this->load->helper('url');
                    $url = base_url().'index.php/ddaemergencysituation/details';
                    header( "Location: $url" );
                }

            } else {

                setcookie('confirmation', 'error', time()+36000000, '/');
                $this->load->helper('url');
                $url = base_url().'index.php/ddaapplication/summary';
                header( "Location: $url" );
            }
        }

    }

    //Approve
    public function approve() {
        $newdate = new DateTime();
        $date =  $newdate->format('m/d/Y') . "\n";
        if (isset($_COOKIE['username'])){
            $username = $_COOKIE['username'];
        }

        if (isset($_COOKIE['ddaemergencysituationstatus'])){
            if ($_COOKIE['ddaemergencysituationstatus'] == "In Progress") {
                setcookie('ddaemergencysituationstatus', 'Pending Regional Director Review', time()+36000000, '/');
            }
            else  if ($_COOKIE['ddaemergencysituationstatus'] == "Pending Regional Director Review") {
                setcookie('ddaemergencysituationstatus', 'Pending DDA Director Review', time()+36000000, '/');
            }
            else  if ($_COOKIE['ddaemergencysituationstatus'] == "Pending DDA Director Review") {
                setcookie('ddaemergencysituationstatus', 'Approved', time()+36000000, '/');
                setcookie('ddaemergencysituationactive', 'Active', time()+36000000, '/');
            }
        }

        setcookie('ddaemergencysituationlastmodifiedby', $username, time()+36000000, '/');
        setcookie('ddaemergencysituationlastmodifieddate', $date, time()+36000000, '/');


        setcookie('confirmation', 'submitted', time()+36000000, '/');

        $this->load->helper('url');
        $url = base_url().'index.php/ddaapplication/summary';
        header( "Location: $url" );
    }
    //Deny
    public function deny() {
        $newdate = new DateTime();
        $date =  $newdate->format('m/d/Y') . "\n";
        if (isset($_COOKIE['username'])){
            $username = $_COOKIE['username'];
        }

        if (isset($_COOKIE['ddaemergencysituationstatus'])){
            if ($_COOKIE['ddaemergencysituationstatus'] == "In Progress") {
                setcookie('ddaemergencysituationstatus', 'Denied', time()+36000000, '/');
            }
            else  if ($_COOKIE['ddaemergencysituationstatus'] == "Pending Regional Director Review") {
                setcookie('ddaemergencysituationstatus', 'Denied', time()+36000000, '/');
            }
            else  if ($_COOKIE['ddaemergencysituationstatus'] == "Pending DDA Director Review") {
                setcookie('ddaemergencysituationstatus', 'Denied', time()+36000000, '/');
            }
        }

        setcookie('ddaemergencysituationlastmodifiedby', $username, time()+36000000, '/');
        setcookie('ddaemergencysituationlastmodifieddate', $date, time()+36000000, '/');
        setcookie('ddaemergencysituationactive', 'Inactive', time()+36000000, '/');

        $this->load->helper('url');
        $url = base_url().'index.php/ddaapplication/summary';
        header( "Location: $url" );
    }

    //Discard
    public function discard() {
        $newdate = new DateTime();
        $date =  $newdate->format('m/d/Y') . "\n";
        if (isset($_COOKIE['username'])){
            $username = $_COOKIE['username'];
        }

        setcookie('ddaemergencysituationstatus', 'Discarded', time()+36000000, '/');
        setcookie('ddaemergencysituationlastmodifiedby', $username, time()+36000000, '/');
        setcookie('ddaemergencysituationlastmodifieddate', $date, time()+36000000, '/');
        setcookie('ddaemergencysituationactive', 'Inactive', time()+36000000, '/');
        setcookie('confirmation', 'discarded', time()+36000000, '/');

        $this->load->helper('url');
        $url = base_url().'index.php/ddaapplication/summary';
        header( "Location: $url" );
    }

}