<?php
/*Mostrar la tabla de multiplicar del 3, utilizando un do -  while (Hasta el numero 20).
Se debe mostrar al similar a lo siguiente.
3 * 1 = 3
3 * 2 = 6
3 * 3 = 9
...................*/

echo 'Tabla de Multiplicar del 3 con Do While: ';

echo '<hr>';

$i = 0;

do {
    $resul = 3 * $i;
    echo '3 * ' . $i . ' = ' . $resul;
    echo '<hr>';
    $i++;
} while ($i < 21);
