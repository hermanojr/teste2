<?php

require_once 'class/classCriadora.php';
require_once 'class/classMedico.php';

$id = $_GET['id'];

$Medico = Criadora::criaMedico();

$Medico->setId($id);
$Medico->delete($id);
?>

<script type='text/javascript'>
    alert('Medico deletado com sucesso!!!');
    location = 'lista_medicos.php';
</script>
