
<?php
require_once './app/classes/Calculator.php';
use App\classes\Calculator;
 $result ='';
 if (isset($_POST['btn']) ){
     $calculator = new Calculator();
     $result = $calculator->mycalculator();

 }



?>





<form action="" method="post">
    <table>
        <tr>
            <th>FirstNumber</th>
            <td><input type="number" name="firstNumber"></td>
        </tr>
        <tr>
            <th>SecondNumber</th>
            <td><input type="number" name="secondNumber"></td>
        </tr>
        <tr>
            <th>Result</th>
            <td><input type="number" value="<?php echo $result ;?>"></td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input type="submit" name="btn" value="+">
                <input type="submit" name="btn" value="-">
                <input type="submit" name="btn" value="*">
                <input type="submit" name="btn" value="/">
                <input type="submit" name="btn" value="%">
            </td>
        </tr>
    </table>

</form>
