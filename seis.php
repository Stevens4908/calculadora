<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// nombre, edad, ciudad, comidas que le gustan y redes 
$personas = [

    [
        "nombre" => "Laura",
        "edad" => 24,
        "ciudad" => "Pasto",

      
        "comidas" => ["Pizza", "Hamburguesa", "Helado"],

      
        "redes" => [
            "facebook" => "laura123",
            "instagram" => "laura.dev",
            "tiktok" => "lauritaa"
        ]
    ],

    [
        "nombre" => "Mateo",
        "edad" => 31,
        "ciudad" => "Bogotá",

        "comidas" => ["Sushi", "Carne", "Pasta"],

        "redes" => [
            "facebook" => "mateo.fb",
            "instagram" => "mateo_oficial",
            "tiktok" => "mateo_tok"
        ]
    ],

    [
        "nombre" => "Camila",
        "edad" => 19,
        "ciudad" => "Medellín",

        "comidas" => ["Empanadas", "Perro caliente"],

        "redes" => [
            "facebook" => "camila19",
            "instagram" => "cami_arts",
            "tiktok" => "camii"
        ]
    ]

];

foreach($personas as $persona){
    echo 'Nombre: '.$persona["nombre"]."<br>";
    echo 'Edad: '.$persona["edad"]."<br>";
    echo 'Ciudad: '.$persona["ciudad"]."<br>";

    echo "Comidas:<br>";
    foreach($persona["comidas"] as $comida){
        echo '- '.$comida.'<br>';
    }
    echo "Redes:<br>";
    foreach($persona["redes"] as $red => $usuario){
        echo "-".$red.": ".$usuario."<br>";
    }
    echo "<hr>";
}

?>
    
</body>
</html>