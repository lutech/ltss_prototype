<?php require "application/views/shared/menuItem_builder.php"; ?>

<div>
    <ul class="left-side-nav js-accordion">
        <li>
            <span class="leftNavHeader"><?php echo $_COOKIE["CommonLabel_Clients_Ownership"]; ?> Profile</span>
            <ul class="leftnav-groupcontainer" style="display: none;">
                <li>
                    <?php echo new MenuItem("Overview", "client", "clientprofilesummary", "", true, false, "" , $this->uri);?>
                </li>
                <li>
                    <?php  echo new MenuItem($_COOKIE["CommonLabel_Clients_Ownership"]." Notes", "client", "clientnotes", "", false, false, "" , $this->uri);?>
                </li>
            </ul>
        </li>
        <li>
            <span class="leftNavHeader">Case Management</span>
            <ul class="leftnav-groupcontainer" style="display: none;">
                <li>
                    <?php echo new MenuItem("Alerts", "casemanagement", "alerts", "", false, false, "" , $this->uri);?>
                </li>
                <li>
                    <?php echo new MenuItem("Reponsible Region Assignment", "responsibleregionassignment", "history", "", true, false, "" , $this->uri);?>
                </li>
                <li>
                    <?php echo new MenuItem("CSS Provider Agency Assignment", "cssprovideragencyassignment", "history", "", true, false, "" , $this->uri);?>
                </li>
                <li>
                    <?php echo new MenuItem("Case Notes", "casemanagement", "casenotes", "", false, false, "" , $this->uri);?>
                </li>
                <li>
                    <?php echo new MenuItem("Attachments", "clientattachments", "history", "", false, false, "" , $this->uri);?>
                </li>
            </ul>
        </li>
        <!-- Waivers -->
        <li>
            <span class="leftNavHeader">Programs</span>
            <ul class="leftnav-groupcontainer" style="display: none;">
                <li>
                    <?php echo new MenuItem("DDA Application", "ddaapplication", "history", "", true, false, "" , $this->uri);?>
                </li>
                <li>
                    <?php echo new MenuItem("Application Packet", "applicationpacket", "history", "", true, false, "" , $this->uri);?>
                </li>
                <li>
                    <?php echo new MenuItem("Level of Care", "levelofcare", "history", "", true, false, "" , $this->uri);?>
                    <ul>
                        <li>
                            <?php

                                echo new MenuItem("Summary", "levelofcare", "details", "", true, true, "" , $this->uri);

                                if ($this->uri->segment(2) == "nursedecision_edit" ||
                                    $this->uri->segment(2) == "physiciandecision_edit" ){
                                    echo new MenuItem("Summary", "levelofcare", "details", "", true, false, "" , $this->uri);
                                }
                            ?>
                            <ul>
                                <li>
                                    <?php echo new MenuItem("Nurse LOC Decision", "levelofcare", "nursedecision_edit", "", true, true, "" , $this->uri);?>
                                </li>
                                <li>
                                    <?php echo new MenuItem("Physician LOC Decision", "levelofcare", "physiciandecision_edit", "", true, true, "" , $this->uri);?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <?php echo new MenuItem("Individual Plan", "individualplan", "history", "", true, false, "" , $this->uri);?>
                </li>
                <li>
                    <?php echo new MenuItem("ATP", "atp", "history", "", true, false, "" , $this->uri);?>
                </li>
                <li>
                    <?php echo new MenuItem("Financial and Overall Decision", "financialandoveralldecision", "history", "", true, false, "" , $this->uri);?>
                </li>
            </ul>
        </li>
    </ul>
</div>

<!-- Menu Item Arguments
MenuItem( Friendly Label [string], Controller [string], Action [string], Icon Class [string], Clickable? [bool], Hidden Unless Active? [bool], Functions/Scripts [string], URI [Do Not Change]  )
-->