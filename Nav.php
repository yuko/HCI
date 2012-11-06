<?php
//include 'Module.php';

class Nav extends Module {
    private $activeTab;
    const ADD = 0;
    const VIEW = 1;
    const SETTINGS = 2;

    function __construct($active = 0) {
        parent::__construct();
        $this->activeTab = $active;
    }

    public function render() {
        $selected = ' class="ui-btn-active ui-state-persist"';

        $base = '<div data-role="navbar">
                    <ul>
                    <li><a href="#add" id="nav-add"';
        if($this->activeTab == Nav::ADD) $base .= $selected;
        $base .= '>Add</a></li>';

        $base .= '<li><a href="#view" id="nav-view"';
        if($this->activeTab == Nav::VIEW) $base .= $selected;
        $base .= '>View</a></li>'; 

        $base .= '<li><a href="#settings" id="nav-settings"';        
        if($this->activeTab == Nav::SETTINGS) $base .= $selected;
        $base .= '>Settings</a></li>
                </ul>
                </div><!-- /navbar -->';

        echo $base;
    }
}
?>
