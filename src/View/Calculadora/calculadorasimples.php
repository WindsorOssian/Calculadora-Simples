<?php
$resultado = null;
$erro = null;

// DEBUG (pode remover depois)
echo '<pre>'; print_r($_GET); echo '</pre>';

if (!empty($_GET)) {

    $n1 = $_GET['n1'] ?? null;
    $n2 = $_GET['n2'] ?? null;
    $operacao = $_GET['operacao'] ?? null;

    if ($n1 !== null && $n2 !== null && $operacao !== null) {

        switch ($operacao) {
            case 'somar':
                $resultado = $n1 + $n2;
                break;

            case 'subtrair':
                $resultado = $n1 - $n2;
                break;

            case 'multiplicar':
                $resultado = $n1 * $n2;
                break;

            case 'dividir':
                if ($n2 == 0) {
                    $erro = "Erro: divisão por zero";
                } else {
                    $resultado = $n1 / $n2;
                }
                break;

            default:
                $erro = "Operação inválida";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Simples</title>
</head>
<body>

<h1>Calculadora Simples</h1>

<form method="GET">
    <input type="number" name="n1" placeholder="Primeiro número" required>

    <input type="number" name="n2" placeholder="Segundo número" required>

    <select name="operacao">
        <option value="somar">Somar</option>
        <option value="subtrair">Subtrair</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
    </select>

    <button type="submit">Calcular</button>
</form>

<?php if ($erro): ?>
    <p style="color:red"><?= $erro ?></p>
<?php endif; ?>

<?php if ($resultado !== null): ?>
    <h2>Resultado: <?= $resultado ?></h2>
<?php endif; ?>

</body>
</html>
