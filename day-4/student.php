<?php
namespace App\classes;
class student
{

   // public       $name         = "alamin khan";
    protected    $email        = "alamin291mohammad@gmail.com";
    private      $mobile       = "832479823587";
    // for scope regulation function calling static variable have to declare
    static $name= "alamin khan";
    public $hemo;
    //public $melo;



    public function __construct($test)
    {
        //echo "in a magic method";
       echo $this->hemo = $test;

    }


    public function  test(){
        $this->hemo;
        // echo "In test";

         //scope regulation function calling from same class in another function
         //student::test1();

          $this->hello();

        // scope regulation operator another function call within an function.
        //echo student::$name;
    }
    public function hello($mest){
        $this->melo = $mest;
        echo $mest;
    }

    public function test1(){
        echo student::$name;
        //method will be available in scope regulation operator but variable do not get.
    }

    private function world(){
        echo "world";
    }



}