<?php

require_once 'class/classCriadora.php';
require_once 'class/classMedico.php';

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
$especialidade = $_POST['especialidade'];

$Medico = Criadora::criaMedico();

$Medico->setId($id);
$Medico->setNome($nome);
$Medico->setNascimento($nascimento);
$Medico->setCpf($cpf);
$Medico->setEndereco($endereco);
$Medico->setBairro($bairro);
$Medico->setMunicipio($municipio);
$Medico->setUf($uf);
$Medico->setCep($cep);
$Medico->setFone($fone);
$Medico->setCelular($celular);
$Medico->setEmail($email);
$Medico->setSenha($senha);
$Medico->setCargo($cargo);
$Medico->setSalario($salario);
$Medico->setEspecialidade($especialidade);

if ($id){
    $Medico->update();    
} else {
    $Medico->insert();
}

?>

<script type='text/javascript'>
   alert('Operação realizada com sucesso!!!');
   location = 'lista_medicos.php';
</script>
