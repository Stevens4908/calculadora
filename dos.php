<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php


$mensaje = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $num1=$_POST["num1"];
            $num2=$_POST["num2"];
           
            $signo=$_POST["operacion"];
            

                if($signo=="suma"){
                    $resultado = $num1 + $num2; 
                }
                elseif($signo=="resta"){
                    $resultado = $num1 - $num2;
                }
                elseif($signo=="multiplicacion"){
                    $resultado = $num1 * $num2;
                }
                elseif($signo=="division"){
                    $resultado = $num1 / $num2;
                }
                else{
                    echo "no se seleccionó una operacion";
                }

                $mensaje = "el resultado de la operacion es ".$resultado;
            
        }
                
        




    ?>



            <form method="post" >

                <input type="number" name="num1" placeholder="ingresa el primer número" >
                </br>
                </br>
                <h3>selecciona la operación</h3>
                <select name="operacion">
                    
                   <option value="suma">+</option>
                   <option value="resta">-</option>
                   <option value="multiplicacion">*</option>  
                   <option value="division">/</option> 

                </select>

                </br>
                </br>
                <input type="number" name="num2" placeholder="ingresa el segundo número" >
                </br>
                </br>
                <button type="submit">enviar</button>
            </form>

            <?php
                    echo $mensaje;
            ?>
    
</body>
</html>