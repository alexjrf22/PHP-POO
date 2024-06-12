<?php declare(strict_types=1);

namespace Alex\Poo;

class Human
{
    public function __construct(
        protected string $gender,
    )
    {  
              echo 'Construtor Human' . PHP_EOL;
    }

    public function __destruct()
    {
        echo "destutor pai" . PHP_EOL; 
    }


	
}