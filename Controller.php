<?php

class Controller {

    protected $ctl_cards = array();
    protected $ctl_categories = array();
    protected $ctl_trans = array();

    function __construct() {
    }

    public function getCards() {
        return $this->ctl_cards;
    }

    public function setCards($array) {
        $this->ctl_cards = $array;
    }

    public function addCard($c) {
        if($c instanceof Entity){
            $this->ctl_cards[] = $c;
        }
    }

    public function getCategories() {
        return $this->ctl_categories;
    }

    public function setCategories($array) {
        $this->ctl_categories = $array;
    }

    public function addCategory($c) {
        if($c instanceof Entity){
            $this->ctl_categories[] = $c;
        }
    }

    public function getTransactions() {
        return $this->ctl_trans;
    }

    public function setTransactions($array) {
        $this->ctl_trans = $array;
    }

    public function addTransaction($c) {
        if($c instanceof Entity){
            $this->ctl_trans[] = $c;
        }
    }

}

?>
