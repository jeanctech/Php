<?php
// Tipos de Datos - String

echo 'Esto es una cadena sencilla';

echo 'También se pueden incluir nuevas líneas en
un string de esta forma, ya que es
correcto hacerlo así';

// Tipos de Datos - Numeric String 

var_dump("0D1" == "000"); // false, "0D1" is not scientific notation
var_dump("0E1" == "000"); // true, "0E1" is 0 * (10 ^ 1), or 0
var_dump("2E1" == "020"); // true, "2E1" is 2 * (10 ^ 1), or 20

?>