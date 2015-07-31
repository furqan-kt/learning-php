<!DOCTYPE html>
<html>
<body>

<?php
require_once 'functions.php';

$cars = array("Volvo", "BMW", "Toyota");
$cars_assoc = array(
    'furqan' => "Super Hero",
    'roshi' => "chaman",
);
$cars_multi = array(
    'bmw' => array(
        'cars' => array(
            'class1' => 'c1'
        ),
        'info' => array(
            'Name' => 'BMW',
            'Country' => 'USA'
        ),
    ),
);
$arr = array();

$arr['name'] = 'furqan';
$arr['age'] = 50;
$arr['profession'] = 'engineer';
$arr['nickname'] = 'hero';

p($GLOBALS);
$arrlength = count($cars);

for($x = 0; $x <  $arrlength; $x++) {
     echo $cars[$x];
     echo "<br>";
}
echo"<br>";
$car = array("Volvo", "BMW", "Toyota");
echo count($car);

?>

</body>
</html>
<!--
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
-->
