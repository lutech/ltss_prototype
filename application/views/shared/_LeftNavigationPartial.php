<?php

	class Menu {
		public $area;
		public $link;
		public $linkname;
		public $enabled;
		public $subMenu;
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


	// CAHPS Survey Sub Menu
    $cahpsSurveyDetailsMenuItem = new Menu();
    $cahpsSurveyDetailsMenuItem->area = 'careassessment';
    $cahpsSurveyDetailsMenuItem->link = 'details';
    $cahpsSurveyDetailsMenuItem->linkname = 'Survey Details';
    $cahpsSurveyDetailsMenuItem->enabled = true;

    $cahpsSurveyEditMenuItem = new Menu();
    $cahpsSurveyEditMenuItem->area = 'careassessment';
    $cahpsSurveyEditMenuItem->link = 'edit';
    $cahpsSurveyEditMenuItem->linkname = 'Survey Details';
    $cahpsSurveyEditMenuItem->enabled = true;

    $cahpsSurveySubMenuItems = array ($cahpsSurveyDetailsMenuItem, $cahpsSurveyEditMenuItem);

    $cahpsSurveySubMenu = "";
    foreach ($cahpsSurveySubMenuItems as $menuItem) {
        $isactive = ($menuItem->link == $this->uri->segment(2)) ? 'selected' : "ui-hide";
        $selectedindicator = ($menuItem->link == $this->uri->segment(2)) ? '<span class="offset-hidden js-selected-menu-item">selected</span>' : "";
        $isenabled = ($menuItem->enabled == true) ? '' : 'onclick="return false;"';

        $cahpsSurveySubMenu .= "<li>
                                    <a class=\"list-group-item {$isactive}\" href=\"".base_url()."index.php/{$menuItem->area}/{$menuItem->link}\" {$isenabled}>
                                        {$menuItem->linkname}
                                        {$selectedindicator}
                                    </a>
                                </li>";
    };

    // Questionnaires Menu
	$careAssessmentMenuItem = new Menu();
    $careAssessmentMenuItem->area = 'careassessment';
    $careAssessmentMenuItem->link = 'history';
    $careAssessmentMenuItem->linkname = 'CARE Assessments';
    $careAssessmentMenuItem->enabled = true;
    $careAssessmentMenuItem->subMenu = "";

	$cahpsSurveyMenuItem = new Menu();
    $cahpsSurveyMenuItem->area = 'cahpssurvey';
    $cahpsSurveyMenuItem->link = 'history';
    $cahpsSurveyMenuItem->linkname = 'CAHPS Surveys';
    $cahpsSurveyMenuItem->enabled = true;
    $cahpsSurveyMenuItem->subMenu = $cahpsSurveySubMenu;


	$questionnairesMenu = array($careAssessmentMenuItem, $cahpsSurveyMenuItem);

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
                        $isactive = ($menuItem->area == $this->uri->segment(1) && $menuItem->link == $this->uri->segment(2)) ? 'selected' : "";
                        $selectedindicator = ($menuItem->area == $this->uri->segment(1) && $menuItem->link == $this->uri->segment(2)) ? '<span class="offset-hidden js-selected-menu-item">selected</span>' : "";
						$isenabled = ($menuItem->enabled == true) ? '' : 'onclick="return false;"';
						$subMenu = (!empty($menuItem->subMenu)) ? "<ul>$menuItem->subMenu<ul>" : '';

                        echo "<li>
								<a class=\"list-group-item {$isactive}\" href=\"".base_url()."index.php/{$menuItem->area}/{$menuItem->link}\" {$isenabled}>
									{$menuItem->linkname}
									{$selectedindicator}
								</a>
								{$subMenu}
							</li>";

                    }
                ?>
            </ul>
        </li>
    </ul>
</div>