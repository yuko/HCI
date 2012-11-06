<?php

class FormInputSinglePageAdd extends FormInput {

    protected $controller;

    function __construct($a, $bt, $array, $c) {
        parent::__construct($a, $bt, $array);
        $this->controller = $c;
    }

    public function renderButton() {
        $popupId = $this->selectId; //'dummyPopup';

        
        echo '<a href="#' .$popupId .'" data-role="button" data-inline="true" data-rel="popup">' .$this->buttonText .'</a>';

        echo '<div data-role="popup" id="'. $popupId .'" style="min-width:350px;">';
        echo '<div data-role="header" data-theme="a" class="ui-corner-top">';
        echo '<h3>Category Updated</h3>';
        echo '</div><!-- /header -->';
        echo '<div data-role="content">';
        echo '<p>Confirmed!</p>';

        echo '<a href="#" data-role="button" data-inline="true" data-rel="back" data-theme="c">OK</a>';
        echo '</div><!-- /content -->';
        echo '</div><!-- /popup -->';
        
    }

}
?>
