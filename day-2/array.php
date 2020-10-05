<?php

//multidimentional array


$students = [
    '0' => [
        'name'     => 'alamin',
        'city'     => 'Dhaka',
        'country'  => 'Bangladesh',
        'Gender'     => 'Male'
    ],


    '1' => [
        'name'     => 'wnefe',
        'city'     => 'Dhaka',
        'country'  => 'Bangladesh',
         'Gender'     => 'Male'
],
    '2' =>[
        'name'     => 'fjwef',
        'city'     => 'Dhaka',
        'country'  => 'Bangladesh',
         'Gender'     => 'Male'
    ],
    '3' =>[
        'name'     => 'hfiwe',
        'city'     => 'Dhaka',
        'country'  => 'Bangladesh',
         'Gender'     => 'Male'
    ],
    '4' =>[
        'name'     => 'efiuiwe',
        'city'     => 'Dhaka',
        'country'  => 'Bangladesh',
        'Gender'     => 'Male'
    ],
    '5' =>[
        'name'     => 'sana',
        'city'     => 'Dhaka',
        'country'  => 'Bangladesh',
        'Gender'     => 'Male'

    ]
];

function test($x, $y){

    $k = $x+$y;
      echo $k;
     //return $k;
}
echo "<br>================<br/>";
test( 10, 20  );


echo "<br>================<br/>";
test( 40, 40);

echo "<br>================<br/>";
 $res = test( 80, 20  );
 echo $res;

echo "<br>================<br/>";
 $a = test( 10, 20  );
 $b = $a+200;
 echo $b;














/*echo '<pre>';
print_r($student);
var_dump($student);*/





/*foreach ($student as $student){
    echo $student ['name']. ' '. $student['city'].' '. $student ['country'] .'<br/>';
}*/



/*$student = [];

$student[0]['name']    = 'rahim';
$student[0]['city']    = 'Dhaka';
$student[0]['country'] = 'Babgladesh';

$student[1]['name']    = 'karim';
$student[1]['city']    = 'Dhaka';
$student[1]['country'] = 'Babgladesh';*/



/*foreach ($student as $student){
    echo $student[3];
}*/



/*$data = [20,30,'rahim','karim'];
 foreach ($data as $value){
     echo $value.' ';
}*/
/*
$data = [
    'name'           => 'alamin',
    'country'        => 'Bangladesh',
    'occupation'     => 'web developer',
    'mobile'         => '214023040',
];

foreach ($data as $datum){
    echo $datum.'<br/>';
}*/



//Numeric array
/*$data = [20,30,40];*/
//Associative array
/*$data = ['name', 'home', 'going'];*/



//multidimentional array
/*$data[0][1] = 30;
$data[1][2][2][4]=100;
$data[0][1][1][3]=500;*/



/*$name;
$name = 'Alamin akondho';*/
//echo $name;

/*$data = Array(10, 20,30, 'rahim', 'Dhaka');*/

/*$data[0] = 10;
$data[1] = 20;
$data[2] = 30;
$data[3] = 40;*/

/*$data['name'] = 'rahim';
$data['city'] = 'Dhaka';*/

/*echo $data[3];*/
?>


<!--<table border="1" width="500">
    <tr>
        <th>name</th>
        <th>city</th>
        <th>Country</th>
        <th>Gender</th>
    </tr>
    //code written in html file
 <?php /*foreach ($student as $student){;*/?>
    <tr>
        <td><?php /*echo $student['name']*/?></td>
        <td><?php /*echo $student['city']*/?></td>
        <td><?php /*echo $student['country']*/?>
        <td><?php /*echo $student['Gender']*/?></td>
    </tr>
 <?php /*}*/?>
//code written in php file
    <?php /*foreach ($student as $student){
            echo "<tr>";

                 echo "<td>$student[name]</td>";
                 echo "<td>$student[city]</td>";
                 echo "<td>$student[country]</td>";
                 echo "<td>$student[Gender]</td>";

            echo "<tr>";
    }
 */?>

</table>
-->


