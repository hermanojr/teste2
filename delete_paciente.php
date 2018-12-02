<?php

require_once 'class/classCriadora.php';
require_once 'class/classPaciente.php';

$id = $_GET['id'];

$Paciente = Criadora::criaPaciente();

$Paciente->setId($id);
$Paciente->delete($id);
?>

<script type='text/javascript'>
    alert('Paciente deletado com sucesso!!!');
    location = 'lista_pacientes.php';
</script>
