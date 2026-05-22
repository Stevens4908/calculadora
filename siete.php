<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    

<?php

$videojuegos = [

    [
        "nombre" => "Free Fire",
        "categoria" => "Battle Royale",
        "precio" => 0,
        "empresa" => "Garena",

        "plataformas" => ["Android", "iPhone", "PC"],

        "estadisticas" => [
            "descargas" => "100M",
            "rating" => 4.5,
            "online" => true
        ],

        "comentarios" => [

            [
                "usuario" => "Harvey",
                "mensaje" => "Muy adictivo",
                "likes" => 120
            ],

            [
                "usuario" => "Laura",
                "mensaje" => "Me gusta jugar con amigos",
                "likes" => 87
            ]

        ],

        "skins" => [

            [
                "nombre" => "Conejo Criminal",
                "rareza" => "Legendaria"
            ],

            [
                "nombre" => "Samurai",
                "rareza" => "Epica"
            ]

        ]
    ],

    [
        "nombre" => "FIFA 26",
        "categoria" => "Deportes",
        "precio" => 250000,
        "empresa" => "EA Sports",

        "plataformas" => ["PS5", "Xbox", "PC"],

        "estadisticas" => [
            "descargas" => "20M",
            "rating" => 4.8,
            "online" => true
        ],

        "comentarios" => [

            [
                "usuario" => "Mateo",
                "mensaje" => "Los gráficos están brutales",
                "likes" => 250
            ],

            [
                "usuario" => "Camila",
                "mensaje" => "Muy realista",
                "likes" => 95
            ]

        ],

        "skins" => [

            [
                "nombre" => "Uniforme Retro",
                "rareza" => "Rara"
            ],

            [
                "nombre" => "Champions Edition",
                "rareza" => "Legendaria"
            ]

        ]
    ],

    [
        "nombre" => "Minecraft",
        "categoria" => "Aventura",
        "precio" => 120000,
        "empresa" => "Mojang",

        "plataformas" => ["Android", "PC", "Nintendo"],

        "estadisticas" => [
            "descargas" => "300M",
            "rating" => 4.9,
            "online" => false
        ],

        "comentarios" => [

            [
                "usuario" => "Juan",
                "mensaje" => "Se puede construir de todo",
                "likes" => 500
            ],

            [
                "usuario" => "Sofia",
                "mensaje" => "Mi juego favorito",
                "likes" => 320
            ]

        ],

        "skins" => [

            [
                "nombre" => "Steve Oro",
                "rareza" => "Epica"
            ],

            [
                "nombre" => "Zombie King",
                "rareza" => "Legendaria"
            ]

        ]
    ]

];

$juego = $videojuegos[0];
 


?>

<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h6 class="card-title bg-success"> <?php echo $juego["categoria"]; ?> </h6>
            <h2 class="card-subtitle mb-2 text-body-secondary"> <?php echo $juego["nombre"]; ?> </h2>
            <hr>

            <div class="row mb-3">
                <div class="col">
                    <h6 class="text-muted">Precio</h6>
                    <p class="text-success"><?php echo ($juego["precio"] == 0 ? "Gratis" : $juego["precio"]); ?></p>
                </div>
                <div class="col">
                    <h6 class="text-muted">Empresa</h6>
                    <p ><?php echo $juego["empresa"]; ?></p>
                </div>
            </div>
            <hr>
            
           
            <h6>Plataformas</h6>
            <div class="mb-3">
                <?php
                    foreach($juego["plataformas"] as $plataforma){
                        echo "- ".$plataforma."<br>";
                    }
                ?>
            </div>
            <hr>


            <div class="row text-center mb-3">
                <div class="col">
                    <small class="text-muted ">Descargas</small>
                    <strong><?php echo $juego["estadisticas"]["descargas"]; ?></strong>
                </div>
                <div class="col">
                    <small class="text-muted ">Rating</small>
                    <strong> <?php echo $juego["estadisticas"]["rating"]; ?> </strong>
                </div>
                <div class="col">
                    <small class="text-muted ">Online</small>
                    <strong class="text-success"><?php echo ($juego["estadisticas"]["online"] ? "Sí" : "No"); ?></strong>
                </div>
            </div>
            <hr>

            <h6>Comentarios</h6>
            <?php
                foreach($juego["comentarios"] as $comentario){
                    
                    echo '<strong>'.$comentario["usuario"].'</strong>';
                    echo '<p class="mb-1">'.$comentario["mensaje"].'</p>';
                    echo '<small>'.$comentario["likes"].' likes</small> <br>';
                    
                    }
            ?>


        </div>

    </div>

</div>




</body>
</html>