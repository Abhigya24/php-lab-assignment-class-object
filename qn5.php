<?php
echo"odd even <br>";
class oddeven{
    public $num = 10 ;
    function find(){
        if($this->num%2==0){
            echo "even ";
        }
        else {
            echo "odd";
        }
    }
}
$d = new oddeven();
$d->find();
?>