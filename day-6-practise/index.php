
<?php
require_once './App/classes/practise.php';
use App\classes\practise;


$practise = new practise();


if(isset($_POST['btn'])){

     $result = '';

     $result = $practise->makesPractise();
}

if(isset($_POST['btn1'])){

    $result1 = ' ';
    $result1 = $practise->totalString();
}




?>






<form action="" method="post">
    <table>
        <tr>
            <th>Enter your string Name</th>
            <td><input type="text" name="givenNumber" size="60"></td>
        </tr>

        <tr>
            <th>Total word</th>
            <td><input type="text" value="<?php echo $result1['total_word'] ;?>"></td>
        </tr>

        <tr>
            <th>Total Chracter</th>
            <td><input type="text" value="<?php echo $result1['total_character'] ; ?>"></td>
        </tr>

        <th></th>
        <td><input type="submit" name="btn1" value="submit"></td>



    </table>
</form>
<div></div>
<hr/>


<form action="" method="post">
    <table>
        <tr>
            <th>Starting Number</th>
            <td><input type="number" name="startingNumber"></td>
        </tr>

        <tr>
            <th>Ending Number</th>
            <td><input type="number" name="endingNumber"></td>
        </tr>

        <tr>
            <th>Your choice</th>
            <td>
                <input type="radio" name="choice" value="odd">ODD
                <input type="radio" name="choice" value="even">EVEN
            </td>
        </tr>

        <tr>
            <th>Result</th>
            <td><input type="number" name="result" value="<?php foreach ($result as $value) {echo $value;} ; ?>"></td>
        </tr>

        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="submit"></td>
        </tr>

    </table>
</form>