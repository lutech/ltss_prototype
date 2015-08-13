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
                    <?php echo new MenuItem("Reportable Events", "casemanagement", "reportableevent", "", false, false, "" , $this->uri);?>
                </li>
                <li>
                    <?php echo new MenuItem("Case Notes", "casemanagement", "casenotes", "", false, false, "" , $this->uri);?>
                </li>
            </ul>
        </li>
        <!-- Waivers -->
        <li>
            <span class="leftNavHeader">Waivers</span>
            <ul class="leftnav-groupcontainer" style="display: none;">
                <li>
                    <?php echo new MenuItem("Application Packets", "applications", "index", "", false, false, "" , $this->uri);?>
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
                    <?php echo new MenuItem("PSS", "pss", "history", "", true, false, "" , $this->uri);?>
                    <ul>
                        <li>
                            <?php echo new MenuItem("Summary", "pss", "summary", "", true, true, "" , $this->uri);

                            if ($this->uri->segment(2) == "medicationchangerequestreview" ||
                                $this->uri->segment(2) == "medicationchangerequestview" ||
                                $this->uri->segment(1) == "activitysupportplan" ){
                                echo new MenuItem("Summary", "pss", "summary", "", true, false, "" , $this->uri);
                            }
                            ?>
                            <ul>
                                <li>
                                    <?php echo new MenuItem("Medication Change Request", "pss", "medicationchangerequestreview", "", true, true, "" , $this->uri);?>
                                </li>
                                <li>
                                    <?php echo new MenuItem("Medication Change Request", "pss", "medicationchangerequestview", "", true, true, "" , $this->uri);?>
                                </li>
                                <li>
                                    <?php echo new MenuItem("Activity Support Plan Details", "activitysupportplan", "details", "", true, true, "" , $this->uri);?>
                                </li>

                            </ul>
                        <li>

<!--                        <li>-->
<!--                            --><?php //echo new MenuItem("Activity Support Plan", "activitysupportplan", "history", "", true, true, "" , $this->uri);
//
//                            if ($this->uri->segment(1) == "pss" && $this->uri->segment(2) != "history" ){
//                                echo new MenuItem("Activity Support Plan", "activitysupportplan", "history", "", true, false, "" , $this->uri);
//                            }
//                            ?>
<!---->
<!--                            <ul>-->
<!--                                <li>-->
<!--                                    --><?php //echo new MenuItem("Summary", "activitysupportplan", "summary", "", true, true, "" , $this->uri);
//
//                                    if ($this->uri->segment(1) == "activitysupportplan" &&  $this->uri->segment(2) == "details" ||
//                                        $this->uri->segment(1) == "activitysupportplan" &&  $this->uri->segment(2) == "edit"
//                                    )
//                                    {
//                                        echo new MenuItem("Summary", "activitysupportplan", "summary", "", true, false, "" , $this->uri);
//                                    }
//                                    ?>
<!--                                    <ul>-->
<!--                                        <li>-->
<!--                                            --><?php //echo new MenuItem("Activity Support Plan Details", "activitysupportplan", "details", "", true, true, "" , $this->uri);?>
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            --><?php //echo new MenuItem("Activity Support Plan Details", "activitysupportplan", "edit", "", true, true, "" , $this->uri);?>
<!--                                        </li>-->
<!--                                </li>-->
<!---->
<!--                            </ul>-->
<!--                        </li>-->
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>

<!-- Menu Item Arguments
MenuItem( Friendly Label [string], Controller [string], Action [string], Icon Class [string], Clickable? [bool], Hidden Unless Active? [bool], Functions/Scripts [string], URI [Do Not Change]  )
-->