<?php

/**
 * Estructuras condicionales
 */

/**
 * @var { int } int representa a un entero
 */
$variable = 4;

switch ($variable) {
    case 1:
        print_r("Primer caso");
        break;

    case 2:
        print_r("Segundo caso");
        break;
        
    case 3:
        print_r("Tercer caso");
        break;

    default:
        print_r("No tenemos ningún caso registrado");
        break;
}

echo "\n";