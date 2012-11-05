<?php

class Form extends Module {
    protected $actionUrl;
    protected $buttonText;
    //protected $selectId;
    //protected $labelText;
    //protected $inputType;

    function __construct($a, $bt) {
        parent::__construct();
        $this->actionUrl = $a;
        //$this->selectId = $si;
        //$this->labelText = $lt;
        //$this->inputType = $it;
        $this->buttonText = $bt;
    }

    public function render() {
        // label, text, and submit
        // todo - hardcoded for get & ajax false. Revisit to clean up
        echo '<form action="' .$this->actionUrl .'" method="get" data-ajax="false">';
        echo '<div data-role="fieldcontain" class="ui-field-contain ui-body ui-br">';
 
        $this->renderLabel();

        $this->renderFormElements();
        echo '</div>';

        echo '<button type="submit" name="submit" value="submit" data-inline="true">' .$this->buttonText .'</button>';
        echo '</form>';
    }

    public function renderLabel() {
        //echo '<label for="' .$this->selectId .'" class="ui-input-text">' .$this->labelText .'</label>';
    }

    public function renderFormElements() {
        //echo '<input type="' .$this->inputType .'" name="' .$this->selectId .'" id="' .$this->selectId .'" value="" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset"/>';
    }

}
?>
