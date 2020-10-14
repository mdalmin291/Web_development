
<?php
require_once './App/classes/Series.php';
use App\classes\Series;
// $result veriable  for object
//$result= '';
//$result veriable for array

$result = [];
//object creation outside of the isset function so that bar bar object create na korer jonnno.
$series = new Series();
if (isset($_POST['btn'])){
    //$series = new Series();
    $result = $series->Createseries();
}
$result   = '';
$result1  = '';
if (isset($_POST['btn1'])){
    //$series = new Series();
   $result1 = $series->findWordCharacter();
}

?>


<form action="" method="post">
    <table>
        <tr>
            <th>Enter your string</th>
            <td><input type="text" name="givenNumber" size="60"></td>
        </tr>
        <tr>
            <th>Total word</th>
            <td><input type="text" value="<?php echo $result1['total_Word'] ;?>"></td>
        </tr>
        <tr>
            <th>Total character</th>
            <td><input type="text" size="100" value="<?php echo $result1['total_Character'] ;?>"></td>
        </tr>

        <tr>
            <th></th>
            <td><input type="submit" name="btn1"></td>
        </tr>

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
            <th>Your Choice</th>
            <td>
                <input type="radio" name="choice" value="odd"> ODD
                <input type="radio" name="choice" value="Even"> Even
            </td>
        </tr>

        <tr>
            <th>Result</th>
<!--                 for result call object-->
  <!--          <td><textarea  cols="10" name="textArea"><?php /*echo $result ;*/?></textarea></td>-->
            <!--result call in by array-->
            <td><textarea  cols="10" name="textArea">
                    <?php if ($_POST)($result);{
                        foreach ($result as $value) {
                            echo $value ;}
                    }


                    ?>
                </textarea>
            </td>
        </tr>

        <tr>
            <th></th>
            <td><input type="submit" name="btn"value="Button"></td>
        </tr>
    </table>

</form>
