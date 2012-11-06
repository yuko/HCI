<?php

class Table extends Module {

    protected $elements = array();

    function __construct($e) {
        parent::__construct();
        $this->elements = $e;
    }

    public function render() {

        //print_r($this->elements);
        echo 'sizeOf(this->elements)=' .sizeOf($this->elements) .'<br>';
        print_r($this->elements[0]);
        echo '<br>';



        echo '<div class="table">';
        for($i = 0; $i < sizeOf($this->elements); $i++) { 
            echo 'i=' .$i;

            echo '<div class="row">';
            echo '<span class="id">' .$this->elements[$i]->getId() .'</span>';
            echo '<span class="name">' .$this->elements[$i]->getName() .'</span>';
            echo '</div><!-- /row -->';
        }
        echo '</div><!-- /table  -->';
    }

}
?>
