<?php

class TransactionTable extends Table {
/*
    protected $elements = array();
    protected $showId;
    protected $url;
 */
    function __construct($e, $u = null, $s = false) {
        parent::__construct($e, $u, $s);
        //$this->elements = $e;dd
        //$this->url = $u;
        //$this->showId = $s;
    }

    public function render() {
        echo '<div class="table">';
        for($i = 0; $i < sizeOf($this->elements); $i++) {
            echo '<div class="ui-grid-a">';
                
            echo '<div class="ui-block-a">';
            echo $this->elements[$i]->getDate();
            echo '</div>';


            echo '<div class="ui-block-b">';
            if(!empty($this->url)) echo '<a href="' .$this->url .'">';
            echo '$' .$this->elements[$i]->getAmount();
            if(!empty($this->url)) echo '</a>';
            echo '</div>';

 
            echo '</div><!-- /ui-grid-a -->';
        }
        echo '</div><!-- /table  -->';
    }

}
?>
