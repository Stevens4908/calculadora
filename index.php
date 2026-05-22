<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $edadFormulario=$_POST["edad"];
        echo $edadFormulario;
        if ($edadFormulario < 12) {
                echo "</br>"."eres un niño";
            }
            elseif($edadFormulario <= 17){
                    echo "</br>"."eres adolecente";
            }
             elseif($edadFormulario <= 59){
                    echo "</br>"."eres adulto";
            }
            else{
                 echo "</br>"."eres adulto mayor";
            }
    } 
    ?>
        <h1> mi calculadora </h1>


            <form method="POST">

                            <input type="number" name="edad" >
                            <button type="submit">enviar</button>

            </form>


        <?php
            $nombre = "steven";
            $edad = 70;
            $apelido = "hernandez";

            $nombreCompleto = $nombre." ".$apelido;

            echo "<b>".$nombreCompleto."</b>";
            
        ?>

            <h2> <?php echo $edad ?>  </h2>

</body>
</html>