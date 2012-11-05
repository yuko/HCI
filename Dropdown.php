<?php

class Dropdown extends Module {

    protected $selectedIndex;
    protected $inline;
    protected $selectId;
    protected $labelText;
    protected $options = array();

    function __construct($s = 0, $i=true, $si = null, $lt, $o) {
        parent::__construct();
        $this->selectedIndex = $s;
        $this->inline = $i;
        $this->selectId;
        $this->labelText = $lt;
        $this->options = $o;
    }

    public function render() {


        echo '<form action="app.php#add-category" method="get" data-ajax="false">';
        echo '<div data-role="fieldcontain">';




    

        echo '<label for="' .$this->selectId .'" class="select">' .$this->labelText .'</label>';
        echo '<select';
       
        if($this->inline)
            echo ' data-inline="true" ';
       
        echo 'name="' .$this->selectId .'" id="' .$this->selectId .'">';

        echo '<option value="none">-- Select --</option>';
        for($i = 0; $i < sizeOf($this->options); $i++) {
            // todo - hardcoded for nickname. change
            echo '<option value="' .$this->options[$i]->getId() .'">' .$this->options[$i]->getNickname() .'</option>';
        }
        echo '</select>';




        echo '</div><!-- /fieldcontain -->';
        echo '<button type="submit" name="submit" value="submit" data-inline="true">Next</button>';
        echo '</form>';


        /*
        <label for="select-choice-0" class="select">Select Card/Bank acct:</label>
            <select data-inline="true" name="select-choice-0" id="select-choice-0">
            <option>Visa #1234</option>
            <option>Amex #5678</option>
            <option>Citibank #1234</option>
            </select>
        */
    }

}
?>
