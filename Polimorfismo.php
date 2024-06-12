<?php  

   //aula polimorfismo garantindo que as classes que entram na impressão de nomes possuem o metodo getName() o qual é utilizado para imprimir 
   //evitando assim que entre uma classe que não possui o metodo e cause erro.

   require_once __DIR__ . '/vendor/autoload.php';
    use Alex\Poo\PessoaFisica;
    use Alex\Poo\PessoaJuridica;
    use Alex\Poo\Pessoa;
    use Alex\Poo\Pessoas;

    $pessoaFisica = new PessoaFisica;
    $pessoaFisica->name = 'Alexandre';    

    $pessoaJuridica = new PessoaJuridica;
    $pessoaJuridica->name = 'AJSF';

    /* Exemplo de uma classe anonima que não implementa a calsse abstract Pessoa

    $outraPessoa = new class {
      public function showName(): void{
         echo 'Outra Pessoa'; 
      }
    };
    

    testando a classe

    $outraPessoa->showName(); exit;
   
    adicionando ao metodo gera erro pois não implementa abstract Pessoa.
    Pessoas::add([$pessoaFisica, $pessoaJuridica, $outraPessoa]);
    ERRO -->> PHP Fatal error:  Uncaught TypeError: Alex\Poo\Pessoas::show(): Argument #1 ($pessoa) 
    ERRO -->> must be of type Alex\Poo\Pessoa, null given, called in /home/alexandre/Projetos/PHP/POO/src/Pessoas.php on line 18 
    ERRO -->> and defined in /home/alexandre/Projetos/PHP/POO/src/Pessoas.php:23

    */
    
    Pessoas::add([$pessoaFisica, $pessoaJuridica]);
    Pessoas::showNames();

    