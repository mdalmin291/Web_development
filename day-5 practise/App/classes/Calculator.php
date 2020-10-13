<?php
namespace App\classes;

class Calculator
{
    public function mycalculators (){
        if($_POST['btn'] == '+') {
             $result = $_POST['firstNumber'] + $_POST['secondNumber'];

             return $result;
        }

        if($_POST['btn'] == '-') {
            $result = $_POST['firstNumber'] - $_POST['secondNumber'];

            return $result;
        }

        if($_POST['btn'] == '*') {
            $result = $_POST['firstNumber'] * $_POST['secondNumber'];

            return $result;
        }

        if($_POST['btn'] == '/') {
            $result = $_POST['firstNumber'] / $_POST['secondNumber'];

            return $result;
        }

        if($_POST['btn'] == '%') {
            $result = $_POST['firstNumber'] % $_POST['secondNumber'];

            return $result;
        }

    }

}