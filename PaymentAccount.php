<?php

class PaymentAccount {
    protected id;
    protected nickname;

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
