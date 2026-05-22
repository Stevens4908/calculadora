<?php
$nombrePokemon = $_POST["Nombre"];
$nivelPokemon = $_POST[ "Nivel"];

 include("crud.php");
  create($nombrePokemon,$nivelPokemon);
  header("Location: ../../vista/index.php");
