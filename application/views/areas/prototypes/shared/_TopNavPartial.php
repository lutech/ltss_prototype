<?php
require "application/views/shared/tabMenuItem_builder.php";

echo new TabMenuItem("Prototypes", "prototypes", "index", "home-icon", true,  $this->uri);

?>
