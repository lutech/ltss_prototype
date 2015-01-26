<?php
class TabMenuItem {
    public $tabMenuItemLabel;
    public $tabMenuItemArea;
    public $tabMenuItemView;
    public $tabMenuItemIcon;
    public $tabMenuItemClickable;
    public $tabMenuItemUri;

    //Paraemeters: ( Menu Item Label, Menu Item Area, Menu Item View, Menu Item Icon, Is Menu Clickable (Boolean), Menu Item Uti )
    function __construct($tabMenuItemLabel, $tabMenuItemArea ,$tabMenuItemView, $tabMenuItemIcon, $tabMenuItemClickable, $tabMenuItemUri )
    {
        $this->tabMenuItemLabel = $tabMenuItemLabel;
        $this->tabMenuItemArea = $tabMenuItemArea;
        $this->tabMenuItemView = $tabMenuItemView;
        $this->tabMenuItemIcon = $tabMenuItemIcon;
        $this->tabMenuItemClickable = $tabMenuItemClickable;
        $this->tabMenuItemUri = $tabMenuItemUri;
    }

    public function RenderTabMenuItem(){
        $isActive = ($this->tabMenuItemArea == $this->tabMenuItemUri->segment(1));
        $activeClass = ($isActive == true) ? 'selected' : "";
        $returnFalse = ($this->tabMenuItemClickable == false) ?  'return false;' : "";
        $tabIcon = (!empty($this->tabMenuItemIcon)) ? 'ltss-icon-left '.$this->tabMenuItemIcon.'' : "";

        return "<li>
				<a class=\"{$activeClass} {$tabIcon}\" href=\"".base_url()."index.php/{$this->tabMenuItemArea}/{$this->tabMenuItemView}\" onclick=\"{$returnFalse}\">
					{$this->tabMenuItemLabel}
				</a>
			</li>";
    }

    public function __toString() {
        return $this->RenderTabMenuItem();
    }
}
?>