<?php

class Form extends Module {
    protected $actionUrl;
    protected $buttonText;
    //protected $actionParam;

    function __construct($a, $bt, $ap) {
        parent::__construct();
        $this->actionUrl = $a;
        $this->buttonText = $bt;
        //$this->actionParam = $ap;
    }

    public function updateActionUrl() {
        echo 'updateActionUrl()<br>';

        echo "actionUrl=" .$this->actionUrl ."<br>";

    }

    public function render() {

        $this->updateActionUrl();

        // todo - hardcoded for get & ajax false. Revisit to clean up
        echo '<form action="' .$this->actionUrl .'" method="get" data-ajax="false">';
        echo '<div data-role="fieldcontain" class="ui-field-contain ui-body ui-br">';
        $this->renderLabel();
        $this->renderFormElements();
        echo '</div>';
        echo '<button type="submit" name="submit" value="submit" data-inline="true">' .$this->buttonText .'</button>';
        echo '</form>';
    }

    public function renderLabel() {
    }

    public function renderFormElements() {
    }

}
?>
