<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>


/* Card */
.card {
    background: #1e293b;
    color: #e2e8f0;
    padding: 25px 30px;
    border-radius: 16px;
    width: 380px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.4);
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
}

/* Título */
.card h2 {
    margin-bottom: 15px;
    color: #38bdf8;
    font-size: 20px;
}

/* Texto */
.card p {
    line-height: 1.6;
    font-size: 15px;
}

/* Destacar palabras clave */
.highlight {
    color: #22c55e;
    font-weight: bold;
}
</style>
</head>
<body>
    


<?php


$empresa = [
    "nombre" => "TechCorp",
    "sedes" => [ 
        [
            "ciudad" => "Bogotá",
            "departamentos" => [ 
                [
                    "nombre" => "Desarrollo",
                    "proyectos" => [ 
                        [
                            "nombre" => "Sistema A",
                            "equipos" => [ 
                                [
                                    "lider" => "Carlos",
                                    "miembros" => ["Ana", "Luis", "Sofía"] 
                                ],
                                [
                                    "lider" => "María",
                                    "miembros" => ["Pedro", "Juan"]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ],
        [
            "ciudad" => "Medellín",
            "departamentos" => [
                [
                    "nombre" => "Marketing",
                    "proyectos" => [
                        [
                            "nombre" => "Campaña X",
                            "equipos" => [
                                [
                                    "lider" => "Laura",
                                    "miembros" => ["Diego", "Camila"]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
//En MEDELLIN su líder es LAURA 
// y ella coordina MARKETING
//  porque cuenta con CAMILA
//  para lograr completar la CAMPAÑA X

//print_r($empresa["sedes"][1]["ciudad"]);

$ciudad=$empresa["sedes"][1]["ciudad"];
$lider=$empresa["sedes"][1]["departamentos"][0]["proyectos"][0]["equipos"][0]["lider"];
$rol=$empresa["sedes"][1]["departamentos"][0]["nombre"];
$ayudante=$empresa["sedes"][1]["departamentos"][0]["proyectos"][0]["equipos"][0]["miembros"][1];
$labor=$empresa["sedes"][1]["departamentos"][0]["proyectos"][0]["nombre"];

//echo "En ".$ciudad." su lider es ".$lider." y ella coordina ".$rol." porque cuenta con ".$ayudante." para lograr completar la ".$labor;
echo "<pre>";
var_dump ($empresa);
echo "</pre>";
?>

<div class="card">
    <h2>Resumen de Proyecto</h2>
    <p>
        En <span class="highlight"><?php echo $ciudad; ?></span> su líder es 
        <span class="highlight"><?php echo $lider; ?></span> y ella coordina 
        <span class="highlight"><?php echo $rol; ?></span> porque cuenta con 
        <span class="highlight"><?php echo $ayudante; ?></span> para lograr completar la 
        <span class="highlight"><?php echo $labor; ?></span>.
    </p>
</div>



</body>
</html>