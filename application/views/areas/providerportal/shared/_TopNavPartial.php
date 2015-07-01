<?php
require "application/views/shared/tabMenuItem_builder.php";

echo new TabMenuItem("Home", "providerportal", "home", "home-icon", true,  $this->uri);
echo new TabMenuItem("Organization", "assignments", "index", "client-match-icon", false,  $this->uri);
echo new TabMenuItem("Assignments", "assignments", "index", "client-match-icon", false,  $this->uri);
echo new TabMenuItem("Claims", "assignments", "index", "client-match-icon", false,  $this->uri);
echo new TabMenuItem("Reports", "reports", "index", "reports-icon", false,  $this->uri);

?>
