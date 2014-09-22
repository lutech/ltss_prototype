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

            //ADD ALL USERS AND DEFINE USER ROLES HERE.

            //Client = Cicio Smith
			if ($username == 'ciciosmith') {		
				setcookie('role', 'client', time()+36000000, '/');
				setcookie('username', 'Cicio Smith', time()+36000000, '/');
				setcookie('loginname', $username, time()+36000000, '/');
				setcookie('gender', 'Male', time()+36000000, '/');
				setcookie('suffix', ' ', time()+36000000, '/');
				setcookie('userid', '98416818', time()+36000000, '/');
				
				$this->load->helper('url');
				$url = base_url().'index.php/site/home';
				header( "Location: $url" );
			}
            //Administrator = Admin
			else if ($username == 'admin') {							
				setcookie('role', 'admin', time()+36000000, '/');
				setcookie('username', 'Administrator', time()+36000000, '/');
				setcookie('organization', 'Division of Medicaid', time()+36000000, '/');
				setcookie('loginname', $username, time()+36000000, '/');
				setcookie('gender', 'Male', time()+36000000, '/');
				setcookie('suffix', 'Jr.', time()+36000000, '/');
				setcookie('userid', '84918569', time()+36000000, '/');
				
				$this->load->helper('url');
				$url = base_url().'index.php/site/home';
				header( "Location: $url" );
			
			} //Case Manager
			else if ($username == 'casemanager') {
				setcookie('role', 'casemanager', time()+36000000, '/');
				setcookie('username', 'Case Manager', time()+36000000, '/');
				setcookie('organization', 'Case Managers Org', time()+36000000, '/');
				setcookie('loginname', $username, time()+36000000, '/');
				setcookie('gender', 'Male', time()+36000000, '/');
				setcookie('suffix', 'Jr.', time()+36000000, '/');
				setcookie('userid', '84918569', time()+36000000, '/');

				$this->load->helper('url');
				$url = base_url().'index.php/site/home';
				header( "Location: $url" );

			} //Assessor = Albert Jones
			else if ($username == 'assessor') {
				setcookie('role', 'assessor', time()+36000000, '/');
				setcookie('username', 'Assessor', time()+36000000, '/');
				setcookie('organization', 'Assessor Org.', time()+36000000, '/');
				setcookie('loginname', $username, time()+36000000, '/');
				setcookie('gender', 'Male', time()+36000000, '/');
				setcookie('suffix', 'Jr.', time()+36000000, '/');
				setcookie('userid', '84918569', time()+36000000, '/');

				$this->load->helper('url');
				$url = base_url().'index.php/site/home';
				header( "Location: $url" );

			} //Nurse
			else if ($username == 'nurse') {
				setcookie('role', 'nurse', time()+36000000, '/');
				setcookie('username', 'Nurse', time()+36000000, '/');
				setcookie('organization', 'Nurse Org', time()+36000000, '/');
				setcookie('loginname', $username, time()+36000000, '/');
				setcookie('gender', 'Male', time()+36000000, '/');
				setcookie('suffix', 'Jr.', time()+36000000, '/');
				setcookie('userid', '84918569', time()+36000000, '/');

				$this->load->helper('url');
				$url = base_url().'index.php/site/home';
				header( "Location: $url" );

			} //Physician
			else if ($username == 'physician') {
				setcookie('role', 'physician', time()+36000000, '/');
				setcookie('username', 'Physician', time()+36000000, '/');
				setcookie('organization', 'Physician Org', time()+36000000, '/');
				setcookie('loginname', $username, time()+36000000, '/');
				setcookie('gender', 'Male', time()+36000000, '/');
				setcookie('suffix', 'Jr.', time()+36000000, '/');
				setcookie('userid', '84918569', time()+36000000, '/');

				$this->load->helper('url');
				$url = base_url().'index.php/site/home';
				header( "Location: $url" );

			} else {
				setcookie('role', '', time()+36000000, '/');
				setcookie('username', '', time()+36000000, '/');
                setcookie('organization', '', time()+36000000, '/');
                setcookie('loginname', ' ', time()+36000000, '/');
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
