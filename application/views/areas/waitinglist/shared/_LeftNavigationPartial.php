<?php require_once "application/views/shared/menuItem_builder.php"; ?>

<div>
    <ul class="left-side-nav js-accordion">
        <li>
            <span class="leftNavHeader">Waiting List</span>

            <ul class="leftnav-groupcontainer">
                <li>
                    <?php echo new MenuItem("DDA Waiting List & FN Registry", "ddawaitinglist", "history", "", true, false, "", $this->uri); ?>
                </li>
                <li>
                    <?php echo new MenuItem("DDA Waves", "ddawaves", "history", "", true, false, "", $this->uri); ?>
                    <ul>
                        <li>
                            <?php echo new MenuItem("Wave Management", "ddawaves", "manage", "", true, true, "", $this->uri); ?>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>

<!-- Menu Item Arguments
MenuItem( Friendly Label [string], Controller [string], Action [string], Icon Class [string], Clickable? [bool], Hidden Unless Active? [bool], Functions/Scripts [string], $this->uri URI [Do Not Change]  )
-->