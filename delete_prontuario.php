<?php

require_once 'class/classCriadora.php';
require_once 'class/classProntuario.php';

$id = $_GET['id'];

$Prontuario = Criadora::criaProntuario();

$Prontuario->setId($id);
$Prontuario->delete($id);
?>

<script type='text/javascript'>
    alert('Prontuario deletado com sucesso!!!');
    location = 'lista_prontuarios.php';
</script>
