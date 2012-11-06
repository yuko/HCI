<?php

class Controller {

    protected $ctl_cards = array();
    protected $ctl_categories = array();

    function __construct() {
    }

    public function getCards() {
        return $this->ctl_cards;
    }

    public function setCards($array) {
        $this->ctl_cards = $array;
    }

    public function getCategories() {
        return $this->ctl_categories;
    }

    public function setCategories($array) {
        $this->ctl_categories = $array;
    }

    public function addCategory($c) {
        if($c instanceof Category){
            $this->ctl_categories[] = $c;
        }
    }

}

?>
