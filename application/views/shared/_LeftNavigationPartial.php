<?php require "application/views/shared/menuItem_builder.php"; ?>
<div>
    <ul class="left-side-nav js-accordion">
        <li>
            <span class="leftNavHeader"><?php echo $_COOKIE["CommonLabel_Clients_Ownership"]; ?> Profile</span>
            <ul class="leftnav-groupcontainer" style="display: none;">
                <li>
                    <?php echo new MenuItem("New Profile", "client", "newclientprofile", "", true, false, "" , $this->uri);?>
                </li>
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
        <!-- Sample Menu - Copy and Paste as Needed -->
        <li>
            <span class="leftNavHeader">Waivers</span>
            <ul class="leftnav-groupcontainer" style="display: none;">
                <li>
                    <?php echo new MenuItem("Personal Record", "pr", "history", "", false, false, "" , $this->uri);?>
                    <ul>
                        <li>
                            <?php echo new MenuItem("Summary", "pr", "summary", "", false, false, "" , $this->uri);?>
                            <ul>
                                <li>
                                    <?php echo new MenuItem("Social History", "pr", "socHist", "", false, false, "" , $this->uri);?>
                                    <ul>
                                        <li>
                                            <?php echo new MenuItem("F. Family Information", "pr", "familyInfo", "", true, false, "" , $this->uri);?>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <?php echo new MenuItem("PSS", "pss", "history", "", true, false, "" , $this->uri);?>
                    <ul>
                        <li>
                            <?php echo new MenuItem("Summary", "pss", "summary", "", true, "enableforchildnode", "" , $this->uri);?>
                            <ul>
                                <li>
                                    <?php echo new MenuItem("Overview Information", "pss", "overview", "", true, "enableforchildnode", "" , $this->uri);?>
                                </li>
                            </ul>

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