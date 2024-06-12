<?php

// A ideia é que com (final) a classe não pode ser extendida então a classe PersonNoGrata Vai dar erro. 
    final class Person
    {

        public function greetings(string $name, int $age, int|float $heigth, int|float $weigth, callable $imc): string
        {
            $return = "Olá {$name} , você possui {$age} anos de idade.";
            $return .= $imc(heigth: $heigth, weigth: $weigth);
            return $return;

        }

    }

    function imc(int|float $heigth, int|float $weigth) : string
    {
        $imc = $weigth / ($heigth * $heigth);
        $imc = number_format($imc,2);
        return "O IMC está em: " . $imc;
    }
    /*
    class PersonNoGrata extends Person
    {

    }
    */