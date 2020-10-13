<?php

require_once './App/classes/Calculator.php';
use App\classes\Calculator;

$result= '';

if (isset($_POST['btn'])){
    $calculator = new Calculator();
    $result = $calculator->mycalculators();

}


?>



<html>
<head>
    <title></title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.css">

</head>

<body>

<form action="" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">First Number</label>
        <input type="number" class="form-control" name="firstNumber">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Second Number</label>
        <input type="number" class="form-control" name="secondNumber">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Result</label>
        <input type="number" class="form-control" name="result" value="<?php echo $result ;?>">
    </div>
   <div>
       <button type="submit" class="btn btn-success" name="btn" value="+">+</button>
       <button type="submit" class="btn btn-success" name="btn" value="+">-</button>
       <button type="submit" class="btn btn-success" name="btn" value="+">*</button>
       <button type="submit" class="btn btn-success" name="btn" value="+">/</button>
       <button type="submit" class="btn btn-success" name="btn" value="+">%</button>

   </div>
</form>

<script src="bootstrap-4.1.3-dist/js/bootstrap.js"></script>

</body>
</html>