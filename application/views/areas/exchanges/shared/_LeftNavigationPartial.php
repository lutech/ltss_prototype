<?php
	
	class Menu {
		public $area;
		public $link;
		public $linkname;
		public $enabled;
	}
	
	
	// Exchanges Menu
	
	$inboxMenuItem = new Menu();
	$inboxMenuItem->area = 'exchanges';
	$inboxMenuItem->link = 'inbox';
	$inboxMenuItem->linkname = 'Inbox';
	$inboxMenuItem->enabled = true;
	$inboxMenuItem->script = '';
	
	$sentMenuItem = new Menu();
	$sentMenuItem->area = 'exchanges';
	$sentMenuItem->link = 'sent';
	$sentMenuItem->linkname = 'Sent';
	$sentMenuItem->enabled = true;
	$sentMenuItem->script = '';
	
	$exchangesMenu = array($inboxMenuItem, $sentMenuItem);
	
	
?>

<div>
    <ul class="left-side-nav js-accordion">
        <li>
            <span class="leftNavHeader">Exchanges</span>
            <ul class="leftnav-groupcontainer" style="display: none;">
                <?php
                  foreach ($exchangesMenu as $menuItem) {
                        $isactive = ($menuItem->link == $this->uri->segment(2)) ? 'selected' : "";	
                        $selectedindicator = ($menuItem->link == $this->uri->segment(2)) ? '<span class="offset-hidden js-selected-menu-item">selected</span>' : "";
						$isenabled = ($menuItem->enabled == true) ? '' : 'return false;';		
                        
                        echo "<li>
								<a class=\"list-group-item {$isactive}\" href=\"".base_url()."index.php/{$menuItem->area}/{$menuItem->link}\" onclick=\"{$menuItem->script} {$isenabled}\" >
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