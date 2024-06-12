   <?php  

   //testando os atributos e metodos das classes.
   require_once __DIR__ . '/vendor/autoload.php';
    use Alex\Poo\PessoaFisica;
    use Alex\Poo\PessoaJuridica;
    use Alex\Poo\Pessoa;
    use Alex\Poo\PessoaEstrangeira;

    $pessoaFisica = new PessoaFisica;
    $pessoaFisica->name = 'Alexandre';
    $pessoaFisica->age = 38;
    $pessoaFisica->gender = 'Masculino';
    $pessoaFisica->setCpf(cpf: '018.569.241-90');
    
    /*
    $PessoaEstrangeira = new PessoaEstrangeira;
    $PessoaEstrangeira->name = 'Jason';
    $PessoaEstrangeira->age = 42;
    $PessoaEstrangeira->gender = 'Masculino';
    $PessoaEstrangeira->setCpf(cpf: '000.111.333-66');
    */

    $pessoaJuridica = new PessoaJuridica;
    $pessoaJuridica->name = 'AJSF';
    $pessoaJuridica->cnpj = '15.534.409/0001-65';

    echo "Nome proprietário: " . $pessoaFisica->getName() . ", CPF: " . $pessoaFisica->getCpf() . PHP_EOL;
    echo "Nome da empresa: " . $pessoaJuridica->getName() . ", CNPJ: " . $pessoaJuridica->getCnpj();

    dump($pessoaJuridica->getName());
    dump($pessoaJuridica->getCnpj());
    dump($pessoaFisica->getName());
    dump(var: $pessoaFisica->getCpf());
    
    dump(var: $pessoaFisica->showName());

    if($pessoaJuridica instanceof Pessoa){
        dump(var: "É pessoa tbm");
    }else{
        dump('não é pessoa');
    }
    
    $pessoaFisica->getName($pessoaJuridica);
  
   $document = $pessoaJuridica->getCnpj();

    echo $document . PHP_EOL;

    