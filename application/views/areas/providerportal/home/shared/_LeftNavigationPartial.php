<?php require "application/views/shared/menuItem_builder.php"; ?>

<div>
    <ul class="left-side-nav js-accordion">
        <li>
            <?php echo new MenuItem("Dashboard", "providerportal", "home", "", true, false, "" , $this->uri);?>
        </li>
        <li>
            <?php echo new MenuItem("Clients", "providerportal", "clientsearch", "", true, false, "" , $this->uri);?>
        </li>
        <li>
            <?php echo new MenuItem("Service Activity", "providerportal", "servicesearch", "", true, false, "" , $this->uri);?>
        </li>
<!--        <li>-->
<!--            --><?php //echo new MenuItem("Clients", "providerportal", "myclients", "", true, false, "" , $this->uri);?>
<!--        </li>-->
        <li>
            <?php  echo new MenuItem("My Alerts", "providerportal", "alerts", "", true, false, "" , $this->uri);?>
        </li>
        <li>
            <?php echo new MenuItem("Announcements", "providerportal", "announcements", "", true, false, "" , $this->uri);?>
        </li>
        <li>
            <?php echo new MenuItem("Help & Support", "providerportal", "helpandsupport", "", true, false, "" , $this->uri);?>
        </li>
    </ul>
</div>

<!-- Menu Item Arguments
MenuItem( Friendly Label [string], Controller [string], Action [string], Icon Class [string], Clickable? [bool], Hidden Unless Active? [bool], Functions/Scripts [string], URI [Do Not Change]  )
-->