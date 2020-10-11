<?php
require_once './class4.php';

 $class4 = new class4();
 echo $class4->divSix( $_GET['name']);
 ?>

<form action="" method="get">
    <input type="text" name="name">
    <button type="submit" name="btn" value="submit">Submit</button>
</form>
