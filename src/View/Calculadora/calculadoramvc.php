<!DOCTYPE html>
<html>
<head>
    <title>Calculadora MVC</title>
</head>
<body>

<form method="GET">
    <input type="number" name="n1" required>
    <input type="number" name="n2" required>

    <select name="operacao">
        <option value="somar">Somar</option>
        <option value="subtrair">Subtrair</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
    </select>

    <button name="btn_calcular">Calcular</button>
</form>

<?php if (isset($resultado)): ?>
    <h2>Resultado: <?= $resultado ?></h2>
<?php endif; ?>

<?php if (isset($erro)): ?>
    <p style="color:red"><?= $erro ?></p>
<?php endif; ?>

</body>
</html>
