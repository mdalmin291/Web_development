<?php
require_once './student.php';
 // NAMESPACE INCLUDE RULES
/* $student = new App\classes\student();
 $student->test();*/


// ANOTHER WAY TO INCLUDE NAMESPACE RULE

// 2nd process crete object with namespaces.
/*use App\classes\student;
 $student = new student();
 $student->test();*/


// crete namespace object with scope regulation object.
/*use App\classes\student;
student::test();*/



//standard practise
use App\classes\student;
$student = new student('Bitm');
$student->hello('basis');

















