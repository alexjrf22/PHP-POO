<?php

declare(strict_types=1);
namespace Alex\Poo;

class Pessoas
{
    private static array $pessoas = [];

    public static function add(array $pessoas): void
    {
        self::$pessoas = $pessoas;
    }

    public static function showNames(): void
    {
        foreach(self::$pessoas as $pessoa){
            self::show($pessoa);
        }    
    }
    //metodo que garante polimorfismo ou seja que quem vai entrar no array de impressão teo metodo certo GET name pois está instanciando 
    //a classe abstrata Pessoa que obriga vc a desenvolver esse metodo.
    public static function show(Pessoa $pessoa): void
    {
        echo $pessoa->getName() . PHP_EOL;
    }
}