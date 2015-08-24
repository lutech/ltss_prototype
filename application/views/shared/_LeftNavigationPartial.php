<?php require "application/views/shared/menuItem_builder.php"; ?>

<div>
    <ul class="left-side-nav js-accordion">
        <li>
            <span class="leftNavHeader"><?php echo $_COOKIE["CommonLabel_Client"]; ?> Profile</span>

            <ul class="leftnav-groupcontainer" style="display: none;">
                <li>
                    <?php echo new MenuItem("Overview", "client", "clientprofilesummary", "", true, false, "", $this->uri); ?>
                </li>
                <li>
                    <?php echo new MenuItem($_COOKIE["CommonLabel_Clients_Ownership"] . " Notes", "client", "clientnotes", "", false, false, "", $this->uri); ?>
                </li>
            </ul>
        </li>

        <!-- Case Management -->
        <li>
            <span class="leftNavHeader">Case Management</span>

            <ul class="leftnav-groupcontainer" style="display: none;">
                <li>
                    <?php echo new MenuItem("Alerts", "casemanagement", "alerts", "", false, false, "", $this->uri); ?>
                </li>
                <li>
                    <?php echo new MenuItem("Reponsible Region Assignment", "responsibleregionassignment", "history", "", true, false, "", $this->uri); ?>
                </li>
                <li>
                    <?php echo new MenuItem("CCS Provider Agency Assignment", "cssprovideragencyassignment", "history", "", true, false, "", $this->uri); ?>
                </li>
                <li>
                    <?php echo new MenuItem("Case Notes", "casemanagement", "casenotes", "", false, false, "", $this->uri); ?>
                </li>
                <li>
                    <?php echo new MenuItem("Attachments", "clientattachments", "history", "", false, false, "", $this->uri); ?>
                </li>
            </ul>
        </li>

        <!-- Waivers -->
        <li>
            <span class="leftNavHeader">Programs</span>

            <ul class="leftnav-groupcontainer" style="display: none;">
                <li>
                    <?php echo new MenuItem("DDA Application", "ddaapplication", "summary", "", true, false, "", $this->uri); ?>
                    <ul>
                        <li>
                            <?php echo new MenuItem("New DDA Eligibility Application", "ddaeligibilityapplication", "create", "", true, true, "", $this->uri); ?>
                        </li>
                        <li>
                            <?php

                            echo new MenuItem("DDA Eligibility Application", "ddaeligibilityapplication", "details", "", true, true, "", $this->uri);

                            if ($this->uri->segment(1) == "ddaeligibilityapplication" &&
                                ($this->uri->segment(3) == "edit" ||  $this->uri->segment(3) == "manage" )
                            ) {
                                echo new MenuItem("DDA Eligibility Application", "ddaeligibilityapplication", "details", "", true, false, "", $this->uri);

                            echo '
                                <ul>
                                    <li>
                                        '.new MenuItem("Applicant's Information", "ddaeligibilityapplication", "applicantsinformation/edit", "", true, false, "", $this->uri).'
                                    </li>
                                    <li>
                                        '.new MenuItem("Applicant's Self Assessment", "ddaeligibilityapplication", "applicantsselfassessment/edit", "", true, false, "", $this->uri).'
                                    </li>
                                    <li>
                                        '.new MenuItem("Documentation", "ddaeligibilityapplication", "documentation/manage", "", true, false, "", $this->uri).'
                                    </li>
                                </ul>
                                ';
                            }
                            ?>
                        </li>
                        <li>
                            <?php echo new MenuItem("New Emergency Situation", "ddaemergencysituation", "create", "", true, true, "", $this->uri); ?>
                        </li>
                        <li>
                            <?php

                            echo new MenuItem("Emergency Situation", "ddaemergencysituation", "details", "", true, true, "", $this->uri);

//                            if ($this->uri->segment(1) == "ddaeligibilityapplication" &&
//                                ($this->uri->segment(3) == "edit" ||  $this->uri->segment(3) == "manage" )
//                            ) {
//                                echo new MenuItem("DDA Eligibility Application Summary", "ddaeligibilityapplication", "details", "", true, false, "", $this->uri);
//
//                                echo '
//                                <ul>
//                                    <li>
//                                        '.new MenuItem("Applicant's Information", "ddaeligibilityapplication", "applicantsinformation/edit", "", true, false, "", $this->uri).'
//                                    </li>
//                                    <li>
//                                        '.new MenuItem("Applicant's Self Assessment", "ddaeligibilityapplication", "applicantsselfassessment/edit", "", true, false, "", $this->uri).'
//                                    </li>
//                                    <li>
//                                        '.new MenuItem("Documentation", "ddaeligibilityapplication", "documentation/manage", "", true, false, "", $this->uri).'
//                                    </li>
//                                </ul>
//                                ';
//                            }
                            ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <?php echo new MenuItem("Application Packet", "applicationpacket", "history", "", true, false, "", $this->uri); ?>
                    <ul>
                        <li>
                            <?php echo new MenuItem("Summary", "applicationpacket", "summary", "", true, true, "", $this->uri); ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <?php echo new MenuItem("Level of Care", "levelofcare", "history", "", true, false, "", $this->uri); ?>
                    <ul>
                        <li>
                            <?php

                            echo new MenuItem("Summary", "levelofcare", "details", "", true, true, "", $this->uri);

                            if ($this->uri->segment(2) == "nursedecision_edit" ||
                                $this->uri->segment(2) == "physiciandecision_edit"
                            ) {
                                echo new MenuItem("Summary", "levelofcare", "details", "", true, false, "", $this->uri);
                            }
                            ?>
                            <ul>
                                <li>
                                    <?php echo new MenuItem("Nurse LOC Decision", "levelofcare", "nursedecision_edit", "", true, true, "", $this->uri); ?>
                                </li>
                                <li>
                                    <?php echo new MenuItem("Physician LOC Decision", "levelofcare", "physiciandecision_edit", "", true, true, "", $this->uri); ?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <?php echo new MenuItem("Individual Plan", "individualplan", "history", "", true, false, "", $this->uri); ?>
                    <ul>
                        <li>
                            <?php

                            echo new MenuItem("Summary", "individualplan", "summary", "", true, true, "", $this->uri);

                            if ($this->uri->segment(2) == "nursedecision_edit" ||
                                $this->uri->segment(2) == "physiciandecision_edit"
                            ) {
                                echo new MenuItem("Summary", "levelofcare", "details", "", true, false, "", $this->uri);
                            }
                            ?>
                            <ul>
                                <li>
                                    <?php echo new MenuItem("Nurse LOC Decision", "levelofcare", "nursedecision_edit", "", true, true, "", $this->uri); ?>
                                </li>
                                <li>
                                    <?php echo new MenuItem("Physician LOC Decision", "levelofcare", "physiciandecision_edit", "", true, true, "", $this->uri); ?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <?php echo new MenuItem("Authorization to Participate", "atp", "history", "", true, false, "", $this->uri); ?>
                </li>
                <li>
                    <?php echo new MenuItem("Financial and Overall Decision", "financialandoveralldecision", "history", "", true, false, "", $this->uri); ?>
                </li>
                <li>
                    <?php echo new MenuItem("Letters", "clientletters", "history", "", false, false, "", $this->uri); ?>
                </li>
            </ul>
        </li>
    </ul>
</div>

<!-- Menu Item Arguments
MenuItem( Friendly Label [string], Controller [string], Action [string], Icon Class [string], Clickable? [bool], Hidden Unless Active? [bool], Functions/Scripts [string], URI [Do Not Change]  )
-->