<?php

require_once 'class/classCriadora.php';
require_once 'class/classProntuario.php';

$id = isset($_POST['id']) ? $_POST['id'] : null;
$Medico_id = $_POST['Medico_id'];
$Paciente_id = $_POST['Paciente_id'];
$Consulta_id = $_POST['Consulta_id'];
$Exame_id= $_POST['Exame_id'];
$Doenca_id = $_POST['Doenca_id'];
$dataInsercao = $_POST['dataInsercao'];
$obs = $_POST['obs'];
$historicoFamiliar = $_POST['historicoFamiliar'];

$Prontuario = Criadora::criaProntuario();

$Prontuario->setId($id);
$Prontuario->setMedico_id($Medico_id);
$Prontuario->setPaciente_id($Paciente_id);
$Prontuario->setConsulta_id($Consulta_id);
$Prontuario->setExame_id($Exame_id);
$Prontuario->setDoenca_id($Doenca_id);
$Prontuario->setDataInsercao($dataInsercao);
$Prontuario->setObs($obs);
$Prontuario->setHistoricoFamiliar($historicoFamiliar);

if ($id){
    $Prontuario->update();    
} else {
    $Prontuario->insert();
}

?>

<script type='text/javascript'>
    //alert('Operação realizada com sucesso!!!');
    //location = 'lista_prontuarios.php';
</script>
