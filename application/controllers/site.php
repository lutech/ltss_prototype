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
		if ( ! file_exists('application/views/areas/'.$area.'/'.$page.'.php'))
		{
			show_404();
		};
		
		if (isset($_COOKIE['user'])) {			
			$user = $_COOKIE['user'];
			if ($user == 'publicuser') {
				$layout = '_ClientLayoutView_CP';
				$page = "home_CP";
				$data['layout'] = $layout;
				$data['area'] = $area;
				$data['page'] = $page;
				$this->load->helper('url');
				$data['_leftnavigation'] = $this->load->view('shared/_LeftNavigationPartial_CP.php', $data, true);
				$this->load->view("shared/_MasterLayout_CP.php", $data);
				
			} else if ($user == 'admin') {	
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
			
			if ($username == 'ciciosmith') {		
				setcookie('user', 'publicuser', time()+3600, '/');
				setcookie('username', 'Cicio Smith', time()+3600, '/');
				setcookie('loginname', $username, time()+3600, '/');
				setcookie('gender', 'Female', time()+3600, '/');
				setcookie('suffix', ' ', time()+3600, '/');
				setcookie('userid', '98416818', time()+3600, '/');
				
				$this->load->helper('url');
				$url = base_url().'index.php/site/home';
				header( "Location: $url" );
			}
			else if ($username == 'admin') {							
				setcookie('user', 'admin', time()+3600, '/');
				setcookie('username', 'Administrator', time()+3600, '/');
				setcookie('loginname', $username, time()+3600, '/');
				setcookie('gender', 'Male', time()+3600, '/');
				setcookie('suffix', 'Jr.', time()+3600, '/');
				setcookie('userid', '84918569', time()+3600, '/');
				
				$this->load->helper('url');
				$url = base_url().'index.php/site/home';
				header( "Location: $url" );
			
			} else {
				setcookie('user', 'publicvisitor', time()+36000000, '/');
				setcookie('username', 'unknown', time()+36000000, '/');
				setcookie('loginname', ' ', time()+3600, '/');
				setcookie('gender', ' ', time()+36000000, '/');
				setcookie('suffix', ' ', time()+36000000, '/');
				setcookie('userid', ' ', time()+36000000, '/');
				
				$this->load->helper('url');
				$url = base_url().'index.php';
				header( "Location: $url" );
			}
		} else {
			
				$this->load->helper('url');
				$url = base_url().'index.php';
				header( "Location: $url" );
		}
		
	}
	
	public function logout(){
		setcookie('user', 'publicvisitor', time()+36000000, '/');
		setcookie('username', 'unknown', time()+36000000, '/');
		setcookie('loginname', ' ', time()+3600, '/');
		setcookie('gender', ' ', time()+36000000, '/');
		setcookie('suffix', ' ', time()+36000000, '/');
		setcookie('userid', ' ', time()+36000000, '/');
						
		$this->load->helper('url');
		$url = base_url().'index.php';
		header( "Location: $url" );
	}
	

}
