<?php
class Person{
        public $name = "Mark Zuckerberg", $age = 45; //1.proparties

        function __construct($n = "Jeft Bezzo",$a = 55)
        {
            $this->name = $n;
            $this->age = $a;
        }

        function show () //2.method
         {
            print ( "Name: ".$this-> name . "Age: " . $this->age . "<br />");    
        }
           
}
$obj1 = new Person(); //object
$obj2 = new Person ("Elon Mask",50); //Object2
$obj3 = new Person ("Taylor",50);
$obj1->show();
$obj2->show();
$obj3->show();
//$obj1->name = "Mark Zuckerberg";
//$obj1->age = 45;
//$obj1->show();

?>