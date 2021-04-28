<?php
    
    
    // Declarar 5 avariables que contengan sus informacion personal 
    // y una constante, el dato al macenar no cambie
    $nombre = (string) "Edwin Mauricio Barrios Almeida";
    echo '<br>';
    echo "Hola mi nombre es :  $nombre";
    echo '<br>';

    $edad = (int) 39;
    echo '<br>';
    echo "Mi edad es: $edad años" ;
    echo '<br>';


    define ("grupo", 'A+');
    echo '<br>';
    echo "Mi grupo sanguineo es : " ;
    echo  grupo;

    echo '<br>';
    
    define ("genero", 'Masculino');
    echo '<br>';
    echo "Mi genero es : " ;
    echo genero;

    echo '<br>';
    echo '<br>';
function ocupacion (string $p1 = " pensionado de la policía:", string $p2 =  "Aprendiz ADSI SENA"){

    return (string) "Soy $p1 actualmente soy $p2 <br>";

        } 


echo ocupacion();





?>