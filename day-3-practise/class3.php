
<?php


class class3
{
    public  $name         = "alamin";
    private $city         = "Dhaka";
    protected $country    = "Bangladesh";

    public function divOne(){
       //echo "div one";
        $this->divThree();
    }

    private function divTwo(){
        echo "div two";
    }

    protected function divThree(){
        echo "div three";
}

}