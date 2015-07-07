<?php require "application/views/shared/menuItem_builder.php"; ?>
<div>
    <ul class="left-side-nav js-accordion">
        <li>
            <span class="leftNavHeader">Contact Notes</span>
            <ul class="leftnav-groupcontainer" style="display: none;">
                <li>
                    <?php echo new MenuItem("Search Contact Notes", "contactNotes", "contactsearch", "", false, false, "" , $this->uri);?>
                    <ul>
                        <li>
                            <?php echo new MenuItem("New Contact Note", "contactNotes", "newContact", "", false, true, "" , $this->uri);?>
                        </li>
                        <li>
                            <?php echo new MenuItem("Follow-Up Contact Note", "contactNotes", "editContact", "", false, true, "" , $this->uri);?>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>

<!-- Menu Item Arguments
MenuItem( Friendly Label [string], Controller [string], Action [string], Icon Class [string], Clickable? [bool], Hidden Unless Active? [bool], Functions/Scripts [string], URI [Do Not Change]  )
-->