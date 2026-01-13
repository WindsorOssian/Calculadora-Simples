<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Calculadora Simples</h1>
    <form action="index.php" method="GET">

        Digite seu primeiro número aqui:
        <input type="number" name="n1" placeholder="Digite aqui...">
        Digite seu segundo número aqui:
        <input type="number" name="n2" placeholder="Digite aqui">

        <select name="operacao">
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>

        <button name="btn_calcular">Confirmar</button>


    </form>



</body>

</html>