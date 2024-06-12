<?php declare(strict_types=1);

namespace Alex\Poo\ValueObjects;
use DomainException;

class Email
{
    public function __construct(private string $email)
    {
        $this->validate();
    }

    private function validate(): void
    {
        if(!filter_var($this->email, filter: FILTER_VALIDATE_EMAIL)){
            throw new DomainException(message: "Email inválido!");
        }
    }

    public function __toString(): string
    {
        return $this->email;
    }
	
}