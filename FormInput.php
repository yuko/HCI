<?php

class FormInput extends Form {
    protected $selectId;
    protected $labelText;
    protected $inputType;
    protected $placeHolder;
    protected $inputConfig = array();


    function __construct($a, $bt, $array) {
        parent::__construct($a, $bt);
        $this->inputConfig = $array;
    }

    public function renderLabel() {
        if(!empty($this->labelText))
            echo '<label for="' .$this->selectId .'" class="ui-input-text">' .$this->labelText .'</label>';
    }

    public function renderFormElements() {
        for($i = 0; $i < sizeOf($this->inputConfig); $i++) {
            echo '<input type="' .$this->inputConfig[$i]['inputType'] 
                .'" name="' .$this->inputConfig[$i]['selectId'] 
                .'" id="' .$this->inputConfig['selectId'] 
                .'" value="" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset" placeholder="' 
                .$this->inputConfig[$i]['placeHolder'] .'" />';           
        }
    }

}
?>
