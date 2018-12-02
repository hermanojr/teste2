<?php

require_once 'class/classCriadora.php';
require_once 'class/classClinica.php';

$id = $_GET['id'];

$Clinica = Criadora::criaClinica();

$Clinica->setId($id);
$Clinica->delete($id);
?>

<script type='text/javascript'>
    alert('Clinica deletada com sucesso!!!');
    location = 'lista_clinicas.php';
</script>
