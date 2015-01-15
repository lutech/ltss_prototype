
<!-- Top level navigation -->
<div id="mainTabbedNav">
<a name="Top_Level_Navigation_Menu" id="Top_Level_Navigation_Menu" role="presentation" aria-hidden="true" class="ui-hide"></a>
<a href="#Main_Content" class="ui-hide js-skip-link">Skip to Main Content</a>
    <nav class="tabbed-nav">
        <ul>
            <?php require 'application/views/shared/_TopNavClientDefault.php'; ?>
        </ul>
    </nav>
</div>
<!-- Workpace Area-->
<div id="bodyContent" role="presentation">
<!-- Workspace Content Area-->
    <a name="Main_Content" id="Main_Content" role="presentation" aria-hidden="true" class="ui-hide"></a>
    <div id="workspace"  style="position: absolute; left: 0; 
        right: 0; top: 0; bottom: 0; overflow-y: auto !important; overflow-x: hidden !important;">
        <div class=" p-home-area" role="presentation" style="overflow-y: visible !important;">
            <!-- Messages/Alerts -->
            <div class="Message-Container hide-for-print" aria-live="assertive" aria-atomic="true" aria-relevant="all">
                <section class="message-wrapper">
                    <div id="messages">
                    </div>
                </section>
            </div>
            <!-- Content Body -->
            <div aria-labelledby="Home Page Content">
               <div class="genericform-style announcements">
                   <h2>Announcements</h2>
                   <p>Welcome to the LTSS Style/Code Guide! <br/><br/>
                       This site is still under development. There's nothing to show yet but try back again at a later date.</p>
               </div>
            </div>
        </div>
    </div>
    <a href="#Main_Content" class="ui-hide js-skip-link">Skip back to start of Main Content</a>
    <a href="#Top_Level_Navigation_Menu" class="ui-hide js-skip-link">Skip back to Top Level Navigation Menu</a>
    <a href="#Main_Application_Menu" tabindex="0" class="ui-hide js-skip-link">Skip back to Main Application Menu</a>
</div>
