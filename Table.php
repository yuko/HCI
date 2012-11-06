<?php

class Table extends Module {

    protected $elements = array();
    protected $showId;

    function __construct($e, $s = false) {
        parent::__construct();
        $this->elements = $e;
        $this->showId = $s;
    }

    public function render() {
        echo '<div class="table">';
        for($i = 0; $i < sizeOf($this->elements); $i++) {
            echo '<div class="ui-grid-a">';
                
            if($this->showId) { 
                echo '<div class="ui-block-a">' .$this->elements[$i]->getId() .'</div>';
                echo '<div class="ui-block-b">';
            } else {   
                echo '<div class="ui-block-a">';
            }
            echo $this->elements[$i]->getName() .'</div>';
           
            echo '</div><!-- /ui-grid-a -->';
        }
        echo '</div><!-- /table  -->';
    }

}
?>
