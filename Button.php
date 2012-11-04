<?php
//include 'Module.php';

// data-role="button"
class Button extends Module {

    protected $href;
    protected $inline;
    protected $rel;
    protected $text;
    protected $icon;
    protected $iconPosition;

    function __construct($h, $in, $r, $t, $i = null, $ip = null) {
        parent::__construct();
        $this->href = $h;
        $this->inline = $in;
        $this->rel = $r;
        $this->text = $t;
        $this->icon = $i;
        $this->iconPosition = $ip;
    }

    public function render() {
        echo '<a href="' .$this->href .'" data-role="button"';
        if($this->inline)
            echo ' data-inline="true" ';

        if(!empty($this->rel))
            echo 'data-rel="' .$this->rel .'" ';

        if(!empty($this->icon))
            echo 'data-icon="' .$this->icon .'" ';

        if(!empty($this->iconPosition))
            echo 'data-iconpos="' .$this->iconPosition .'" ';


        echo '>' .$this->text .'</a>';

    }

}
?>
