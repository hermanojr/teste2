<?php

require_once 'class/classCriadora.php';
require_once 'class/classConvenio.php';

$id = $_GET['id'];

$Convenio = Criadora::criaConvenio();

$Convenio->setId($id);
$Convenio->delete($id);
?>

<script type='text/javascript'>
    alert('Convênio deletado com sucesso!!!');
    location = 'lista_convenios.php';
</script>
