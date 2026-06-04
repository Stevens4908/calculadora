<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<?php
    include("../logica/controladores/crud.php");
    $pokemones = read();
    $tipos = readTipos();
    $pokemonTipos = readPokemonTipos();
?>

<div class="row">

    <!-- SECCION POKEMONES -->
    <div class="col-4">
        <h2>Pokemones</h2>

        <form action="../logica/controladores/recepcionCrear.php" method="POST">
            <label>Nombre:</label><br>
            <input type="text" name="Nombre" class="form-control mb-2"><br>
            <label>Nivel:</label><br>
            <input type="text" name="Nivel" class="form-control mb-2"><br>
            <button type="submit" class="btn btn-success">Agregar Pokemon</button>
        </form>

        <table class="table mt-3">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Nivel</th>
            </tr>
            <?php foreach($pokemones as $pokemon){ ?>
            <tr>
                <td><?php echo $pokemon["id"] ?></td>
                <td><?php echo $pokemon["nombre"] ?></td>
                <td><?php echo $pokemon["nivel"] ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>

    <!--  SECCION TIPOS  -->
    <div class="col-4">
        <h2>Tipos</h2>

        <form action="../logica/controladores/recepcionCrearTipo.php" method="POST">
            <label>Nombre:</label><br>
            <input type="text" name="Nombre" class="form-control mb-2"><br>
            <button type="submit" class="btn btn-success">Agregar Tipo</button>
        </form>

        <table class="table mt-3">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
            </tr>
            <?php foreach($tipos as $tipo){ ?>
            <tr>
                <td><?php echo $tipo["id"] ?></td>
                <td><?php echo $tipo["nombre"] ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>

    <!-- SECCION POKEMON TIPO  -->
    <div class="col-4">
        <h2>Pokemon Tipo</h2>

        <form action="../logica/controladores/recepcionCrearPokemonTipo.php" method="POST">
            <label>Pokemon:</label><br>
            <select name="idPokemon" class="form-select mb-2">
                <?php foreach($pokemones as $pokemon){ ?>
                <option value="<?php echo $pokemon["id"] ?>"><?php echo $pokemon["nombre"] ?></option>
                <?php } ?>
            </select><br>
            <label>Tipo:</label><br>
            <select name="idTipo" class="form-select mb-2">
                <?php foreach($tipos as $tipo){ ?>
                <option value="<?php echo $tipo["id"] ?>"><?php echo $tipo["nombre"] ?></option>
                <?php } ?>
            </select><br>
            <button type="submit" class="btn btn-success">Agregar</button>
        </form>

        <table class="table mt-3">
            <tr>
                <th>Pokemon</th>
                <th>Tipo</th>
            </tr>
            <?php foreach($pokemonTipos as $pokemonTipo){ ?>
            <tr>
                <td><?php echo $pokemonTipo["nombre"] ?></td>
                <td><?php echo $pokemonTipo["tipo"] ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>

</div>

</body>
</html>