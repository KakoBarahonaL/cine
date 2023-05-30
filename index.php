<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos.css">
    <title>Sistema Venta de Entradas</title>
</head>
<body>
    <div class="contitulo">
        <img id="entradasimg" src="IMG/entradas.png">
        <h1 class="titulo">Sistema Venta de Entradas</h1>
        <img id="entradasimg" src="IMG/entradas.png">
    </div>

    <div class="formu">
        <form action="" method="POST">
            <label for="edad">Seleccione el tipo de entrada</label>
            <select name="edad" id="edad">
                <option value="Niño">Niño</option>
                <option value="Adulto">Adulto</option>
                <option value="Tercera Edad">Tercera Edad</option>
            </select>   
            <br><br>
            <label for="cantidad" id="cantidad">Cantidad de Entradas</label>
            <input type="tex" name="cantidad" required>
            <br><br>
            <input class="bt" type="submit" name="btn" value="Comprar">
            <input class="bt" type="reset" value="Limpiar">
        </form> 
    </div>
    <?php
    include "entradas.php";

    $entradas = new Entradas();

    if (isset($_POST["btn"])){
        
        
        $entradas->setDatos($_POST["edad"], $_POST["cantidad"]);

        $TiEn = $entradas->getTipoEnt();
        $CaEn = $entradas->getCantEnt();
        $precioen = 3500;
        $descuento = 0;
        

        switch ($TiEn){
            case "Niño":
                $descuento = 0.30;
                $descuentoE = '30%';
                break;
            case "Adulto":
                $descuento = 0.05;
                $descuentoE = '5%';
                break;
            case "Tercera Edad":
                $descuento = 0.55;
                $descuentoE = '55%';  
                break;       
        }

        $valorentrada = $CaEn * $precioen;
        $totentrada = $valorentrada-($valorentrada * $descuento);

        $entradas->setBoleta($totentrada, $descuento);
    
        
       ?>  
        <h1 class="comex">*** COMPRA EXITOSA***</H1>
        <br>
        <hr>
        <br>
        <div class="boleta">
            <img class="logo" src="img/logo.png">
            <br>
            <h1> Boleta de Compra </h1>
            <hr>
            <div class="datos">
                <p> Tipo de Entrada: <?php echo $TiEn; ?> <p>
                <p> Valor de la entrada: $3.500 </p> 
                <p> Cantidad de Entradas: <?php echo $CaEn; ?> <p> 
                <p> Valor Total: $<?php echo $valorentrada; ?> <p>
                <p> Descuento: <?php echo $descuentoE; ?> <p>   
                <h3 class="totpagar"> Total a Pagar: $<?php echo $totentrada; ?> </h3>  
            </div>           
        </div>
        <?php        
    }
    ?>
    
</body>
</html>