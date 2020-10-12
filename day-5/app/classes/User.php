<?php

namespace App\classes;


class User
{

    public function makeFullName(){

        $user = (object)$_POST;
        $firstName = $user->firstName;
        $lastName  = $user->lastName;
        $fullName  = $firstName.' '.$lastName;
        return $fullName;


       /* $firstname = $_POST['firstName'];
         $lastname = $_POST['lastName'];
         $fullname = $firstname.' '.$lastname;
         return $fullname;*/
    }

}