<?php

class FormInput extends Form {
    protected $selectId;
    protected $labelText;
    protected $inputType;
    protected $placeHolder;

    function __construct($a, $si, $lt, $it, $bt, $ph) {
        parent::__construct($a, $bt);
        $this->selectId = $si;
        $this->labelText = $lt;
        $this->inputType = $it;
        $this->placeHolder = $ph;
    }

    public function renderLabel() {
        if(!empty($this->labelText))
            echo '<label for="' .$this->selectId .'" class="ui-input-text">' .$this->labelText .'</label>';
    }

    public function renderFormElements() {
        echo '<input type="' .$this->inputType .'" name="' .$this->selectId .'" id="' .$this->selectId .'" value="" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset" placeholder="' .$this->placeHolder .'" />';
    }

}
?>
