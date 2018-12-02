<?php

require_once 'class/classCriadora.php';
require_once 'class/classConvenio.php';

$id = isset($_POST['id']) ? $_POST['id'] : null;
$nome = $_POST['nome'];
$contrato = $_POST['contrato'];
$inicio = $_POST['inicio'];
$validade = $_POST ['validade'];
$contato = $_POST ['contato'];
$fone = $_POST['fone'];
$email = $_POST['email'];
$avaliacao = $_POST['avaliacao'];
$obs = $_POST['obs'];

$Convenio = Criadora::criaConvenio();

$Convenio->setId($id);
$Convenio->setNome($nome);
$Convenio->setContrato($contrato);
$Convenio->setInicio($inicio);
$Convenio->setValidade($validade);
$Convenio->setContato($contato);
$Convenio->setFone($fone);
$Convenio->setEmail($email);
$Convenio->setAvaliacao($avaliacao);
$Convenio->setObs($obs);

if ($id){
    $Convenio->update();    
} else {
    $Convenio->insert();
}

?>

<script type='text/javascript'>
  alert('Operação realizada com sucesso!!!');
  location = 'lista_convenios.php';
</script>
