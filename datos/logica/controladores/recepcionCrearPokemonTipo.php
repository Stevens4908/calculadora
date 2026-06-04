<?php

$idPokemon = $_POST["idPokemon"];
$idTipo = $_POST["idTipo"];

include("crud.php");
createPokemonTipo($idPokemon, $idTipo);
header("Location: ../../vista/index.php");