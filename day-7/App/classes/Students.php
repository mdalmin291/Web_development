<?php
/**
 * Created by PhpStorm.
 * User: mdala
 * Date: 02-Oct-20
 * Time: 11:39 PM
 */

namespace App\classes;


class Students
{
    public function saveStudentInfo(){
        //convert array to variable
        //extract($_POST);
      $link = mysqli_connect('localhost','root','','student');
       $sql = "INSERT INTO students (name, email, mobile) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[mobile]')";


       // $sql = "INSERT INTO students (name, email, mobile) VALUES ('$name =(object)$_POST[name]', '$email = (object)$_POST[email]', '$mobile = (object)$_POST[mobile]')";

       // $sql = "INSERT INTO students (name, email, mobile) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[mobile]')";
     if (mysqli_query($link,$sql)){
          return'all data saved successfully';
     }else{
         die('problem'.mysqli_error($link));
     }

    }

    public function getAllStudentsInfo(){
        $link = mysqli_connect('localhost','root','','student');
        $sql = "SELECT * FROM students";
       if ($queryresult = mysqli_query($link,$sql)) {
           //$queryresult = mysqli_query($link,$sql);
           /*while ($student = mysqli_fetch_assoc($queryresult)){
               echo '<pre>';
               print_r($student);

           }*/
           return $queryresult;

         }else{
           die("problem".mysqli_error($link));
       }


       }



       public function getStudentInfoById($id){
           $link = mysqli_connect('localhost','root','','student');
           $sql = "SELECT * FROM students WHERE id = '$id'";
           if ($queryresult = mysqli_query($link,$sql)) {
               //$queryresult = mysqli_query($link,$sql);
               /*while ($student = mysqli_fetch_assoc($queryresult)){
                   echo '<pre>';
                   print_r($student);

               }*/
               return $queryresult;

           }else{
               die("problem".mysqli_error($link));
           }




       }

       public function updateStudentInfo($id){
           extract($_POST);
           $link = mysqli_connect('localhost','root','','student');
           // without using extract function
           //$sql = "UPDATE students SET name= '$_POST[name]',email= '$_POST[email]', mobile='$_POST[mobile]'WHERE id='$id'";
           //using extract function
           $sql = "UPDATE students SET name= '$name',email= '$email',mobile= '$mobile' WHERE id= '$id' ";
           if(mysqli_query($link,$sql)){
             header('location: viewstudent.php');

     /*          print_r($_POST);*/
           }else{
               die("problem".mysqli_error($link));
           }
       }

       public function deleteStudentInfo($id){
           $link = mysqli_connect('localhost','root','','student');
           $sql  = "DELETE FROM students WHERE id='$id'";

           if(mysqli_query($link,$sql)){
               header('location: viewstudent.php');
           }else{
               die("problem".mysqli_error($link));
           }
       }

       public function searchText(){
           extract($_POST);
            $link = mysqli_connect('localhost','root','','student');
            //$sql = "SELECT * FROM students WHERE name='$search_text'";
           // like a%
           //$sql = "SELECT * FROM students WHERE name LIKE '$search_text%'";
           //like %a
           //$sql = "SELECT * FROM students WHERE name LIKE '%$search_text'";
           //like %a%
           $sql = "SELECT * FROM students WHERE name LIKE '%$search_text%' || email LIKE '%$search_text%' || mobile LIKE '%$search_text%'";
           if ($queryresult = mysqli_query($link,$sql)){
               return $queryresult;
           }
           die("problem".mysqli_error($link));

            
       }




}