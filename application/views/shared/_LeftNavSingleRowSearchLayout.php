<?php require "application/views/areas/{$area}/{$page}.php"; ?>

<!-- Top level navigation -->
<div id="mainTabbedNav">
    <a name="Top_Level_Navigation_Menu" id="Top_Level_Navigation_Menu" role="presentation" aria-hidden="true" class="ui-hide"></a>
    <a href="#Main_Content_Menu" class="ui-hide js-skip-link">Skip to Main Content Menu</a>
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
<!-- Workpace Area-->
<div id="bodyContent" role="presentation">
    <!-- Left Side Navigation-->
    <div id="sidenav" class="sidenav">
        <a name="Main_Content_Menu" id="Main_Content_Menu" role="presentation" aria-hidden="true" class="ui-hide"></a>
        <a href="#Main_Content" class="ui-hide js-skip-link">Skip to Main Content</a>
        <nav>
            <div class="hide-for-print" id="lftNav">
                <?php
                if(!empty($_leftnavigation)) {
                    echo $_leftnavigation;
                }
                ?>
            </div>
        </nav>
    </div>
    <!-- Workspace Content Area-->
    <a name="Main_Content" id="Main_Content" role="presentation" aria-hidden="true" class="ui-hide"></a>
    <div id="workspace" >
        <div class="workspace" role="presentation">
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
                <section class="message-wrapper">
                    <div id="messages">
                    </div>
                </section>
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
