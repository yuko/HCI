<?php

class Table extends Module {

    protected $elements = array();

    function __construct($e) {
        parent::__construct();
        $this->elements = $e;
    }

    public function render() {
        echo '<div class="table">';
        for($i = 0; $i < sizeOf($this->elements); $i++) { 
            echo '<div class="ui-grid-a">';
            echo '<div class="ui-block-a">' .$this->elements[$i]->getId() .'</div>';
            echo '<div class="ui-block-b">' .$this->elements[$i]->getName() .'</div>';
            echo '</div><!-- /row -->';
        }
        echo '</div><!-- /table  -->';
    }

}
?>
