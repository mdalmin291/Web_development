<?php
require_once './class3.php';

class class4 extends class3
{
    public   $phone       = "23098523845";
    private  $email       = "alamin291mohammad@gmail.com";
    public   $location    = "aramnagor Bazar";


    public function divFive (){
        echo "div five";
        $this->divThree();
    }
    public function divSix ($name){
        //echo "div six";

        echo $name;

    }

    private function divSeven (){
        echo "div seven";
    }
}