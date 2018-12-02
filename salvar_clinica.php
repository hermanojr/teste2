<?php

require_once 'class/classCriadora.php';
require_once 'class/classClinica.php';

$id = isset($_POST['id']) ? $_POST['id'] : null;
$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$municipio = $_POST['municipio'];
$uf = $_POST['uf'];
$cep = $_POST['cep'];
$fone = $_POST['fone'];
$email = $_POST['email'];
$avaliacao = $_POST['avaliacao'];
$dataCriacao = $_POST['dataCriacao'];

$Clinica = Criadora::criaClinica();

$Clinica->setId($id);
$Clinica->setNome($nome);
$Clinica->setCnpj($cnpj);
$Clinica->setEndereco($endereco);
$Clinica->setBairro($bairro);
$Clinica->setMunicipio($municipio);
$Clinica->setUf($uf);
$Clinica->setCep($cep);
$Clinica->setFone($fone);
$Clinica->setEmail($email);
$Clinica->setAvaliacao($avaliacao);
$Clinica->setDataCriacao($dataCriacao);

if ($id){
    $Clinica->update();    
} else {
    $Clinica->insert();
}

?>

<script type='text/javascript'>
  alert('Operação realizada com sucesso!!!');
  location = 'lista_clinicas.php';
</script>
