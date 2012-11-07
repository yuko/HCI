<?php

class TransactionTable extends Table {
/*
    protected $elements = array();
    protected $showId;
    protected $url;
 */
    protected $ctl;

    function __construct($e, $u = null, $s = false, $c) {
        parent::__construct($e, $u, $s);
        $this->ctl= $c;
    }

    // shows all
    public function render() {

        $a = '11.11';
        $b = '22.22';
        echo '==== testing: ' (double)$a + (double)$b;


        echo '<div class="table">';
        for($i = 0; $i < sizeOf($this->elements); $i++) {
            echo '<div class="ui-grid-b">';
                
            echo '<div class="ui-block-a">';
            echo $this->elements[$i]->getTransDate();
            echo '</div>';

            echo '<div class="ui-block-b">';
            if(!empty($this->url)) echo '<a href="' .$this->url .'">';
            echo '$' .$this->elements[$i]->getAmount();
            if(!empty($this->url)) echo '</a>';
            echo '</div>';

            $cateName = $this->ctl->getCategoryNameForId($this->elements[$i]->getCategoryId());
            echo '<div class="ui-block-c">' .$cateName .'</div>';

            echo '</div><!-- /ui-grid-b -->';
        }
        echo '</div><!-- /table  -->';
    }

}
?>
