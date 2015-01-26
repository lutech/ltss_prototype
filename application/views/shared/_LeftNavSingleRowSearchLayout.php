<?php require "application/views/areas/{$area}/{$page}.php"; ?>

<!-- Top level navigation -->
<div id="mainTabbedNav" tabindex="0">
    <a href="#Client_Profile_Summary" class="ui-hide">Skip to Summary</a>
    <nav class="tabbed-nav">
        <ul>
            <?php require 'application/views/shared/_TopNavClientDefault.php';
            ?>
        </ul>
    </nav>
</div>
<!-- Workpace Area-->
<div id="bodyContent" role="presentation">
    <!-- Left Side Navigation-->
    <div id="sidenav" class="sidenav">
        <a name="Client_Profile_Summary" id="Client_Profile_Summary" role="presentation" aria-hidden="true" class="ui-hide"></a>
        <a href="#Main_Content_Menu" class="ui-hide js-skip-link">Skip to Main Content Menu</a>
        <div class="LeftContentNav-clientinfo">
            <?php
            if(!empty($_breadcrumbarea)) {
                echo $_breadcrumbarea;
            }
            ?>

            <a name="Main_Content_Menu" id="Main_Content_Menu" role="presentation" aria-hidden="true" class="ui-hide"></a>
            <a href="#Main_Content" class="ui-hide js-skip-link">Skip to Main Content</a>
            <nav role="presentation">
                <?php
                if(!empty($_leftnavigation)) {
                    echo $_leftnavigation;
                }
                ?>
            </nav>
        </div>
    </div>
        <!-- Workspace Content Area-->
        <a name="Main_Content" id="Main_Content" role="presentation" aria-hidden="true" class="ui-hide"></a>
        <div id="workspace" >
            <div class="workspace p-valign-two" role="presentation">
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
                <div class="searchspace-content-container-one">
            <?php
            if(!empty($Body)) {
                echo $Body;
            }
            ?>
                </div>
            </div>
        </div>
        <a href="#Main_Content" class="ui-hide js-skip-link">Skip back to start of Main Content</a>
        <a href="#Main_Content_Menu" class="ui-hide js-skip-link">Skip back to Main Content Menu</a>
        <a href="#Top_Level_Navigation_Menu" class="ui-hide js-skip-link">Skip back to Top Level Navigation Menu</a>
        <a href="#Main_Application_Menu" tabindex="0" class="ui-hide js-skip-link">Skip back to Main Application Menu</a>
    </div>
<div style="clear: both;">
</div>
