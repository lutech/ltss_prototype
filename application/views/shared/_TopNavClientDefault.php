<?php

	class TabMenu {
		public $area;
		public $link;
		public $linkname;
		public $linkicon;
		public $url;
		public $enabled;
	}

	// Main Top Nav Menu
	$homeMenuItem = new TabMenu();
	$homeMenuItem->area = 'site';
	$homeMenuItem->link = 'home';
	$homeMenuItem->linkname = 'Home';
	$homeMenuItem->linkicon = 'home-icon';
	$homeMenuItem->enabled = true;

	$clientsMenuItem = new TabMenu();
	$clientsMenuItem->area = 'clients';
	$clientsMenuItem->link = 'index';
	$clientsMenuItem->linkname = 'Clients';
	$clientsMenuItem->linkicon = 'client-match-icon';
	$clientsMenuItem->enabled = true;

	$myListsMenuItem = new TabMenu();
	$myListsMenuItem->area = 'mylists';
	$myListsMenuItem->link = 'index';
	$myListsMenuItem->linkname = 'My Lists';
	$myListsMenuItem->linkicon = 'list-icon';
	$myListsMenuItem->enabled = false;

	$alertsMenuItem = new TabMenu();
	$alertsMenuItem->area = 'alerts';
	$alertsMenuItem->link = 'inbox';
	$alertsMenuItem->linkname = 'Alerts';
	$alertsMenuItem->linkicon = 'alerts-icon';
	$alertsMenuItem->enabled = false;

	$exchangesMenuItem = new TabMenu();
	$exchangesMenuItem->area = 'exchanges';
	$exchangesMenuItem->link = 'inbox';
	$exchangesMenuItem->linkname = '<span class="ltss-icon-container icon-retweet"></span>Exchanges';
	$exchangesMenuItem->linkicon = '';
	$exchangesMenuItem->enabled = true;

	$dashboardMenuItem = new TabMenu();
	$dashboardMenuItem->area = 'dashboard';
	$dashboardMenuItem->link = 'index';
	$dashboardMenuItem->linkname = 'Dashboard';
	$dashboardMenuItem->linkicon = 'dashboard-icon';
	$dashboardMenuItem->enabled = false;

	$assignmentsMenuItem = new TabMenu();
	$assignmentsMenuItem->area = 'assignments';
	$assignmentsMenuItem->link = 'index';
	$assignmentsMenuItem->linkname = 'Assignments';
	$assignmentsMenuItem->linkicon = 'client-match-icon';
	$assignmentsMenuItem->enabled = false;

	$reportsMenuItem = new TabMenu();
	$reportsMenuItem->area = 'reports';
	$reportsMenuItem->link = 'index';
	$reportsMenuItem->linkname = 'Reports';
	$reportsMenuItem->linkicon = 'reports-icon';
	$reportsMenuItem->enabled = false;

	$mainTopNavMenu = array($homeMenuItem, $clientsMenuItem, $myListsMenuItem, $alertsMenuItem, $exchangesMenuItem, $dashboardMenuItem, $assignmentsMenuItem, $reportsMenuItem);

  foreach ($mainTopNavMenu as $menuItem) {
	  	$n = 1;
		$isactive = ($menuItem->area == $this->uri->segment($n)) ? 'selected' : "";
		$selectedindicator = ($menuItem->area == $this->uri->segment($n)) ? '<span class="offset-hidden js-selected-menu-item">selected</span>' : "";
		$isenabled = ($menuItem->enabled == true) ? '' : 'onclick="return false;"';
		$tabIcon = (!empty($menuItem->linkicon)) ? 'ltss-icon-left '.$menuItem->linkicon.'' : "";

		echo "<li>
				<a class=\"{$isactive} {$tabIcon}\" href=\"".base_url()."index.php/{$menuItem->area}/{$menuItem->link}\" {$isenabled}>
					{$menuItem->linkname}
				</a>
			</li>";

	}
?>

