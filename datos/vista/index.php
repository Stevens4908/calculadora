<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
           include("../logica/controladores/crud.php");
  $pokemones =  read();

   ?> 

<form action="../logica/controladores/recepcionCrear.php" method="POST">
  <label for="fname">Nombre:</label><br>
  <input type="text" id="fname" name="Nombre"><br>
  <label for="lname">Nivel:</label><br>
  <input type="text" id="lname" name="Nivel">
  <button type="submit">Agregar Pokemon</button>
</form>

<table>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Nivel</th>
  </tr>
  <?php
    foreach($pokemones as $pokemon){
  ?>
  <tr>
    <td><?php  echo $pokemon["id"] ?></td>
    <td><?php  echo $pokemon["nombre"] ?></td>
    <td><?php  echo $pokemon["nivel"] ?></td>
  </tr>
 <?php } ?>
</table>




</body>
</html>