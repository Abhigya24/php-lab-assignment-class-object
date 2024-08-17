<?php 
class calculation {
    public $a = 10 ; 
    public $b =20;
    public $sum=0;
    function add (){
        $sum = $this->a+$this->b;
        echo "the sum is ".$sum."<br>";
    }
    function sub (){
        $ans = $this->a+$this->b;
        echo "the subtraction is ".$this->sum."<br>";
    }
    function mul () {
         $product = $this->a*$this->b;
         echo "the product  is ".$product."<br>";
    }
    
}
$c = new calculation; 
  $c-> add();
  
  $c -> sub();
  

?>