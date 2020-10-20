<?php
 require_once './App/classes/Students.php';
 use App\classes\Students;

 $student = new Students();
 $queryresult = $student->getAllStudentsInfo();
 if(isset($_GET['a'])){
     $student->deleteStudentInfo($_GET['id']);
 }
if (isset($_POST['btn'])){
    $queryresult = $student->searchText();
}



?>

<hr/>
<a href="index.php">Add student</a>
<a href="viewstudent.php">view student</a>
<hr/>

<form action="" method="post">
    <tr>
        <th>Enter your search Item</th>
        <td><input type="text" name="search_text"></td>
    </tr>
    <tr>
        <th></th>
        <td><input type="submit" name="btn" value="search"></td>
    </tr>
</form>

<form>
    <table border="1" width="900">
        <tr>
            <th>student Id</th>
            <th>Student Name</th>
            <th>Email Name</th>
            <th>Mobile Name</th>
            <th>Action</th>
        </tr>
 <?php while ($student = mysqli_fetch_assoc($queryresult)){ ?>
        <tr>
            <td><?php echo $student['id'];?></td>
            <td><?php echo $student['name'];?></td>
            <td><?php echo $student['email'];?></td>
            <td><?php echo $student['mobile'];?></td>
            <td>
                <a href="edit-student.php?id=<?php echo $student['id'];?>">EDIT</a>
                <a href="?a=b&id=<?php echo $student['id'];?>"onclick=" return confirm('Are you sure to delete this');">DELETE</a>
            </td>
        </tr>
        <?php }?>
    </table>
</form>
