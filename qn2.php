<?php
class circle {
    public $pi=3.14;
    public $r = 3;

    function getarea(){
        $ar = 2*$this->pi*$this->r;
        echo"the area is ".$ar;
    }
}
$c= new circle();
$c->getarea();
?>