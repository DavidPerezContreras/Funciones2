<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        p.enunciado {
            background-color: #ffeeaa;
            font-size: 20;
            margin-top: 50px;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    <p class="enunciado">Ejercicio 1: Realiza una función que reciba dos números y los intercambie, es decir, la variable que
contiene el primer número contendrá al segundo después de la ejecución de la función y la variable
que originalmente contiene el segundo número contendrá al primero después de ejecutar la función.</p>
    <?php
        $x=3;
        $y=7;
        echo "<hr>";
        echo "Valor de x inicial: $x";
        echo "Valor de y inicial: $y";
        echo "<hr>";

        function intercambio(&$x,&$y){
            $aux =$y;
            $y=$x;
            $x=$aux;
        }
        intercambio($x,$y);
                echo "<hr>";
        echo "Valor de x final: $x";
        echo "Valor de y final: $y";       
        echo "<hr>";
    ?>




<p class="enunciado">Ejercicio 2: Realiza una función que devuelva la media aritmética de los números que se le pasen
como argumento (la cantidad de números es variable). </p>

<?php
//Utilizando los tres puntos
function media(...$numeros){
$total=0;


foreach($numeros as $key => $value){
    $total+=current($numeros);
    next($numeros);

    
}


return $total / count($numeros);

}
echo "<br>";
echo "media: ".media(1,2,3);
?>






<p class="enunciado">
Ejercicio 3: Realiza otra versión del ejercicio 2.
</p>

<?php
//Utilizando func_get_args()
function media2(){
$total=0;
$numeros=func_get_args();

foreach($numeros as $key => $value){
    $total+=current($numeros);
    next($numeros);

    
}


return $total / count($numeros);

}
echo "<br>";
echo "media: ".media2(1,2,3);
?>


</body>
</html>