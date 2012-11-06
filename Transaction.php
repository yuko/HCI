<?php

class Transaction extends Entity {

    protected $cardId;
    protected $categoryId;
    protected $date;
    protected $amount;

    function __construct($i = null, $n = null, $a, $d, $card, $cate) {
        parent::__construct($i, $n);
        $this->amount = $a;
        $this->date = $d;
        $this->cardId = $card;
        $this->categoryId = $cate;
    }

    public function getCardId() {
        return $this->cardId();
    }

    public function getCategoryId() {
        return $this->categoryId;
    }

    public function getDate() {
        return $this->date;
    }

    public function getAmount() {
        return $this->amount;
    }

}
?>
