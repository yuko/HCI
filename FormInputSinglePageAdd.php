<?php

class FormInputSinglePageAdd extends FormInput {
    /*protected $selectId;
    protected $labelText;
    protected $inputType;
    protected $placeHolder;
    protected $inputConfig = array();
     */

    function __construct($a, $bt, $array) {
        parent::__construct($a, $bt, $array);
    }

    public function renderButton() {
        echo 'SinglePageAdd!';
    }

}
?>
