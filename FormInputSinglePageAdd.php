<?php

class FormInputSinglePageAdd extends FormInput {

    function __construct($a, $bt, $array) {
        parent::__construct($a, $bt, $array);
    }

    public function renderButton() {
        echo 'SinglePageAdd!';
    }

}
?>
