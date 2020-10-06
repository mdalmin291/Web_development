<?php

// from pencilbox class
/*require_once './Pencilbox.php';
 $pencilbox = new Pencilbox();


 // method calling
 $pencilbox-> add();*/


// property calling
//echo $pencilbox-> name;


 require_once './Exemple.php';

  $exemple = new Exemple();
 // echo $exemple-> add();
  //value pass in function
   //$exemple->one('alamin');
   //echo $_POST['name'];
      $exemple->one($_POST['name'])

  ?>


<form action="" method="post">

<input type="text"  name="name">
<button type="submit" name="btn" value="submit">Submit</button>


</form>
















