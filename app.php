<?php

    declare(strict_types=1);
    require_once __DIR__ . '/vendor/autoload.php';
    class Person
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

    $person = new Person; 

    echo $person->greetings(name: 'Alexandre', age: 38, heigth:1.61, weigth:63.33, imc: 'imc') . PHP_EOL;


   /*

   function showSystemInfo(): never
{
    $string = shell_exec(command: 'php --version');
    echo $string;
    exit;  // ou die("Aqui vai a mensagem de encerramento do APP");
}

showSystemInfo();

   -->>>> Passando uma função como parametro;

    $person = new Person; 

    echo $person->greetings(name: 'Alexandre', age: 38, heigth:1.61, weigth:63.33, imc: function(int|float $heigth, int|float $weigth){
        $imc = $weigth / ($heigth * $heigth);
        $imc = number_format($imc,2);
        return "O IMC está em: " . $imc;
    }) . PHP_EOL;
    

    
  
 
    -->>> Com valores fixos;
    function imc(int|float $heigth = 98, int|float $weigth = 1.87) : string
    {
        $imc = $heigth / ($weigth * $weigth);
        $imc = number_format($imc,2);
        return "O IMC está em: " . $imc;
    }
    
    $person = new Person; 

    echo $person->greetings(name: 'Alexandre', age: 38, imc: 'imc') . PHP_EOL;  

    */