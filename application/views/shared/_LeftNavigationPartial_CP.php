<?php require "application/views/shared/menuItem_builder.php"; ?>
<div>
    <ul class="left-side-nav js-accordion">
        <li>
            <?php echo new MenuItem("Home", "site", "home", "icon-home", true, false, "" , $this->uri);?>
        </li>
        <li>
            <?php  echo new MenuItem("My Profile", "client", "clientprofilesummary", "icon-user", true, false, "" , $this->uri);?>
        </li>
        <!-- Sample Menu - Copy and Paste as Needed -->
        <li>
            <span class="leftNavHeader">Sample Menu 1</span>
            <ul class="leftnav-groupcontainer" style="display: none;">
                <li>
                    <?php echo new MenuItem("Sample Menu Item 1", "sample", "index", "", false, false, "" , $this->uri);?>
                </li>
            </ul>
        </li>
    </ul>
</div>