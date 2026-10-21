<?php

/*las variables globales son variables que se declaran fuera de una
funcion y se pueden usar dentro de la funcion*/

$x = 10;
function mostrar() {
    global $x;
    echo $x;  // Ahora $x es accesible
    $x = 5;      // variable local distinta
}   

function sumar(int $a, int $b): int {
    return $a + $b;
}
echo sumar(3, 4); // 7

function saludarA(string $nombre = "invitado"): string {
    return "Hola, $nombre <br>";
}
echo saludarA();        // Hola, invitado
echo saludarA("Laura"); // Hola, Laura



/*Argumentos nombrados
Permite indicar el nombre de un prarametro al llamar a la función*/

function crearUsuario(string $nombre, int $edad = 18, string $pais = "Colombia") {
    return "$nombre, $edad años, $pais";
}
echo crearUsuario(nombre: "Ana", pais: "Perú <br>"); // Ana, 18 años, Perú