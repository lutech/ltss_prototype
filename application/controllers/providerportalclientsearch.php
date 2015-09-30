<?php

    class providerportalclientsearch extends CI_Controller {

        public function clientsearch( $area = 'providerportal', $page = 'home/clientsearch', $layout= '_Search-DoubleRow-LayoutView', $topnav = 'application/views/areas/providerportal/shared/_TopNavPartial.php') {

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
        {
            show_404();
        }

        $data['layout'] = $layout;
        $data['page'] = $page;
        $data['area'] = $area;
        $data['topnav'] = $topnav;
        $this->load->helper('url');
        $this->load->view("shared/_MasterLayout.php", $data);

    }

//    public function myclients( $area = 'providerportal', $page = 'home/myclients', $layout= '_MasterDetailLayout', $topnav = 'application/views/areas/providerportal/shared/_TopNavPartial.php') {

//        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
//        {
//            show_404();
//        }

//        $data['layout'] = $layout;
//        $data['page'] = $page;
//        $data['area'] = $area;
//        $data['topnav'] = $topnav;
//        $this->load->helper('url');
//        $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
//        $data['_leftnavigation'] = $this->load->view('areas/providerportal/home/shared/_LeftNavigationPartial.php', $data, true);
//        $this->load->view("shared/_MasterLayout.php", $data);

//    }
//    public function alerts( $area = 'providerportal', $page = 'home/alerts', $layout= '_MasterDetailLayout', $topnav = 'application/views/areas/providerportal/shared/_TopNavPartial.php') {

//        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
//        {
//            show_404();
//        }

//        $data['layout'] = $layout;
//        $data['page'] = $page;
//        $data['area'] = $area;
//        $data['topnav'] = $topnav;
//        $this->load->helper('url');
//        $data['_breadcrumbarea'] = $this->load->view('shared/_ClientProfileBreadCrumbPartial.php', $data, true);
//        $data['_leftnavigation'] = $this->load->view('areas/providerportal/home/shared/_LeftNavigationPartial.php', $data, true);
//        $this->load->view("shared/_MasterLayout.php", $data);

//    }
}