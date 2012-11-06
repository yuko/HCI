<?php

class FormInput extends Form {
    protected $selectId;
    protected $labelText;
    protected $inputType;
    protected $placeHolder;
    protected $inputConfig = array();


    function __construct($a, $bt, $ap, $array) {
        parent::__construct($a, $bt, $ap);
        //$this->selectId = $si;
        //$this->labelText = $lt;
        //$this->inputType = $it;
        //$this->placeHolder = $ph;
        $this->inputConfig = $array;
    }

    public function renderLabel() {
        if(!empty($this->labelText))
            echo '<label for="' .$this->selectId .'" class="ui-input-text">' .$this->labelText .'</label>';
    }

    public function renderFormElements() {
        //echo '<input type="' .$this->inputType .'" name="' .$this->selectId .'" id="' .$this->selectId .'" value="" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset" placeholder="' .$this->placeHolder .'" />';

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
