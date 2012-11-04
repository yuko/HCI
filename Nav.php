<?php

class Nav {

    private $activeTab;
    const ADD = 0;
    const VIEW = 1;
    const SETTINGS = 2;

    function __construct($active = 0) {
        $this->activeTab = $active;
    }



    public function render() {
        echo 'render() ';
        echo 'activeTab=' .$this->activeTab;
        echo Nav::ADD;


$base = '
<div data-role="navbar">
<ul>
<li><a href="#add" class="ui-btn-active ui-state-persist">Add</a></li>
<li><a href="#view">View</a></li>                                                 
<li><a href="#settings">Settings</a></li>
</ul>
</div><!-- /navbar -->';


}

} // end of class

?>
