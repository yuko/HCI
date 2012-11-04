<?php

class Page {

    private $id;
    private $title; // data-title
    private $nav;

    function __construct($i, $t, $n) {
        $this->id = $i;
        $this->title = $t;
        $this->nav = $n;
    }

    public function render() {
        echo '<div data-role="page" id="' .$this->id .'" data-title="' .$this->title .'">';
        $this->nav->render();

        $this->renderContent();

        echo '</div><!-- /page -->';
    }

    public function renderContent() {
        echo '<div data-role="content">';
        echo 'content';
        echo '</div><!-- /content -->';
    }

}
?>
