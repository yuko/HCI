<?php
//include 'Module.php';

// data-role="button"
class Button extends Module {

    private $href;
    private $inline;
    private $rel;
    private $text;

    function __construct($h, $i, $r, $t) {
        parent::__construct();
        $this->href = $h;
        $this->inline = $i;
        $this->rel = $r;
        $this->text = $t;
    }

    public function render() {
        echo '<a href="' .$this->href .'" data-role="button"';
        if($this->inline)
            echo ' data-inline="true" ';

        if(!empty($this->rel))
            echo 'data-rel="' .$this->rel .'" ';
        
        echo '>' .$this->text .'</a>';

    }

}
?>
