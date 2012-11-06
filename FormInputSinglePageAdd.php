<?php

class FormInputSinglePageAdd extends FormInput {

    protected $controller;

    function __construct($a, $bt, $array, $c) {
        parent::__construct($a, $bt, $array);
        $this->controller = $c;
    }

    public function renderButton() {
        $popupId = '#dummyPopup';

        echo 'SinglePageAdd!<br>';
        /*
        echo '<a href="' .$popupId .'" data-role="button" data-inline="true" data-rel="popup">' .$this->buttonText .'</a>';

        echo '<div data-role="popup" id="'. $popupId .'">';
        echo '<div data-role="header" data-theme="a" class="ui-corner-top">';
        echo '<h2>Category Updated</h2>';
        echo '</div><!-- /header -->';
        echo '<div data-role="content">';
        echo '<p>Confirmed!</p>';
        echo '</div><!-- /content -->';
        echo '</div><!-- /popup -->';
         */


        echo '
<a href="#cate-edit-confirmed" data-role="button" data-inline="true" data-rel="popup">Update</a>
<div data-role="popup" id="cate-edit-confirmed">
<div data-role="header" data-theme="a" class="ui-corner-top">
<h2>Category Updated</h2>
</div>
<div data-role="content">
<p>Confirmed!</p>
</div>
</div>
            ';

    }

}
?>
