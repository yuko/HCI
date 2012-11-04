<?php

class PaymentAccount {
    abstract private id;
    abstract private nickname;

    function __construct($i = null, $n = null) {
        $this->id = $i;
        $this->nickname = $n;
    }

    public fucntion getNickname() {
        return $this->nickname;
    }

    public function setNickname($n) {
        $this->nickname = $n;
    } 

}
?>
