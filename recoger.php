<?php
    function visualizarCamposFormulario(){
        foreach($_POST as $clave => $valor){
            //EMPTY PARA VER EI EL VALOR DEL ARRAY ESTÁ VACÍO
            if($clave != "medidas" && empty (!$valor)){ // se compara la clave del array $POST con "medidas" para excluir el campo medidas, que visualizaremos al final
                echo "<b>".$clave."</b>: ".$valor."<br>";
            }else{
                //visualizarmedidas
            }
        }
        visualizarMedidas();
    }
    
    function visualizarMedidas(){
        echo "<h2>MEDIDAS SELECCIONADAS</h2>";
        if (isset($_POST["medidas"])){
            foreach($_POST["medidas"] as $medida){
                echo $medida."<br>";
            }
        }else{
            echo"No se han seleccionado medidas";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    ><head>
        <meta charset="UTF-8">
        <title>Document</title>
</head>
    <body>
        <?php
            if(empty($_POST["nombre"])){ // sin negarlo devuelve true. pregunta ¿Esta vacio? SI - SIN NOMBRE, NO - VISUALIZA NOMBRE
                echo"SIN NOMBRE";
            }else{
                echo "NOMBRE: ".$_POST["nombre"];
            }
            visualizarCamposFormulario();
        ?>
    </body>
</html>