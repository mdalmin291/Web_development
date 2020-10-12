<?php

require_once './app/classes/User.php';
use App\classes\User;

$result=' ';
if (isset($_POST['btn']) ){
    $user = new User();
    $result = $user->makeFullName();
}


/*echo '<pre>';
print_r($_POST);*/




?>



<form action="" method="post">
<table>
    <tr>
        <th>FirstName</th>
       <td><input type="text" name="firstName"/></td>
    </tr>

    <tr>
        <th>LastName</th>
        <td><input type="text" name="lastName"/></td>
    </tr>

    <tr>
        <th>FullName</th>
        <td><input type="text" value="<?php echo $result; ?>"/></td>
    </tr>

    <tr>
        <th></th>
        <td><input type="submit" name="btn" value="submit"/></td>
    </tr>
</table>
</form>
