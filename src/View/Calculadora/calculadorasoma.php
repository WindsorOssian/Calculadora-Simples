<?php

$resultado = '';

if (isset($_GET['btn_calcular'])) {

    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $resultado = '';

    $resultado = $n1 + $n2;

    // echo "<h2>Resultado: $resultado<h2>";
    // DEBUG (pode remover depois)
    echo '<pre>';
    print_r($_GET);
    echo '</pre>';

    // Para ver o resultado
    // var_dump($resultado);
    // // ou
    // echo $resultado;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="GET">
        <h2>Calculadora simplificada</h2>

        <h3>Digite aqui seu primeiro numero:</h3>
        <input name="n1" placeholder="Digite aqui...">

        <h3>Para somar</h3>

        <h3>Digite aqui seu segundo numero:</h3>
        <input name="n2" placeholder="Digite aqui...">

        <button name="btn_calcular">Calcular</button>

    </form>

    <?php echo "<h2>Resultado: $resultado<h2>" ?>

</body>

</html>