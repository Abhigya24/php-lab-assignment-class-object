<?php
class largest
 {
    public $num1 ;
    public $num2;
    function getvalue($b,$h){
        $this->num1=$b;
        $this->num2=$h;
    }
    function display(){
        if($this->num1>$this->num2){
            $largest= $this->num1;
        }else{
            $largest= $this->num2;  
        }
        
        echo "the largest
         is ".$largest;
    }
}
$f = new largest ();
$f->getvalue(10,15);
$f->display();
?>