<?php
require_once './src/Model/CalculadoraMODEL.php';

class CalculadoraCTRL
{
    public function calcular()
    {
        $resultado = null;
        $erro = null;

        if (isset($_GET['btn_calcular'])) {
            $n1 = (float) $_GET['n1'];
            $n2 = (float) $_GET['n2'];
            $operacao = $_GET['operacao'];

            $calculadora = new CalculadoraMODEL();

            try {
                switch ($operacao) {
                    case 'somar':
                        $resultado = $calculadora->somar($n1, $n2);
                        break;
                    case 'subtrair':
                        $resultado = $calculadora->subtrair($n1, $n2);
                        break;
                    case 'multiplicar':
                        $resultado = $calculadora->multiplicar($n1, $n2);
                        break;
                    case 'dividir':
                        $resultado = $calculadora->dividir($n1, $n2);
                        break;
                }
            } catch (Exception $e) {
                $erro = $e->getMessage();
            }
        }

        require '../View/calculadora.php';
    }
}
