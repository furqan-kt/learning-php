<!DOCTYPE html>
<html>
<body>

<?php
echo "Ascending";
echo "<br>";

$cars = array();
sort($cars);
$clength = count($cars);
    for($x = 0; $x <  $clength; $x++) 
        {
            echo $cars[$x];
            echo "<br>";
        }

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
$arrlength = count($numbers);
    for($x = 0; $x <  $arrlength; $x++) 
        {
            echo $numbers[$x];
            echo "<br>";
        }

echo"Decending";
echo "<br>";
$car2 = array("Volvo", "BMW", "Toyota");
rsort($car2);
$clength1 = count($car2);
        for($x = 0; $x <  $clength1; $x++) 
            {
                echo $car2[$x];
                echo "<br>";
            }
            
$numbers1 = array(4, 6, 2, 22, 11);
rsort($numbers1);
$arrlength2 = count($numbers1);
    for($x = 0; $x <  $arrlength2; $x++)
        {
            echo $numbers1[$x];
            echo "<br>";
        }

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
