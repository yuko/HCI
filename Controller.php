<?php

class Controller {

    protected $ctl_cards = array();
    protected $ctl_categories = array();

    function __construct() {
    }
    
    public function setCards($array) {
        $this->ctl_cards = $array;
    }

    public function setCategories($array) {
        //$this->ctl_categories = $ array;
        echo 'setCategories()';
    }

}

?>
