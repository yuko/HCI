<?php

class Page {

    private $id;
    private $title; // data-title
    private $nav;
    private $content;

    function __construct($i, $t, $n) {
        $this->id = $i;
        $this->title = $t;
        $this->nav = $n;
    }

    public function setContent($c) {
        $this->content = $c;
    }

    public function render() {
        echo '<div data-role="page" id="' .$this->id .'" data-title="' .$this->title .'">';
        echo '<div data-role="header" data-position="fixed">';
        $this->nav->render();
        echo '</div><!-- /header -->';

        $this->renderContent();

        echo '</div><!-- /page -->';
    }

    public function renderContent() {
        echo '<div data-role="content">';
        echo $this->content;;
        echo '</div><!-- /content -->';
    }

}
?>
