<?php

require_once 'class/classCriadora.php';
require_once 'class/classConsulta.php';

$id = $_GET['id'];

$Consulta = Criadora::criaConsulta();

$Consulta->setId($id);
$Consulta->delete($id);
?>

<script type='text/javascript'>
    alert('Consulta deletada com sucesso!!!');
    location = 'lista_consultas.php';
</script>
