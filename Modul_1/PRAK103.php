<?php
$celsius = 37.841;
$fahrenheit = ($celsius * 9 / 5) + 32;
$reamur = $celsius * 4 / 5;
$kelvin = number_format(($celsius + 273),4);
echo"fahrenheit(F) = $fahrenheit" . "<br>";
echo"reamur(R) = $reamur " . "<br>";
echo "kelvin(K) = $kelvin" . "<br>";
?>