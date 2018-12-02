<?php

require_once 'class/classCriadora.php';
require_once 'class/classExame.php';

$id = isset($_POST['id']) ? $_POST['id'] : null;
$nome = $_POST['nome'];
$valor = $_POST['valor'];
$descricao = $_POST ['descricao'];
$dataInsercao = $_POST ['dataInsercao'];
$doencaRelacionada = $_POST['doencaRelacionada'];
$tempoResultado = $_POST ['tempoResultado'];
$tempoExame = $_POST ['tempoExame'];
$referencia = $_POST['referencia'];
$especialidade = $_POST['especialidade'];

$Exame = Criadora::criaExame();

$Exame->setId($id);
$Exame->setNome($nome);
$Exame->setValor($valor);
$Exame->setDescricao($descricao);
$Exame->setDataInsercao($dataInsercao);
$Exame->setDoencaRelacionada($doencaRelacionada);
$Exame->setTempoResultado($tempoResultado);
$Exame->setTempoExame($tempoExame);
$Exame->setReferencia($referencia);
$Exame->setEspecialidade($especialidade);
if ($id){
    $Exame->update();    
} else {
    $Exame->insert();
}

?>

<script type='text/javascript'>
  alert('Operação realizada com sucesso!!!');
  location = 'lista_exames.php';
</script>
