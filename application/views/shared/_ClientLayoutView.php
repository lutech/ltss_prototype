<?php require "application/views/areas/{$area}/{$page}.php"; ?>

<!-- Top level navigation -->
<div id="mainTabbedNav" tabindex="0">
    <a href="#Client_Profile_Summary" class="ui-hide">Skip to Summary</a>
    <nav class="tabbed-nav">
        <ul>
           <?php require 'application/views/shared/_TopNavClientDefault.php';
		   		if (!empty($topnavtab)) {
					if ($topnavtab == 'client') {
						echo '<li><a href="#" class="ltss-icon-left client-details-icon selected">'.$_COOKIE["CommonLabel_Clients_Ownership"].' Details</a></li>';
					};
				};
		   ?>
        </ul>
    </nav>
</div>
<!-- Workpace Area-->
<div id="bodyContent" role="presentation">
    <!-- Left Side Navigation-->
    <div id="sidenav" class="sidenav">
        <div class="LeftContentNav-clientinfo" id="Client_Profile_Summary" tabindex="0">
            <a href="#Main_Content_Menu" class="ui-hide">Skip to Main Content Menu</a>
            <?php 
				if(!empty($_breadcrumbarea)) {
					echo $_breadcrumbarea;
				}
			?>
        </div>
        <nav id="Main_Content_Menu" tabindex="0">
            <a href="#workspace" class="ui-hide">Skip to Main Content</a>
            <div class="hide-for-print" id="lftNav">
               <?php
						if(!empty($_leftnavigation)) {
							echo $_leftnavigation;
						}
					?>
            </div>
        </nav>
    </div>
    <!-- Main_Content Content Area-->
    <div id="workspace" tabindex="0"@* role="main"*@>
        <div role="presentation" class="workspace p-client-layout">
            <div class="selection-summaryinfo">
                <div role="presentation">
                    <?php 
						if(!empty($WorkspaceHeader)) {
							echo $WorkspaceHeader; 
						}
					?>
                </div>
            </div>
            <!-- Messages/Alerts -->
            <div class="Message-Container hide-for-print" aria-live="assertive" aria-atomic="true" role="alert">
                <?php 
						if(!empty($Message)) {
							echo $Message; 
						}
					?>
            </div>
            <!-- Content Body -->
            <div class="workspace-content-container" id="workspace-maincontent">
                <?php 
						if(!empty($Body)) {
							echo $Body; 
						}
					?>
            </div>
        </div>
    </div>
    <a href="#workspace" class="ui-hide">Skip back to start of Main Content</a>
    <a href="#Main_Content_Menu" class="ui-hide">Skip back to Main Content Menu</a>
    <a href="#mainTabbedNav" class="ui-hide">Skip back to Top Level Navigation</a>
    <a href="#Main_Application_Menu" tabindex="0" class="ui-hide">Skip back to Main Application Menu</a>
</div>
<div style="clear: both;">
</div>
