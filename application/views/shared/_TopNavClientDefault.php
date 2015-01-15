<?php
require "application/views/shared/tabMenuItem_builder.php";

echo new TabMenuItem("Home", "site", "alerts", "home-icon", true,  $this->uri);
echo new TabMenuItem("CSS", "css", "basecss", "client-match-icon", true,  $this->uri);
echo new TabMenuItem("Components", "components", "index", "list-icon", false,  $this->uri);
echo new TabMenuItem("Views", "views", "index", "alerts-icon", false,  $this->uri);
echo new TabMenuItem("Workflows", "workflows", "index", "dashboard-icon", false,  $this->uri);

?>
