<?php

class Form extends Module {
    protected $actionUrl;
    protected $buttonText;

    function __construct($a, $bt) {
        parent::__construct();
        $this->actionUrl = $a;
        $this->buttonText = $bt;
    }

    public function render() {
        // todo - hardcoded for get & ajax false. Revisit to clean up
        echo '<form action="' .$this->actionUrl .'" method="get" data-ajax="false">';
        echo '<div data-role="fieldcontain" class="ui-field-contain ui-body ui-br">';
        $this->renderLabel();
        $this->renderFormElements();
        $this->renderHiddenInputs();
        echo '</div>';
        echo '<button type="submit" name="submit" value="submit" data-inline="true">' .$this->buttonText .'</button>';
        echo '</form>';
    }

    public function renderLabel() {
    }

    public function renderFormElements() {
    }

    public function renderHiddenInputs() {
        foreach($_GET as $key => $value) {
            if($key != 'submit') {
                if(!empty($param))
                    $param .= '&';

                echo '<input type="hidden" name="' .$key .'" id="' .$key .'" value="' .$value .'" />';
            }
        }
    }

}
?>
