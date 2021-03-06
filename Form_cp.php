<?php

class Form extends Module {
    /*
    protected $selectedIndex;
    protected $inline;
    protected $selectId;
    protected $labelText;
    protected $options = array();
     */
    protected $actionUrl;
    protected $buttonText;
    protected $selectId;
    protected $labelText;
    protected $inputType;

    function __construct($a, $si, $lt, $it, $bt) {
        parent::__construct();
        $this->actionUrl = $a;
        $this->selectId = $si;
        $this->labelText = $lt;
        $this->inputType = $it;
        $this->buttonText = $bt;

    }

    public function render() {
        // label, text, and submit
        // todo - hardcoded for get & ajax false. Revisit to clean up
        echo '<form action="' .$this->actionUrl .'" method="get" data-ajax="false">';
        echo '<div data-role="fieldcontain" class="ui-field-contain ui-body ui-br">';
 
        //echo '<label for="' .$this->selectId .'" class="ui-input-text">' .$this->labelText .'</label>';
        $this->renderLabel();

        $this->renderFormElements();
        //echo '<input type="' .$this->inputType .'" name="' .$this->selectId .'" id="' .$this->selectId .'" value="" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset"/>';
        echo '</div>';

        echo '<button type="submit" name="submit" value="submit" data-inline="true">' .$this->buttonText .'</button>';
        echo '</form>';


        /*
            <form action="app.php#add-card" method="get" data-ajax="false">

            <div data-role="fieldcontain" class="ui-field-contain ui-body ui-br">
            <label for="date" class="ui-input-text">Date:</label>
            <input type="date" name="date" id="date" value="" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset"/>
            </div>

            <button type="submit" name="submit" value="submit" data-inline="true">Next</button>
         </form>   
        */
    }

    public function renderLabel() {
        echo '<label for="' .$this->selectId .'" class="ui-input-text">' .$this->labelText .'</label>';
    }

    public function renderFormElements() {
        echo '<input type="' .$this->inputType .'" name="' .$this->selectId .'" id="' .$this->selectId .'" value="" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset"/>';
    }

}
?>
