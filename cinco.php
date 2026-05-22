<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>

<?php

$numero = 0;
/*
while ($numero <= 5) {
    echo $numero;
    $numero++;
}

for ($i=0; $i < 5; $i++) { 
  echo $i;
}
*/
/*
do {
   echo $numero;
    $numero++;
} while ($numero <= 5);
// 0 1 2 3 4 5 

$nombres = ["Juan", "Pedro", "Ana"];

foreach ($nombres as $nombre) {
    echo 'hola '.$nombre."<br>";
}
*/
/*
$personas = [

    [
        "nombre" => "Carlos",
        "edad" => 25,
        "ciudad" => "Bogotá",
        "hobbies" => ["Fútbol", "Música", "Videojuegos"]
    ],

    [
        "nombre" => "Ana",
        "edad" => 30,
        "ciudad" => "Medellín",
        "hobbies" => ["Leer", "Viajar", "Cocinar"]
    ],

    [
        "nombre" => "Luis",
        "edad" => 19,
        "ciudad" => "Cali",
        "hobbies" => ["Gym", "Programar"]
    ]

];


foreach ($personas as $persona) {
    echo 'hola '.$persona["nombre"]."<br>";
    echo 'hola '.$persona["edad"]."<br>";
    echo 'hola '.$persona["ciudad"]."<br>";
   foreach ($persona["hobbies"] as $hobby ) {
    echo $hobby;
   }
}
*/
$equipos = [

    "Real Madrid" => ["Vinicius", "Bellingham", "Rodrygo"],
    "Barcelona" => ["Yamal", "Lewandowski", "Pedri"]

];

foreach ($equipos as $equipo => $jugadores ) {
    echo $equipo;
    foreach ($jugadores as $jugador) {
        echo "- $jugador <br>";
    }
}

?>

</body>
</html>