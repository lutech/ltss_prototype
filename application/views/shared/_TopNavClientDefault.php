<?php
require "application/views/shared/tabMenuItem_builder.php";

//Parameters: TabMenuItem( Label, Area,View, Icon, IsClickable (Boolean), $this->uri )
echo new TabMenuItem("Home", "site", "alerts", "home-icon", true,  $this->uri);
echo new TabMenuItem($_COOKIE['CommonLabel_Clients'], "clients", "index", "client-match-icon", true,  $this->uri);
echo new TabMenuItem("My Lists", "mylists", "index", "list-icon", false,  $this->uri);
echo new TabMenuItem("Alerts", "alerts", "index", "alerts-icon", false,  $this->uri);
echo new TabMenuItem("Dashboard", "dashboard", "index", "dashboard-icon", false,  $this->uri);
echo new TabMenuItem("Assignments", "assignments", "index", "client-match-icon", true,  $this->uri);
echo new TabMenuItem("Reports", "reports", "index", "reports-icon", false,  $this->uri);

?>
