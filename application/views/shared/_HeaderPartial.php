<a href="#Main_Application_Menu" class="ui-hide">Skip to Main Application Menu</a>
<div id="LtssMarylandHeaderInfo" class="three columns logo" role="presentation">
    <h1><i><?php echo $_COOKIE['CommonLabel_Application']; ?></i></h1>
</div>
<div id="userinfo" class="six columns">               
    <ul>
    	<?php
			if (isset($_COOKIE['role'])){

                $loginname = $_COOKIE['username'];
                $organization = $_COOKIE['organization'];

                echo '
                        <strong>'.$loginname.'</strong>
                        <ul>
//                            <li>Organization Unit: '.$organization.'</li>
                                <li>Provider Agency ABC</li>
                        </ul>
                     ';
            }
		?>        
    </ul>
</div>
<div id="ltss-mainmenu-container" class="three columns alpha omega hide-for-print" role="presentation">
    <nav id="Main_Application_Menu" tabindex="0">
        <a href="#mainTabbedNav" class="ui-hide">Skip to Top Level Navigation</a>
        <?php
        if (isset($_COOKIE['role'])){
            if (!empty($_COOKIE['role'])){
                echo '
							<ul role="menubar" id="ltss-mainmenu" tabindex="0">
            <li role="menuitem"><a href="#Application_Menu" id="" onclick="return false" class="subMenuHeader">Menu</a>
                <ul role="menu">
                    <li role="menuitem"><a href="#" id="" onclick="return false" class="subMenuHeader">Main<span aria-hidden="true"> ></span></a>
                        <ul>
                            <li role="menuitem"><a href="'.base_url().'index.php/site/home">Home</a></li>
                            <li role="menuitem"><a href="'.base_url().'index.php/clients/index"">'.$_COOKIE["CommonLabel_Clients"].'</a></li>
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
                    <li role="menuitem"><a href="#" id="">Waitlists<span aria-hidden="true"> ></span></a>
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
                    <li role="menuitem"><a href="'.base_url().'index.php/prototypes/index" id="" class="subMenuHeader">Prototypes<span aria-hidden="true"> ></span></a>
                    </li>
                    <li role="menuitem"><a href="#">Print</a></li>
                </ul>
            </li>
            <li role="menuitem"><a href="#Account_Menu" id="" onclick="return false" class="subMenuHeader">Account</a>
                <ul role="menu">
                    <li role="menuitem"><a href="'.base_url().'index.php/providerportal/home" id="" class="subMenuHeader">Provider Portal<span aria-hidden="true"> ></span></a>
                    </li>
                    <li role="menuitem"><a href="'.base_url().'index.php/site/logout">Sign Out</a></li>
                </ul>
            </li>
        </ul>
						 ';
            }
        }
        ?>

    </nav>
</div>