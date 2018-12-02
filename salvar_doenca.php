<?php

require_once 'class/classCriadora.php';
require_once 'class/classDoenca.php';

$id = isset($_POST['id']) ? $_POST['id'] : null;
$nome = $_POST['nome'];
$cid = $_POST['cid'];
$grauRisco = $_POST['grauRisco'];
$areaMedica = $_POST ['areaMedica'];
$dataInsercao = $_POST ['dataInsercao'];
$descricao = $_POST ['descricao'];
$tratamento = $_POST ['tratamento'];
$causa = $_POST['causa'];
$tempoTratamento = $_POST['tempoTratamento'];
$medicamento = $_POST['medicamento'];



$Doenca = Criadora::criaDoenca();
$Doenca->setId($id);
$Doenca->setNome($nome);
$Doenca->setCid($cid);
$Doenca->setGrauRisco($grauRisco);
$Doenca->setAreaMedica($areaMedica);
$Doenca->setDataInsercao($dataInsercao);
$Doenca->setDescricao($descricao);
$Doenca->setTratamento($tratamento);
$Doenca->setCausa($causa);
$Doenca->setTempoTratamento($tempoTratamento);
$Doenca->setMedicamento($medicamento);

if ($id){
    $Doenca->update();    
} else {
    $Doenca->insert();
}

?>

<script type='text/javascript'>
  alert('Operação realizada com sucesso!!!');
  location = 'lista_doencas.php';
</script>
