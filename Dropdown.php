<?php

class Dropdown extends Form {

    protected $selectedIndex;
    protected $inline;
    protected $selectId;
    protected $labelText;
    protected $options = array();
    protected $inputConfig = array();

    function __construct($a, $bt, $s = 0, $i=true, $si, $lt, $o, $ic) {
        parent::__construct($a, $bt);
        $this->selectedIndex = $s;
        $this->inline = $i;
        $this->selectId =$si;
        $this->labelText = $lt;
        $this->options = $o;
        $this->inputConfig = $ic;
    }

    public function renderLabel() {
        if(!empty($this->labelText))
            echo '<label for="' .$this->selectId .'" class="select">' .$this->labelText .'</label>';
    }

    public function renderFormElements() {
        echo '<select name="' .$this->selectId .'" id="' .$this->selectId .'"';
       
        if($this->inline)
            echo ' data-inline="true" ';
       
        echo 'name="' .$this->selectId .'" id="' .$this->selectId .'">';


        echo 'Dropdown renderFormElements()=====<br>';
        print_r($this->options);
        echo '<br>';


        echo '<option value="none">-- Select --</option>';
        for($i = 0; $i < sizeOf($this->options); $i++) {
            echo '<option value="' .$this->options[$i]->getId() .'">' .$this->options[$i]->getName() .'</option>';
        }
        echo '</select>';


        //todo - add text field
        for($i = 0; $i < sizeOf($this->inputConfig); $i++) {
            echo '<input type="' .$this->inputConfig[$i]['inputType'] 
                .'" name="' .$this->inputConfig[$i]['selectId'] 
                .'" id="' .$this->inputConfig['selectId'] 
                .'" value="" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset" placeholder="' 
                .$this->inputConfig[$i]['placeHolder'] .'" />';           
        }

        //echo '<input type="text" name="' .$this->selectId .'" id="' .$this->selectId .'" value="" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset" placeholder="placeholder" />';

    }

}
?>
