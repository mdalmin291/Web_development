<?php
//require_once './class1.php';

// $class1 = new class1();
// echo $class1-> doOne();
require_once './class2.php';

$class2 = new class2();
$class2->doFive($_GET['name']);


?>

<form action="" method="get">
    <input type="text" name="name">
    <button type="submit" name="btn" value="submit">Submit</button>
</form>
