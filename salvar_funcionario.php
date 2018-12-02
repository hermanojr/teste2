<?php

require_once 'class/classCriadora.php';
require_once 'class/classFuncionario.php';

$id = isset($_POST['id']) ? $_POST['id'] : null;
$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$municipio = $_POST['municipio'];
$uf = $_POST['uf'];
$cep = $_POST['cep'];
$fone = $_POST['fone'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];

$Funcionario = Criadora::criaFuncionario();

$Funcionario->setId($id);
$Funcionario->setNome($nome);
$Funcionario->setNascimento($nascimento);
$Funcionario->setCpf($cpf);
$Funcionario->setEndereco($endereco);
$Funcionario->setBairro($bairro);
$Funcionario->setMunicipio($municipio);
$Funcionario->setUf($uf);
$Funcionario->setCep($cep);
$Funcionario->setFone($fone);
$Funcionario->setCelular($celular);
$Funcionario->setEmail($email);
$Funcionario->setSenha($senha);
$Funcionario->setCargo($cargo);
$Funcionario->setSalario($salario);

if ($id){
    $Funcionario->update();    
} else {
    $Funcionario->insert();
}

?>

<script type='text/javascript'>
   alert('Operação realizada com sucesso!!!');
   location = 'lista_funcionarios.php';
</script>
