<?php
    require "funciones.php";

    /**
     * Pedir que se ingrese un numero y almacenarlo en una variable
     * Pedir otro numero y almacenarlo en otra variable
     * 
     * Pedir que se ingrese una letra, puede ser [s,r,d,m]
     */

     $primerNumero = readline("ingrese el primer numero:");
     $segundoNumero = readline("ingrese el segundo numero:");
     $operacion = readline("ingrese la operacion [s,r,d,m]:");

     if($operacion == "s")
     {
        print suma($primerNumero, $segundoNumero);
     } 
     elseif($operacion == "r")
     {
        print resta($primerNumero, $segundoNumero);
     } 
     elseif($operacion == "d")
     {
        print division($primerNumero, $segundoNumero);
     } 
     elseif($operacion == "m")
     {
        print multiplicacion($primerNumero, $segundoNumero);
     }
     else
     {
        print "no existe la operacion $operacion";
     }