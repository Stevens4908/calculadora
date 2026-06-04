<?php

$nombreTipo = $_POST["Nombre"];

include("crud.php");
createTipo($nombreTipo);
header("Location: ../../vista/index.php");