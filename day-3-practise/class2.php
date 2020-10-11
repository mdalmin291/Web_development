<?php
require_once './class1.php';

class class2 extends class1
{
    public $phone     = "092374097203";
    public $email     = "alamin291mohammad@gmail.com";
    public $location  = "Dhaka, Bangladesh";


    public function doFour(){
        echo "Do four";
    }
    public function doFive($name){
        echo $name;
    }

    public function doSix(){
        echo "Do five";
    }

}