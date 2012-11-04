<?php

class Page {

    private $id;
    private $title; // data-title
    private $nav;
    private $content;
    private $header;
    private $subheader;

    function __construct($i, $t, $n) {
        $this->id = $i;
        $this->title = $t;
        $this->nav = $n;

    }

    public function setContent($c) {
        $this->content = $c;
    }

    public function setHeader($h) {
        $this->header = $h;
    }

    public function setSubheader($s) {
        $this->subheader = $s;
    }

    public function render() {
        echo '<div data-role="page" id="' .$this->id .'" data-title="' .$this->title .'">';
        echo '<div data-role="header" data-position="fixed">';
        $this->nav->render();
        echo '</div><!-- /header -->';


        echo '<div data-role="content">';
        //$this->renderHeader();
        //$this->renderSubheader();
        $this->renderContent();
        echo '</div><!-- /content -->';

        echo '</div><!-- /page -->';
    }

    public function renderHeader(){
        if(!empty($this->header)) {
            echo '<h2>' .$this->header .'</h2>';
        }
    }

    public function renderSubheader(){
        if(!empty($this->subheader)) {
            echo '<h3' .$this->subheader .'</h3>';
        }

    public function renderContent() {
        echo $this->content;;
    }

}
?>
