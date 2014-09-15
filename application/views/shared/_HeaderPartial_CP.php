<a href="#Main_Application_Menu" class="ui-hide">Skip to Main Application Menu</a>
<div class="column-row no-margin header-container">
    <div class="three columns logo" role="presentation">
        <h1><i>Client Portal</i></h1>
    </div>
    <div id="LtssMarylandHeaderInfo" class="three columns logo ui-hide" role="presentation">
        <h1><i>LTSS Client Portal Prototype</i></h1>
    </div>
    
    <div class="three columns alpha omega middle-header">
        Department of<br/>Health and Mental Hygiene
    </div>

    <div id="userinfo" class="four columns ui-hide">                  
            <ul>
                <?php 
					if (isset($_COOKIE['user'])){
						if ( $_COOKIE['user'] == 'publicuser'){													
							$loginname = $_COOKIE['username'];
							echo '
									<strong>'.$loginname.'</strong>
									<ul>
										<li>Client ID: 846315684531</li>
									</ul>
								 ';
						} 
					}
				?>     
            </ul>
        }
    </div>
    
    <div id="ltss-mainmenu-container" class="hide-for-print six columns alpha omega" role="presentation"> 
        <div id="Secondary_Menu" class="column-row no-margin">
            <div class="twelve columns omega" style="text-align: right">
                <div class="top-snipets">
                    <ul>
                        <li>
                            <a id="font-size-reg" class="font-size-reg selected" href="#" onclick="return false;" title="font size small" aria-label="font size small">A</a>
                            <a id="font-size-med" class="font-size-med" href="#" onclick="return false;" title="font size medium" aria-label="font size medium">A</a>
                            <a id="font-size-lrg" class="font-size-lrg" href="#" onclick="return false;" title="font size large" aria-label="font size large">A</a>
                        </li>
                        <li>
                            <a href="#"><span class="icon-question-sign"></span> Help</a>
                        </li>
                    </ul>
                </div> 
                <div class="sign-out" tabindex="0">
                    <ul role="menubar" id="ltss-mainmenu" tabindex="0">                       
                        <li role="menuitem">
                            <a href="#Account_Menu" onclick="return false" class="subMenuHeader">
                                <span class=" icon-user"></span>
                                <h2>
                                    <?php 
                                        if ( $_COOKIE['user'] == 'publicuser'){													
                                            $loginname = $_COOKIE['username'];
                                            echo $loginname;
                                        } 
                                    ?> 
                                </h2>
                            </a>
                            <ul role="menu">
                                <li role="menuitem">
                                    <a href="<?php echo base_url().'index.php/site/logout'?>">Sign Out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>               
        </div>
    </div>
</div>

