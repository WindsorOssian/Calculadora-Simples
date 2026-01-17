<?php

$resultado = null;

if (isset($_GET['btn_calcular'])) {

    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];


    if ($n1 == 0 && $n2 == 0) {

        $resultado = "Resultado indefinido";
    } else if ($n2 == 0) {

        $resultado = "Não é possível dividir por zero";
    } else {

        $resultado = $n1 / $n2;
    }
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

    <form action="calculadoradivisao.php" method="GET">

        <h2>Calculadora Divisão</h2>

        <h3>Dividendo</h3>
        <input type="number" required name="n1" placeholder="Digite aqui o Dividendo">

        <br>

        <h3>Divisor</h3>
        <input type="number" required name="n2" placeholder="Digite aqui o Divisor">

        <button name="btn_calcular">Calcular</button>

    </form>

    <?php if ($resultado !== null): ?>

        <h2>Resultado do Quociente: <?= $resultado ?></h2>

    <?php endif; ?>



</body>

</html>