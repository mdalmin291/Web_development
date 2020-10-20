<?php
require_once './App/classes/Students.php';
use App\classes\students;




$student = new students();
$queryresult =$student->getStudentInfoById($_GET['id']);
$data = mysqli_fetch_assoc($queryresult);


if(isset($_POST['btn'])){

    //$student->updateStudentInfo($data['id']);
    //when another input elemnent has been taken for id
    $student->updateStudentInfo($data);
}

?>


<a href="index.php">Add student</a>
<a href="viewstudent.php">view student</a>
<hr/>


<form action="" method="post">
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" value="<?php echo $data['name'];?>" required name="name">
                <!--data passing by hidden html element-->
            <input type="hidden" value="<?php echo $data['id'];?>" required name="id">
            </td>

        </tr>

        <tr>
            <th>Email</th>
            <td><input type="email" value="<?php echo $data['email']?>" required name="email"></td>
        </tr>
        <tr>
            <th>mobile</th>
            <td><input type="number" value="<?php echo $data['mobile'];?>" required name="mobile"></td>
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
        <td><input type="submit" name="btn" value="update"></td>
        </tr>


    </table>
</form>
<?php
echo $_GET['id'];

?>