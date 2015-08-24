<?php

class MenuItem {
    public $menuItemLabel;
    public $menuItemArea;
    public $menuItemView;
    public $menuItemClickable;
    public $menuItemHideUnlessActive;
    public $menuItemIcon;
    public $menuItemScript;
    public $uri;

    function __construct($menuItemLabel, $menuItemArea ,$menuItemView, $menuItemIcon, $menuItemClickable, $menuItemHideUnlessActive, $menuItemScript,$uri )
    {
        $this->menuItemLabel = $menuItemLabel;
        $this->menuItemArea = $menuItemArea;
        $this->menuItemView = $menuItemView;
        $this->menuItemIcon = $menuItemIcon;
        $this->menuItemClickable = $menuItemClickable;
        $this->menuItemHideUnlessActive = $menuItemHideUnlessActive;
        $this->menuItemScript = $menuItemScript;
        $this->uri = $uri;
    }

    public function RenderMenuItem(){
        $segment1 =  $this->uri->segment(1);
        $segment2 =  $this->uri->segment(2);
        $segment3 = $this->uri->segment(3);

        $isActive = ($this->menuItemArea == $segment1 && $this->menuItemView == $segment2) ||
            ($this->menuItemArea == $segment1 &&  $this->menuItemView == $segment2."/".$segment3) ;

        $activeClass = ($isActive == true) ? 'selected' : "";
        $hiddenClass = ($this->menuItemHideUnlessActive == true && $isActive != true) ? 'ui-hide' : "";
        $icon = (!empty($this->menuItemIcon) ? '<span class="'.$this->menuItemIcon.'"></span>' : '');
        $onClickFunctions = (!empty($this->menuItemScript) ? "'.$this->menuItemScript.'" : '');
        $selectedIndicator = ($isActive == true) ? '<span class="offset-hidden js-selected-menu-item">selected</span>' : "";
        $returnFalse = ($this->menuItemClickable == false) ?  'return false;' : "";
        return  "
                        <a class=\"list-group-item {$activeClass} {$hiddenClass}\" href=\"".base_url()."index.php/{$this->menuItemArea}/{$this->menuItemView}\" onclick=\"{$onClickFunctions} {$returnFalse}\" >
                            {$this->menuItemLabel}
                            {$icon}
                            {$selectedIndicator}
                        </a>
                        ";
    }

    public function __toString() {
        return $this->RenderMenuItem();
    }
}
?>