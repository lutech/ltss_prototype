<?php require "application/views/areas/{$area}/{$page}.php"; ?>

<!-- Workpace Area-->
<div id="bodyContent" role="presentation">
    <!-- Left Side Navigation-->
    <div id="sidenav" class="sidenav four columns sidenav-collapsed">
        <nav id="Main_Content_Menu" tabindex="0">
            <a href="#workspace" class="skip">Skip to Main Content</a>
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
    <div id="workspace" tabindex="0" role="main" class="twelve columns alpha">
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
            <div class="Message-Container hide-for-print" role="alert" aria-live="assertive" aria-atomic="true">
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
    <ul>
        <li><a href="#workspace" class="skip">Skip to Start of Main Content</a></li>
        <li><a href="#Main_Content_Menu" class="skip">Skip to Main Menu</a></li>
        <li><a href="#Secondary_Menu" class="skip">Skip to Secondary Menu</a></li>
    </ul>
</div>
<div style="clear: both;">
</div>
