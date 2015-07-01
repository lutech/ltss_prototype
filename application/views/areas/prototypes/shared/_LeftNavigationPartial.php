<?php require "application/views/shared/menuItem_builder.php"; ?>

<div>
    <ul class="left-side-nav js-accordion">
        <li>
            <span class="leftNavHeader">Examples</span>
            <ul class="leftnav-groupcontainer">
                <li>
                    <?php echo new MenuItem("Error Handling", "prototypes", "esignatures", "", true, false, "" , $this->uri);?>
                </li>
                <li>
                    <?php  echo new MenuItem("IC/FOC Form", "prototypes", "icfocdetails", "", true, false, "" , $this->uri);?>
                </li>
            </ul>
        </li>
        <li>
            <span class="leftNavHeader">eSignature</span>
            <ul class="leftnav-groupcontainer">
                <li>
                    <?php echo new MenuItem("Bill of Rights", "prototypes", "esignbillofrightsdetails", "", true, false, "" , $this->uri);?>
                </li>
                <li>
                    <?php  echo new MenuItem("PSS", "prototypes", "esignpssmanage", "", true, false, "" , $this->uri);?>
                </li>
            </ul>
        </li>
    </ul>
</div>

<!-- Menu Item Arguments
MenuItem( Friendly Label [string], Controller [string], Action [string], Icon Class [string], Clickable? [bool], Hidden Unless Active? [bool], Functions/Scripts [string], URI [Do Not Change]  )
-->