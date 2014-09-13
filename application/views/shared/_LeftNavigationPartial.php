<?php

	class Menu {
		public $area;
		public $link;
		public $linkname;
		public $enabled;
	}

	// Client Menu
	$profileMenuItem = new Menu();
	$profileMenuItem->area = 'client';
	$profileMenuItem->link = 'clientprofilesummary';
	$profileMenuItem->linkname = 'Profile';
	$profileMenuItem->enabled = true;

	$clientNotesMenuItem = new Menu();
	$clientNotesMenuItem->area = 'clients';
	$clientNotesMenuItem->link = 'clientnotes';
	$clientNotesMenuItem->linkname = 'Client Notes';
	$clientNotesMenuItem->enabled = false;

	$clientMenu = array($profileMenuItem, $clientNotesMenuItem);


	// Case Management Menu
	$alertsMenuItem = new Menu();
	$alertsMenuItem->area = 'casemanagement';
	$alertsMenuItem->link = 'alerts';
	$alertsMenuItem->linkname = 'Alerts';
	$alertsMenuItem->enabled = false;

	$reportableEventsMenuItem = new Menu();
	$reportableEventsMenuItem->area = 'casemanagement';
	$reportableEventsMenuItem->link = 'reportableevents';
	$reportableEventsMenuItem->linkname = 'Reportable Events';
	$reportableEventsMenuItem->enabled = false;

	$casenotesMenuItem = new Menu();
	$casenotesMenuItem->area = 'casemanagement';
	$casenotesMenuItem->link = 'casenotes';
	$casenotesMenuItem->linkname = 'Case Notes';
	$casenotesMenuItem->enabled = false;

	$caseManagementMenu = array($alertsMenuItem, $reportableEventsMenuItem, $casenotesMenuItem);


	// Questionnaires Menu
	$assessmentMenuItem = new Menu();
	$assessmentMenuItem->area = 'careassessment';
	$assessmentMenuItem->link = 'history';
	$assessmentMenuItem->linkname = 'CARE Assessments';
	$assessmentMenuItem->enabled = true;

	$qualitySurveyMenuItem = new Menu();
	$qualitySurveyMenuItem->area = 'cahpssurvey';
	$qualitySurveyMenuItem->link = 'history';
	$qualitySurveyMenuItem->linkname = 'CAHPS Surveys';
	$qualitySurveyMenuItem->enabled = true;

	$questionnairesMenu = array($assessmentMenuItem, $qualitySurveyMenuItem);

?>

<div>
    <ul class="left-side-nav js-accordion">
        <li>
            <span class="leftNavHeader">Client</span>
            <ul class="leftnav-groupcontainer" style="display: none;">
				<?php
                  foreach ($clientMenu as $menuItem) {
                        $isactive = ($menuItem->link == $this->uri->segment(2)) ? 'selected' : "";
                        $selectedindicator = ($menuItem->link == $this->uri->segment(2)) ? '<span class="offset-hidden js-selected-menu-item">selected</span>' : "";
						$isenabled = ($menuItem->enabled == true) ? '' : 'onclick="return false;"';

                        echo "<li>
								<a class=\"list-group-item {$isactive}\" href=\"".base_url()."index.php/{$menuItem->area}/{$menuItem->link}\" {$isenabled}>
									{$menuItem->linkname}
									{$selectedindicator}
								</a>
							</li>";

                    }
                ?>
            </ul>
        </li>
        <li>
            <span class="leftNavHeader">Case Management</span>
            <ul class="leftnav-groupcontainer" style="display: none;">
                <?php
                  foreach ($caseManagementMenu as $menuItem) {
                        $isactive = ($menuItem->link == $this->uri->segment(2)) ? 'selected' : "";
                        $selectedindicator = ($menuItem->link == $this->uri->segment(2)) ? '<span class="offset-hidden js-selected-menu-item">selected</span>' : "";
						$isenabled = ($menuItem->enabled == true) ? '' : 'onclick="return false;"';

                        echo "<li>
								<a class=\"list-group-item {$isactive}\" href=\"".base_url()."index.php/{$menuItem->area}/{$menuItem->link}\" {$isenabled}>
									{$menuItem->linkname}
									{$selectedindicator}
								</a>
							</li>";

                    }
                ?>
            </ul>
        </li>
        <li>
            <span class="leftNavHeader">Questionnaires</span>
            <ul class="leftnav-groupcontainer" style="display: none;">
                <?php
                  foreach ($questionnairesMenu as $menuItem) {
                        $isactive = ($menuItem->area == $this->uri->segment(1)) ? 'selected' : "";
                        $selectedindicator = ($menuItem->area == $this->uri->segment(1)) ? '<span class="offset-hidden js-selected-menu-item">selected</span>' : "";
						$isenabled = ($menuItem->enabled == true) ? '' : 'onclick="return false;"';

                        echo "<li>
								<a class=\"list-group-item {$isactive}\" href=\"".base_url()."index.php/{$menuItem->area}/{$menuItem->link}\" {$isenabled}>
									{$menuItem->linkname}
									{$selectedindicator}
								</a>
							</li>";

                    }
                ?>
            </ul>
        </li>
    </ul>
</div>