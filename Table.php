<?php

class Table extends Module {

    protected $elements = array();

    function __construct($e) {
        parent::__construct();
        $this->elements = $e;
    }

    public function render() {

        print_r($this->elements);

        echo '<div class="table">';
        for($i = 0; $i < sizeOf($this->elements); $i++) { 
            echo '<div class="row">';
            echo '<span class="id">' .$this->elements[$i]['id'] .'</span>';
            echo '<span class="name">' .$this->elements[$i]['name'] .'</span>';
            echo '</div><!-- /row -->';
        }
        echo '</div><!-- /table  -->';
    }

}
?>
