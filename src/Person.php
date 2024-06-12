<?php declare (strict_types=1);

namespace Alex\Poo;
use DomainException;

class Person extends Human
{

    public function __construct(
        public string $name,
        public int $age,
        string $gender
    ){
        parent::__construct($gender);
        $this->validateName();
        echo 'Construtor Person' . PHP_EOL;
    }

    private function validateName():void
    {
        if($this->name !== 'Alexandre'){
            throw new DomainException(message: 'Nome não é válido');
        }
    }

    public function __destruct()
    {
        parent::__destruct();
        echo 'Destrutor de person' . PHP_EOL;
    }
}

