<?php

class Entity {
    protected $id;
    protected $name;

    function __construct($i = null, $n = null) {
        $this->id = $i;
        $this->name = $n;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($n) {
        $this->name = $n;
    } 

}
?>
