<?php

require_once 'class/classCriadora.php';
require_once 'class/classDoenca.php';

$id = $_GET['id'];

$Doenca = Criadora::criaDoenca();

$Doenca->setId($id);
$Doenca->delete($id);
?>

<script type='text/javascript'>
    alert('Doenca deletada com sucesso!!!');
    location = 'lista_doencas.php';
</script>
