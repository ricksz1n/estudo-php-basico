<?php
// While e Do While

$contador = 1;
while ($contador <= 10):
    echo "contador = $contador <br>";
    $contador++;
endwhile;

echo "<hr>";

$contador = 1;
do {
    echo "contador = $contador <br>";
    $contador++;
} while ($contador <= 10);
