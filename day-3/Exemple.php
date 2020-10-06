<?php
require_once './Pencilbox.php';

class Exemple extends Pencilbox
{
    public $phone       = "0823548923524";
    protected $email    = "alamin291mohammad@gmail.com";
    private  $location  = "Aramnagor Bazar";

    public function one($name){
        echo $name;
    }

    private function two(){
        echo "Two";
    }

    protected function three(){
        echo "three";
    }



}