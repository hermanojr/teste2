<?php

require_once 'class/classCriadora.php';
require_once 'class/classPaciente.php';

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
$Convenio_id = $_POST['Convenio_id']; 
$numeroConvenio = $_POST['numeroConvenio'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];

$Paciente = Criadora::criaPaciente();

$Paciente->setId($id);
$Paciente->setNome($nome);
$Paciente->setNascimento($nascimento);
$Paciente->setCpf($cpf);
$Paciente->setEndereco($endereco);
$Paciente->setBairro($bairro);
$Paciente->setMunicipio($municipio);
$Paciente->setUf($uf);
$Paciente->setCep($cep);
$Paciente->setFone($fone);
$Paciente->setCelular($celular);
$Paciente->setEmail($email);
$Paciente->setConvenio_id($Convenio_id);
$Paciente->setNumeroConvenio($numeroConvenio);
$Paciente->setPeso($peso);
$Paciente->setAltura($altura);

if ($id){
    $Paciente->update();    
} else {
    $Paciente->insert();
}

?>

<script type='text/javascript'>
    alert('Operação realizada com sucesso!!!');
    location = 'lista_pacientes.php';
</script>
