<?php

require_once 'class/classCriadora.php';
require_once 'class/classProntuario.php';

$id = $_GET['id'];

$Prontuario = Criadora::criaProntuario();

$Prontuario->setId($id);
$Prontuario->delete($id);

header('Location: /detalhe_paciente.php?id='.$_GET['id']);
?>

