<?php

$resultado = null;

if (isset($_GET['btn_calcular'])) {

    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];

    $resultado = $n1 - $n2;

    // echo "<h2>Resultado: $resultado</h2>";

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Subtrair</title>
</head>

<body>

    <form action="calculadorasubtrair.php" method="GET">

        <h3>Digite o primeiro número</h3>
        <input name="n1" type="number" placeholder="Digite aqui..." required>

        <h3>Subtrair</h3>

        <h3>Digite o seu segundo número</h3>
        <input name="n2" type="number" placeholder="Digite aqui..." required>

        <br><br>
        <button name="btn_calcular">Confirmar</button>


        <?php if ($resultado !== null): ?>
            <h2>Resultado: <?= $resultado ?></h2>
        <?php endif; ?>

    </form>


</body>

</html>