
<?php

include(__DIR__ . "/../../conexion/conexion.php");

// POKEMONES 

function create($nombrePokemon, $nivelPokemon){
    global $conn;
    $sql = "INSERT INTO pokemones(nombre, nivel) VALUES ('$nombrePokemon', '$nivelPokemon')";
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

// TIPOS 

function createTipo($nombreTipo){
    global $conn;
    $sql = "INSERT INTO tipos(nombre) VALUES ('$nombreTipo')";
    if(mysqli_query($conn, $sql)){
        echo "tipo agregado";
    }else{
        echo "error";
    }
}

function readTipos(){
    global $conn;
    $sql = "SELECT * FROM tipos";
    $resultado = mysqli_query($conn, $sql);
    $tipos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    return $tipos;
}

//  POKEMON TIPO 

function createPokemonTipo($idPokemon, $idTipo){
    global $conn;
    $sql = "INSERT INTO pokemon_tipo(idPokemon, idTipo) VALUES ('$idPokemon', '$idTipo')";
    if(mysqli_query($conn, $sql)){
        echo "relacion agregada";
    }else{
        echo "error";
    }
}

function readPokemonTipos(){
    global $conn;
    $sql = "SELECT pokemones.nombre, tipos.nombre AS tipo
            FROM pokemon_tipo
            JOIN pokemones ON pokemon_tipo.idPokemon = pokemones.id
            JOIN tipos ON pokemon_tipo.idTipo = tipos.id";
    $resultado = mysqli_query($conn, $sql);
    $pokemonTipos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    return $pokemonTipos;
}

?>