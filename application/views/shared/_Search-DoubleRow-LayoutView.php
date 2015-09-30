<?php require "application/views/areas/{$area}/{$page}.php"; ?>
<!-- Top level navigation -->
<div id="mainTabbedNav">
    <a href="#Search_Fields" class="ui-hide js-skip-link">Skip to Search Fields</a>
    <nav class="tabbed-nav">
        <ul>
            <?php
            if (empty($topnav)) {
                require 'application/views/shared/_TopNavClientDefault.php';
                if (!empty($topnavtab)) {
                    if ($topnavtab == 'client') {
                        echo '<li><a href="#" class="ltss-icon-left client-details-icon selected">'.$_COOKIE["CommonLabel_Clients_Ownership"].' Details</a></li>';
                    };
                };
            } else {
                require "{$topnav}";
                if (!empty($topnavtab)) {
                    if ($topnavtab == 'client') {
                        echo '<li><a href="#" class="ltss-icon-left client-details-icon selected">'.$_COOKIE["CommonLabel_Clients_Ownership"].' Details</a></li>';
                    };
                };
            }
            ?>
        </ul>
    </nav>
</div>
<!-- Workspace Navigation container -->
<section class="workspacenav-container" id="Search_Fields">
    <a href="#Search_Results" class="ui-hide js-skip-link">Skip to Search Results</a>
    <!-- Search Field Area -->    
    <?php 
		if(!empty($SearchFieldArea)) {
			echo $SearchFieldArea; 
		}
	?>
    <!--@RenderSection("SearchFieldArea", false)-->
</section>
<!-- Workpace Area-->
<div id="bodyContent">
    <!-- Workspace Content Area-->
    <div id="workspace">
        <div class="full-workspace-two">
            <!-- Messages/Alerts -->
            <div class="Message-Container hide-for-print" aria-live="assertive" aria-atomic="true" role="alert">
                <!--@this.RenderSection("Message", @Html.Partial("_MessagePartial"))-->
            </div>
            <!-- Content Body -->
            <div class="fullworkspace-content-container" id="Search_Results">
                <div class="twelve columns">
                    <?php 
						if(!empty($Body)) {
							echo $Body; 
						}
					?>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="#Search_Fields" class="ui-hide js-skip-link">Skip back to Search Fields</a>
<a href="#mainTabbedNav" class="ui-hide js-skip-link">Skip back to Top Level Navigation Menu</a>
<a href="#Main_Application_Menu" class="ui-hide">Skip back to Main Application Menu</a>
<div style="clear: both;">
</div>
