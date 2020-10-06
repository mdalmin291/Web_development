<?php

class Pencilbox
{

    public $name     = "alamin";
    private $city     = "Dhaka";
    protected $country  = "Bangladesh";

    public function add(){
        //echo $this->name;
        echo $this->country;
    }

    protected function substract(){
        echo "do subtract";

    }

    private function multiplication(){
        echo "do multiplication";
    }

}