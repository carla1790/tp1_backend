<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>TP N°1</title>
</head>
<body>
<?php

//Tarea 1

echo "<p>Hola mundo</p></br>";

//Tarea 2

$saludo = "Hola mundo";
 
 echo $saludo."</br>";

//Tarea 3

$variable1 = 17;
$variable2 = 11;

 echo $variable1+$variable2 ."</br>";

 echo $variable1-$variable2 ."</br>";

 echo $variable1*$variable2 ."</br>";

 echo $variable1/$variable2 ."</br>";

 echo $variable1**$variable2 . "</br>";

 echo $variable1%$variable2 . "</br>";


//Tarea 4

$gradosCelsius = 20;
$gradosFahrenheit = ($gradosCelsius*9/5)+32;

 echo $gradosFahrenheit ."</br>";

//Tarea 5a

$baseRectangulo = 18;
$alturaRectangulo = 12;

$perimetroRectangulo = ($baseRectangulo*2)+($alturaRectangulo*2);
$areaRectangulo = $baseRectangulo*$alturaRectangulo;

 echo $areaRectangulo . "</br>";
 echo $perimetroRectangulo . "</br>";

//Tarea 5b

$radioCirculo = 30;
$pi = 3.1416;

$perimetroCirculo = ($pi*2)*$radioCirculo;
$areaCirculo = $pi*($radioCirculo**2);

 echo $perimetroCirculo . "</br>";
 echo $areaCirculo . "</br>";

?>

</body>
</html>