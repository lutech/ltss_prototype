<a href="#Main_Application_Menu" class="ui-hide">Skip to Main Application Menu</a>
<div id="LtssMarylandHeaderInfo" class="three columns logo" role="presentation">
    <h1><i>TEFT Prototype</i></h1>
</div>
<div id="userinfo" class="six columns">               
    <ul>
    	<?php 
			if (isset($_COOKIE['user'])){
				if ( $_COOKIE['user'] == 'admin'){													
					$loginname = $_COOKIE['username'];
					echo '
							<strong>'.$loginname.'</strong>
							<ul>
								<li>Organization Unit: Test Organization</li>
							</ul>
						 ';
				} 
				else if ( $_COOKIE['user'] == 'publicuser'){							
					$loginname = $_COOKIE['username'];
					echo '
							<strong>'.$loginname.'</strong>
						 ';
				}
			}
		?>        
    </ul>
</div>
<div id="ltss-mainmenu-container" class="three columns alpha omega hide-for-print" role="presentation">
    <nav id="Main_Application_Menu" tabindex="0">
        <a href="#mainTabbedNav" class="ui-hide">Skip to Top Level Navigation</a>
        <ul role="menubar" id="ltss-mainmenu" tabindex="0">
            <li role="menuitem"><a href="#Application_Menu" id="" onclick="return false" class="subMenuHeader">Menu</a>
                <ul role="menu">
                    <li role="menuitem"><a href="#" id="" onclick="return false" class="subMenuHeader">Main<span aria-hidden="true"> ></span></a>
                        <ul>
                            <li role="menuitem"><a href="#">Home</a></li>
                            <li role="menuitem"><a href="#">Clients</a></li>
                            <li role="menuitem"><a href="#">My Lists</a></li>
                            <li role="menuitem"><a href="#">Alerts</a></li>
                            <li role="menuitem"><a href="#">Dashboard</a></li>
                            <li role="menuitem"><a href="#">Assignments</a></li>
                            <li role="menuitem"><a href="#">Reports</a></li>
                        </ul>
                    </li>
                    <li role="menuitem"><a href="#" id="" onclick="return false" class="subMenuHeader">Administration<span aria-hidden="true"> ></span></a>
                        <ul role="menu">
                            <li role="menuitem"><a href="#">Organizations</a></li>
                            <li role="menuitem"><a href="#">Providers</a></li>
                            <li role="menuitem"><a href="#">Staff</a></li>
                        </ul>
                    </li>
                    <li role="menuitem"><a href="#" id="">Waiver<span aria-hidden="true"> ></span></a>
                        <ul role="menu">
                            <li role="menuitem"><a href="#">Waitlist</a></li>
                            <li role="menuitem"><a href="#">Waves</a></li>
                        </ul>
                    </li>
                    <li role="menuitem"><a href="#" id="" onclick="return false;" class="subMenuHeader">My Information<span aria-hidden="true"> ></span></a>
                        <ul role="menu">
                            <li role="menuitem"><a href="#">My Profile</a></li>
                            <li role="menuitem"><a href="#">My Organization</a></li>
                        </ul>
                    </li>
                    <li role="menuitem"><a href="#" id="" onclick="return false;" class="subMenuHeader">Tools<span aria-hidden="true"> ></span></a>
                        <ul role="menu">
                            <li role="menuitem"><a href="#">Ravend DB Management</a></li>
                            <li role="menuitem"><a href="#">Dyanamic Resource</a></li>
                            <li role="menuitem"><a href="#">User Roles</a></li>
                            <li role="menuitem"><a href="#">Lookups</a></li>
                            <li role="menuitem"><a href="#">Deployments</a></li>
                            <li role="menuitem"><a href="#">Attachments</a></li>
                            <li role="menuitem"><a href="#">Alert Definitions</a></li>
                            <li role="menuitem"><a href="#">Report Access</a></li>
                            <li role="menuitem"><a href="#">Model Metadata Definitions</a></li>
                            <li role="menuitem"><a href="#">Case Notes Access Control</a></li>
                            <li role="menuitem"><a href="#">LXService</a></li>
                        </ul>
                    </li>

                    <li role="menuitem"><a href="#" onclick="return false;" class="subMenuHeader">Audit Trail<span aria-hidden="true"> ></span></a>
                        <ul role="menu">
                            <li role="menuitem"><a href="#">Access Audit Trail</a></li>
                            <li role="menuitem"><a href="#">Workflow Audit Trail</a></li>
                        </ul>
                    </li>
                    <li role="menuitem"><a href="#" id="" onclick=" return false " class="subMenuHeader">Feedback<span
                        aria-hidden="true"> ></span></a>
                        <ul role="menu">
                            <li role="menuitem"><a href="#">List</a></li>
                            <li role="menuitem"><a href="#">Create</a></li>
                        </ul>
                    </li>                    
                    <li role="menuitem"><a href="#">Print</a></li>
                </ul>
            </li>
            <li role="menuitem"><a href="#Account_Menu" id="" onclick="return false" class="subMenuHeader">Account</a>
                <ul role="menu">
                    <li role="menuitem"><a href="#">Go To ISAS</a></li>
                    <li role="menuitem"><a href="<?php echo base_url().'index.php/site/authorize'?>">Authorize</a></li>
                    <li role="menuitem"><a href="<?php echo base_url().'index.php/site/logout'?>">Sign Out</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>