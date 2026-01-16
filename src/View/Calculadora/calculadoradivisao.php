<?php

$resultado = null;

if(isset($_GET['btn_calcular'])){

    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $resultado = $n1 / $n2;


}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Divisão</title>
</head>

<body>

    <form action="calculadoradivisao.php" method="GET" >

        <h2>Calculadora Divisão</h2>

        <input type="number" required name="n1" placeholder="Digite aqui...">

        <h2>Dividir</h2>

        <input type="number" required name="n2" placeholder="Digite aqui">

        <button name="btn_calcular">Calcular</button>

    </form>

    <?php
    
    echo "<h2>Resultado: $resultado</h2>";

    ?>



</body>

</html>