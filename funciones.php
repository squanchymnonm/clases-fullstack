<?php

/**
 * Funcion que devuelve TRUE si el numero es par
 * y FALSE si el numero es impar
 */
function esPar (Int $numero) : bool     // La firma de la funcion
{
    $resto = $numero % 2;
    return $resto == 0;
}

/**
 * Funcion que devuelve el resultado de la suma de
 * 2 numeros pasados por paramatros.
 */
function suma (float $numero1, float $numero2) : float
{
    return $numero1 + $numero2;
}