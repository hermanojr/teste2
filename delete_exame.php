<?php

require_once 'class/classCriadora.php';
require_once 'class/classExame.php';

$id = $_GET['id'];

$Exame = Criadora::criaExame();

$Exame->setId($id);
$Exame->delete($id);
?>

<script type='text/javascript'>
    alert('Exame deletada com sucesso!!!');
    location = 'lista_exames.php';
</script>
