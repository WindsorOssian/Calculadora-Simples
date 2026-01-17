<?php

$resultado = null;

if(isset($_GET['btn_descobrir'])){

$n1 = $_GET['n1'];

// O operador % é o módulo, ele significa: “Qual é o resto da divisão de n1 por 2?”
// Regra:
// Número par → resto da divisão por 2 é 0
// Número ímpar → resto da divisão por 2 é 1
// “Quantos grupos completos eu consigo formar e o que sobra?” Não é um número dividido por 2 é igual a 0, é um número agrupado em duas unidades deixa alguma sem par? Se deixa é impar.

if ($n1 % 2 == 0) {
        $resultado = "O número $n1 é PAR"; // Não sobrou ninguém sem um grupo
    } else {
        $resultado = "O número $n1 é ÍMPAR"; // Sobrou alguém sem um grupo
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descobrir se o número é par</title>
</head>

<body>
    <form action="verificarparimpar.php" method="GET">

        <h1>Descubra se o seu número é par ou impar</h1>

        <input type="number" required name="n1" placeholder="Digite aqui...">

        <button name="btn_descobrir">Confirmar</button>

    </form>

    <?php if ($resultado !== null): ?>
        <h2><?= $resultado ?></h2>
    <?php endif; ?>

</body>

</html>