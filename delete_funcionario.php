<?php

require_once 'class/classCriadora.php';
require_once 'class/classFuncionario.php';

$id = $_GET['id'];

$Funcionario = Criadora::criaFuncionario();

$Funcionario->setId($id);
$Funcionario->delete($id);
?>

<script type='text/javascript'>
   alert('Funcionario deletado com sucesso!!!');
   location = 'lista_funcionarios.php';
</script>
