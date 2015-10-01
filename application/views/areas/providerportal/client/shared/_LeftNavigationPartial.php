<?php require "application/views/shared/menuItem_builder.php"; ?>

<div>
    <ul class="left-side-nav js-accordion">
        <!--<li>
            <span class="leftNavHeader"><?php echo $_COOKIE["CommonLabel_Clients_Ownership"]; ?> Profile</span>
            <ul class="leftnav-groupcontainer" style="display: none;">
                <li>
                    <?php //echo new MenuItem("Overview", "client", "clientprofilesummary", "", true, false, "" , $this->uri);?>
                </li>
                <li>
                    <?php //echo new MenuItem($_COOKIE["CommonLabel_Clients_Ownership"]." Notes", "client", "clientnotes", "", false, false, "" , $this->uri);?>
                </li>
            </ul>
        </li>-->
        <!--<li>
            <span class="leftNavHeader">Provider Management</span>
            <ul class="leftnav-groupcontainer" style="display: none;">-->
                <!--<li>-->
                    <?php //echo new MenuItem("Alerts", "casemanagement", "alerts", "", false, false, "" , $this->uri);?>
                <!--</li>-->
                <!--<li>
                    <?php //echo new MenuItem("Reportable Events", "casemanagement", "reportableevent", "", false, false, "" , $this->uri);?>
                </li>
                <li>
                    <?php //echo new MenuItem("Case Notes", "casemanagement", "casenotes", "", false, false, "" , $this->uri);?>
                </li>
            </ul>
        </li>-->
        <!-- Waivers -->
        <li>
            <span class="leftNavHeader">Services and Supports</span>
            <ul class="leftnav-groupcontainer" style="display: none;">
                <li>
                    <?php echo new MenuItem("Plans of Services and Supports", "providerclient", "psshistory", "", true, false, "" , $this->uri);?>
                    <ul>
                        <li>
                            <?php echo new MenuItem("Summary", "providerclient", "psssummary", "", true, true, "" , $this->uri);
                            if ($this->uri->segment(2) == "psstasks" ||
                                $this->uri->segment(2) == "medicationchangerequestnew" ||
                                $this->uri->segment(2) == "activitysupportplandetails" ||
                                $this->uri->segment(2) == "activitysupportplanedit"){
                                echo new MenuItem("Summary", "providerclient", "psssummary", "", true, false, "", $this->uri);
                            }
                            ?>
                        </li>
                        <li>
                            <?php echo new MenuItem("Implementation", "providerclient", "psstasks", "", true, true, "" , $this->uri);

                            if ($this->uri->segment(2) == "psssummary" ||
                                $this->uri->segment(2) == "medicationchangerequestnew" ||
                                $this->uri->segment(2) == "medicationchangerequestview"  ||
                                $this->uri->segment(2) == "activitysupportplanmanage" ||
                                $this->uri->segment(2) == "activitysupportplandetails" ||
                                $this->uri->segment(2) == "activitysupportplanedit" ){
                                echo new MenuItem("Implementation", "providerclient", "psstasks", "", true, false, "" , $this->uri);
                            }
                            ?>
                            <ul>
                            <!--<li>-->
                                    <?php //echo new MenuItem("Summary", "providerclient", "psssummary", "", true, true, "" , $this->uri);?>
                            <!--<li>-->
                                <li>
                                    <?php echo new MenuItem("Medication Change Request", "providerclient", "medicationchangerequestnew", "", true, true, "" , $this->uri);?>
                                </li>
                                <li>
                                    <?php echo new MenuItem("Medication Change Request", "providerclient", "medicationchangerequestview", "", true, true, "" , $this->uri);?>
                                </li>
                                <li>
                                    <?php echo new MenuItem("Physician LOC Decision", "levelofcare", "physiciandecision_edit", "", true, true, "" , $this->uri);?>
                                </li>
                                <li>
                                    <?php echo new MenuItem("Activity Support Plan", "providerclient", "activitysupportplanmanage", "", true, true, "" , $this->uri);?>
                                </li>
                                <li>
                                    <?php echo new MenuItem("Activity Support Plan", "providerclient", "activitysupportplandetails", "", true, true, "" , $this->uri);?>
                                </li>
                                <li>
                                    <?php echo new MenuItem("Activity Support Plan", "providerclient", "activitysupportplanedit", "", true, true, "" , $this->uri);?>
                                </li>
                            </ul>
                        </li>
<!--                        Alternate PSS Overview-->
                        <li>
                            <?php echo new MenuItem("PSS Overview", "providerclient", "psstasksalt", "", true, true, "" , $this->uri);?>
                        </li>
                    </ul>
                </li>
            <!--<li>-->
                    <?php //echo new MenuItem("Service Activity", "providerclient", "clientserviceactivity", "", true, false, "" , $this->uri);?>
            <!--</li>-->
            <!--<li>-->
                    <?php //echo new MenuItem("Activity Support Planning", "levelofcare", "history", "", true, false, "" , $this->uri);?>
            <!--</li>-->

            </ul>
        </li>
    </ul>
</div>

<!-- Menu Item Arguments
MenuItem( Friendly Label [string], Controller [string], Action [string], Icon Class [string], Clickable? [bool], Hidden Unless Active? [bool], Functions/Scripts [string], URI [Do Not Change]  )
-->