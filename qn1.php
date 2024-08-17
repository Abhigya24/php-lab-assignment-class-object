<?php 
class Student{
    public $name ;
    public $rollno;
    public $class;

    function getdetail(){
        $this->name='abhi';
        $this->rollno=3;
        $this->class=10;
    }
    function display (){
        echo"name".$this->name;
        echo "<br>roll no ".$this->rollno;
        echo "<br>class ".$this->class;

    }

}
$d = new Student();
$d->getdetail();
$d->display();
?>