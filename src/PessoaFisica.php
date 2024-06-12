<?php

    declare(strict_types=1);
    namespace Alex\Poo;

    final class PessoaFisica extends Pessoa implements PessoaFisicaInterface
    {
        public string $age;
        public string $gender;
        private string $cpf;

        public function setCpf(string $cpf): void
        {
            $this->cpf = $cpf;
        }

        public function getCpf(): string
        {
            return $this->cpf;
        }

        public function getName(): string
        {
            return $this->name;
        }

    }