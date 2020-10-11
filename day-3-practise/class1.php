<?php

class class1
{

    public $name       = "akondho";
    public $city       = "Dhaka";
    private $country   = "Bangladesh";


    public function doOne(){
       // echo "Do one";

        $this->doThree();
}

    private function doTwo(){
        echo "Do two";
    }

    public function doThree(){
        echo "Do three";
    }

}