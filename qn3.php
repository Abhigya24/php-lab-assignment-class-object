<?php
class triangle {
    public $base ;
    public $height;
    function getvalue($b,$h){
        $this->base=$b;
        $this->height=$h;
    }
    function display(){
        $arr= $this->height * $this->base ;
        echo "the area of triangle is ".$arr;
    }
}
$f = new triangle ();
$f->getvalue(10,15);
$f->display();
?>