<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
   
<?php


     $url= "https://pokeapi.co/api/v2/pokemon/charmander";


        $response = file_get_contents($url);


        $data = json_decode($response, true);


       
        $grass = $data["types"][0]["type"]["name"];


        $nombre =$data["forms"][0]["name"];


        $altura = $data["height"];
        $peso = $data["weight"];
        $habilidad = $data["abilities"][0]["ability"]["name"];


       $hp = $data["stats"][0]["stat"]["name"];
        $hp_value = $data["stats"][0]["base_stat"];


        $attack = $data["stats"][1]["stat"]["name"];
        $attack_value = $data["stats"][1]["base_stat"];


        $defense = $data["stats"][2]["stat"]["name"];
        $defense_value = $data["stats"][2]["base_stat"];


        $special_a = $data["stats"][3]["stat"]["name"];
        $special_a_value = $data["stats"][3]["base_stat"];


        $special_d = $data["stats"][4]["stat"]["name"];
        $special_d_value = $data["stats"][4]["base_stat"];


        $speed = $data["stats"][5]["stat"]["name"];
        $speed_value = $data["stats"][5]["base_stat"];


?>


<div class="container-fluid bg-success ">
<div class="container bg-success p-5">




    <div class="row text-white">


        <div class="col-6 ">
            <h3 class="text-center"><?php echo $grass ?></h3>
            <h1 class="text-center"><?php echo $nombre ?></h1>
                <div class="row">
                    <div class="col-6 h3">
                        height </br>
                        weight  </br>
                        abilities
                    </div>
                    <div class="col-6">
                        <h3><?php echo $altura ?></h3>
                        <h3><?php echo $peso ?></h3>
                        <h3><?php echo $habilidad ?></h3>
                    </div>
                </div>
           
        </div>


        <div class="col-6 ">
            <img src="bul.png" class="img-fluid" alt="..." style="width:30vw;height:30vh;">
        </div>


    </div>


    <div class="row text-white">
        <div class="col-3 ">
            <h1 class="">Stats</h1>
        </div>


        <div class="col-3">
            <?php echo "<h4>".$hp."</h4>";
            echo "<h4>".$attack."</h4>";
            echo "<h4>".$defense."</h4>";
            echo "<h4>".$special_a."</h4>";
            echo "<h4>".$special_d."</h4>";
            echo "<h4>".$speed."</h4>";
            ?>


        </div>


        <div class="col-3">
        </div>


        <div class="col-3">
            <?php
            echo "<h4>".$hp_value."</h4>";
            echo "<h4>".$attack_value."</h4>";
            echo "<h4>".$defense_value."</h4>";
            echo "<h4>".$special_a_value."</h4>";
            echo "<h4>".$special_d_value."</h4>";
            echo "<h4>".$speed_value."</h4>";
            ?>
        </div>
    </div>


 


       






</div>
</div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
