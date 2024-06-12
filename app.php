<?php
    
    
    declare(strict_types=1);
    require_once __DIR__ . '/vendor/autoload.php';
    
    use Alex\Poo\Models\Customer;
    use Alex\Poo\Person;
    use Alex\Poo\ValueObjects\Email;

    $person = new Person(name: 'Alexandre', age: 38, gender: 'Masculino');

    dump(var: $person);

    

    /*
    try{

        $validate = new Customer;
        $validate->name = 'Batata';
        $validate->email = new Email(email: "alexjrf22@gmail.com"); 
        echo "O email {$validate->getEmail()} pertence ao {$validate->name}." . PHP_EOL;

    }catch(Exception $exception){

        echo "Opsss! {$exception->getMessage()}" . PHP_EOL;

    }
    

   



 
    // A ideia é que com (final) a classe não pode ser extendida então a classe PersonNoGrata Vai dar erro. 
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
 */