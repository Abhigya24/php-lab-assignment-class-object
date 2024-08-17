<?php
class temprature {
    
    function convert($f){
        $c=(5/9)*($f-32);
        echo "the conversion to celcuis is ".$c;

    }
}
$t= new temprature();
$t->convert(90);
?>