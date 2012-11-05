<?php

class PaymentAccount {
    protected $id;
    protected $nickname;

    function __construct($i = null, $n = null) {
        $this->id = $i;
        $this->nickname = $n;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->nickname;
    }

    public function setName($n) {
        $this->nickname = $n;
    } 

}
?>
