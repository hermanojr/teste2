<?php

require_once 'class/classCriadora.php';
require_once 'class/classConsulta.php';

$id = isset($_POST['id']) ? $_POST['id'] : null;
$Medico_id = $_POST['Medico_id'];
$Paciente_id = $_POST['Paciente_id'];
$tipo = $_POST['tipo'];
$dataConsulta= $_POST['dataConsulta'];
$horaInicio = $_POST['horaInicio'];
$valor = $_POST['valor'];
$sintoma = $_POST['sintoma'];
$horaTermino = $_POST['horaTermino'];
$observacao = $_POST['observacao'];

$Consulta = Criadora::criaConsulta();

$Consulta->setId($id);
$Consulta->setMedico_id($Medico_id);
$Consulta->setPaciente_id($Paciente_id);
$Consulta->setTipo($tipo);
$Consulta->setDataConsulta($dataConsulta);
$Consulta->setHoraInicio($horaInicio);
$Consulta->setValor($valor);
$Consulta->setSintoma($sintoma);
$Consulta->setHoraTermino($horaTermino);
$Consulta->setObservacao($observacao);

if ($id){
    $Consulta->update();    
} else {
    $Consulta->insert();
}

?>

<script type='text/javascript'>
    alert('Operação realizada com sucesso!!!');
    location = 'lista_consultas.php';
</script>
