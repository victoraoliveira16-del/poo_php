<?php

$peso = 72;
$altura = 1.85;

$imc = number_format($peso / ($altura * $altura), 2, ',', '.');


echo "O imc e igual a: $imc";
