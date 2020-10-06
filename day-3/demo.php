<?php
class fullBox{
    public $name     = "alamin";
    public $city     = "Dhaka";
    public $country  = "Bangladesh";

    function add(){
        echo "in add";

    }

    function minus(){
        echo "in minus";
    }

    function remember(){
        echo "be remember";
    }
}

//echo $name;
$fullbox = new fullBox;
//echo $pencilbox->name;
$fullbox->add();

?>