<?php

class CalculadoraMODEL{

    public function Somar($n1, $n2)
    {
        return $n1 + $n2;
    }

    public function Subtrair($n1, $n2)
    {
        return $n1 -$n2;
    }

    public function Multiplicar($n1, $n2)
    {
        return $n1 * $n2;
    }

    public function Dividir($n1, $n2)
    {
        if ($n2 == 0) {
            throw new Exception("Divisão por zero não permitida");
        }
        return $n1 / $n2;
    }


}