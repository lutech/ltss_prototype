<?php
require "application/views/shared/tabMenuItem_builder.php";

echo new TabMenuItem("Home", "providerportal", "home", "home-icon", true,  $this->uri);
echo new TabMenuItem("My Organization", "assignments", "index", "client-match-icon", false,  $this->uri);
echo new TabMenuItem("My Assignments", "assignments", "index", "client-match-icon", false,  $this->uri);
echo new TabMenuItem("My Alerts", "alerts", "alerts", "client-match-icon", false,  $this->uri);
echo new TabMenuItem("People", "providerportalclientsearch", "clientsearch", "client-match-icon", false,  $this->uri);
//echo new TabMenuItem("Claims", "assignments", "index", "client-match-icon", false,  $this->uri);
//echo new TabMenuItem("Reports", "reports", "index", "reports-icon", false,  $this->uri);

?>
