<?php

class Dropdown extends Form {

    protected $selectedIndex;
    protected $inline;
    protected $selectId;
    protected $labelText;
    protected $options = array();

    function __construct($a, $bt, $s = 0, $i=true, $si = null, $lt, $o) {
        parent::__construct($a, $bt);
        $this->selectedIndex = $s;
        $this->inline = $i;
        $this->selectId;
        $this->labelText = $lt;
        $this->options = $o;
    }

    public function renderLabel() {
        if(!empty($this->labelText))
            echo '<label for="' .$this->selectId .'" class="select">' .$this->labelText .'</label>';
    }

    public function renderFormElements() {
        echo '<select';
       
        if($this->inline)
            echo ' data-inline="true" ';
       
        echo 'name="' .$this->selectId .'" id="' .$this->selectId .'">';

        echo '<option value="none">-- Select --</option>';
        for($i = 0; $i < sizeOf($this->options); $i++) {
            echo '<option value="' .$this->options[$i]->getId() .'">' .$this->options[$i]->getName() .'</option>';
        }
        echo '</select>';




        //todo - add text field

        //echo '<input type="' .$this->inputType .'" name="' .$this->selectId .'" id="' .$this->selectId .'" value="" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset" placeholder="' .$this->placeHolder .'" />';
        echo '<input type="text" name="' .$this->selectId .'" id="' .$this->selectId .'" value="" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset" placeholder="placeholder" />';

    }

}
?>
