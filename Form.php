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


        $param = '';    
        foreach($_GET as $key => $value) {
            if($key != 'submit') {
                if(!empty($param))
                    $param .= '&';

                $param .= $key .'=' .$value;
            }
        }
        
        echo "param to add to actionUrl=" .$param ."<br>";

        $url = explode('#', $this->actionUrl);

        if(!empty($param)) {
            echo 'actionUrl should be updated to = ' .$url[0] .'?' .$param .'#' .$url[1];
            $this->actionUrl = $url[0] .'?' .$param .'#' .$url[1];
        } else {
            echo 'actionUrl should be updated to = ' .$url[0] .'#' .$url[1];
            $this->actionUrl = $url[0] .'#' .$url[1];
        }


    }

    public function render() {

        //$this->updateActionUrl();

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

                //$param .= $key .'=' .$value;
                echo '<input type="hidden" name="' .$key .'" id="' .$key .'" value="' .$value .'" />';
            }
        }
    }

}
?>
