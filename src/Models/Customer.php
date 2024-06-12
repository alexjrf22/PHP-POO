<?php declare(strict_types=1);

namespace Alex\Poo\Models;
use Alex\Poo\ValueObjects\Email;

class Customer
{
    public string $name;
    public Email $email;

    public function getName(): string 
    {
        return $this->name;
    }

	public function getEmail(): string 
    {
        return (string) $this->email;
    }

	
}

