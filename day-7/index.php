

<?php


/*session_start();
echo $_SESSION['name'];

echo $_SESSION['city'];

echo '<br/>';

unset($_SESSION['city']);
unset($_SESSION['name']);

echo $_SESSION['name'];

echo $_SESSION['city'];*/





require_once './App/classes/UserInputOutput.php';
require_once './App/classes/Students.php';

use App\classes\UserInputOutput;
use App\classes\Students;

$message = '';
if (isset($_POST['btn'])){
    $student = new Students();
    $message = $student->saveStudentInfo();

}



/*$result = [];
if (isset($_POST['btn'])){
      $userInputOutput = new UserInputOutput();
      $result= $userInputOutput->InputOutput();
}else{
    $result = [
        'first_Number'   => 0,
        'second_Number'  => 0,
        'third_Number'   => 0,
        'fourth_Number'  => 0,
        'fifth_Number'   => 0,
    ];
}*/



?>
<hr/>
<a href="index.php">Add student</a>
<a href="viewstudent.php">View student</a>
<hr/>


<h2><?php echo $message?></h2>

<form action="" method="post">
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name"></td>
        </tr>

        <tr>
            <th>Email</th>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <th>mobile</th>
            <td><input type="number" name="mobile"></td>
        </tr>
       <!-- <tr>
            <th>Fourth Number</th>
            <td><input type="text" name="fourth_Number"></td>
        </tr>
        <tr>
            <th>Fifth Number</th>
            <td><input type="text" name="fifth_Number"></td>
        </tr>
        <tr>-->
            <th></th>
            <td><input type="submit" name="btn" value="submit"></td>
        </tr>

    </table>
</form>

<!--<hr/>-->

<!--<table border="1" width="900">


    <tr>
        <th>firstNumber</th>
        <th>secondNumber</th>
        <th>thirdNumber</th>
        <th>fourthNumber</th>
        <th>fifthNumber</th>
        <th>Result </th>
    </tr>

    <tr>

        <td><?php /*echo $result['first_Number'];*/?></td>
        <td><?php /*echo $result['second_Number'];*/?></td>
        <td><?php /*echo $result['third_Number'];*/?></td>
        <td><?php /*echo $result['fourth_Number'];*/?></td>
        <td><?php /*echo $result['fifth_Number'];*/?></td>

        <td>
            <?php
/*            $sum = 0;
            foreach ($result as $value){
                if ($value != 'submit')
                  $sum += $value;
            }
            echo $sum;
            */?>
        </td>
    </tr>


</table>-->
