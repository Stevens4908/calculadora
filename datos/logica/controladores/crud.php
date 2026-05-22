
<?php

include(__DIR__ . "/../../conexion/conexion.php");

function create($nombrePokemon, $nivelPokemon){

    global $conn;

    $sql = "INSERT INTO pokemones(nombre, nivel)
    VALUES ('$nombrePokemon', '$nivelPokemon')";

//$sql = "INSERT INTO `pokemones`( `nombre`, `nivel`) VALUES ('pikachu',6)";

    if(mysqli_query($conn, $sql)){
        echo "pokemon agregado";
    }else{
        echo "error";
    }

}

function read(){
    global $conn;

    $sql = "SELECT * FROM pokemones";

    $resultado = mysqli_query($conn, $sql);

    $pokemones = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

    return $pokemones;

}

?>