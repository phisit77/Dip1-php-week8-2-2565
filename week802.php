<?php
class Employee
{
    public $name, $age, $salary;

    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
    // function __construct()
    // {
    //     print("Employee Constructor");
    // }

    public function info()
    {
        print("<h1>Employee Profile</h1><hr />");
        print("Employee Name: " . $this->name . "<br />");
        print("Employee Age: " . $this->age . "<br />");
        print("Employee Salary: " . $this->salary);
    }
}

class Manager extends Employee
{
    public $ta = 1000, $phone = 300, $totalSaraly;

    public function info()
    {
        $this->totalSaraly = $this->salary + $this->ta;

        print("<h1>Manager Profile</h1><hr />");
        print("Employee Name: " . $this->name . "<br />");
        print("Employee Age: " . $this->age . "<br />");
        print("Employee Salary: " . $this->totalSaraly);
    }
}

// $obj1 = new Employee();
$m1 = new Manager("Jeff Bezzo", 55, 3500000);
$e1 = new Employee("Elon Mask",45,4500000);

$m1->info();
$e1->info();