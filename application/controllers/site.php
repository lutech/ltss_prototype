<?php 

	class Site extends CI_Controller {
		
	public function index() {
		$this->authorize();
	}
	public function loadview($area="account", $page="authorize", $layout="", $partial="", $subpage=""){
	
		$data['layout'] = $layout;
		$data['area'] = $area;
		$data['page'] = $page;
		$data['subpage'] = $subpage;
		$data['partial'] = $partial;
		$this->load->helper('url');
		$this->load->view("shared/_MasterLayout.php", $data);
	}
	
	public function authorize($area="account", $page="authorize"){
		if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
		{
			show_404();
		}	
		$this->loadview($area, $page);	
	}
		
	public function home($area="home", $page="home") {

        setcookie('currenturl', $_SERVER['REQUEST_URI'], time()+36000000, '/');

        if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
		{
			show_404();
		};
		
		if (isset($_COOKIE['role'])) {
            $role = $_COOKIE['role'];
			if ($role == 'client') {
				$layout = '_ClientLayoutView_CP';
				$page = "home_CP";
				$data['layout'] = $layout;
				$data['area'] = $area;
				$data['page'] = $page;
				$this->load->helper('url');
				$data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
				$this->load->view("shared/_MasterLayout_CP.php", $data);
				
			} else {
				$data['area'] = $area;
				$data['page'] = $page;			
				$this->load->helper('url');
				$this->load->view("shared/_MasterLayout.php", $data);
			};
		} else {
			$area = "account";
			$page = "authorize";
			$this->loadview($area, $page);	
		}
	}
	
	
	public function login(){
		
		if(isset($_POST['submit']))	{
			
        $username = $_POST['username'];
        require_once "application/accesscontrol/users.php";

        $url = '';
        if (isset($_COOKIE['currenturl']) && $_COOKIE['currenturl'] != ""){
            $this->load->helper('url');
            $url = $_COOKIE['currenturl'];
        } else {
            $this->load->helper('url');
            $url = base_url().'index.php/site/home';
        }
        header( "Location: $url" );

		} else {

				$this->load->helper('url');
				$url = base_url().'index.php';
				header( "Location: $url" );
		}

        setcookie('currenturl', '', time()+36000000, '/');
	}

	public function logout(){
		setcookie('role', '', time()+36000000, '/');
		setcookie('username', '', time()+36000000, '/');
		setcookie('loginname', ' ', time()+36000000, '/');
		setcookie('gender', ' ', time()+36000000, '/');
		setcookie('suffix', ' ', time()+36000000, '/');
		setcookie('userid', ' ', time()+36000000, '/');

		$this->load->helper('url');
		$url = base_url().'index.php';
		header( "Location: $url" );
	}


}
