<?php

require_once 'class/classCriadora.php';
require_once 'class/classProntuario_doenca.php';

$id = isset($_POST['id']) ? $_POST['id'] : null;
$Medico_id = $_POST['Medico_id'];


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
