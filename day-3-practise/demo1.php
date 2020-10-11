<?php
class practise{
    public $name        = "alamin";
    public $city        = "Dhaka";
    public $country     = "Bangladesh";

    public function add(){
        echo $this->country;
    }

    public function subtraction(){
        echo "Do subtraction";
    }

    public function multiplication(){
        echo "Do multiplication";
    }
}
 $practise = new practise();
 echo $practise->name;

?>