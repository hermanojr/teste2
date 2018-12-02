<?php
require_once 'class/classSingleton.php';
require_once 'class/classProntuario.php';

$db = ConexaoSingleton::getInstance();

$stmt = $db->prepare("SELECT * FROM prontuario where id=".$_GET['id']);
$stmt->execute();
$row = $stmt->fetch();


$stmtMedico = $db->prepare("SELECT * FROM medico");
$stmtMedico->execute();

$stmtPaciente = $db->prepare("SELECT * FROM paciente");
$stmtPaciente->execute();

$stmtConsulta = $db->prepare("SELECT * FROM consulta");
$stmtConsulta->execute();

$stmtExame = $db->prepare("SELECT * FROM exame");
$stmtExame->execute();

$stmtDoenca = $db->prepare("SELECT * FROM doenca");
$stmtDoenca->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clínica Médica</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    
    <?php require 'menu.php'; ?>
    
    <div class="container">
    <form method="post" action="salvar_prontuario.php">
        <div class="card">
            <div class="card-header">
                Alterar Prontuario
            </div>
            <div class="card-body">

                    <input type="hidden" name="id" value="<?=$row['id']?>">
                
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtPaciente">Paciente</label>
                        <div class="col-md-6">
                        <select class="form-control" id="txtPaciente" name="Paciente_id">
<?php
                            while ($rowPaciente = $stmtPaciente->fetch()) {
?>                
                            <option <?php if($rowPaciente['id'] == $row['Paciente_id']) { ?>selected<?php } ?> 
                                value="<?=$rowPaciente['id']?>"><?=$rowPaciente['nome']?>
                            </option>
<?php
                            }
?>                            
                        </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtMedico">Médico Principal</label>
                        <div class="col-md-6">
                        <select class="form-control" id="txtMedico" name="Medico_id">
<?php
                            while ($rowMedico = $stmtMedico->fetch()) {
?>                
                            <option <?php if($rowMedico['id'] == $row['Medico_id']) { ?>selected<?php } ?> 
                                value="<?=$rowMedico['id']?>"><?=$rowMedico['nome']?>
                            </option>
<?php
                            }
?>                            
                        </select>
                        </div>
                    </div>
                                        
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtDataInsercao">Data de Criação</label>
                        <div class="col-md-6">
                        <input type="date" class="form-control" id="txtDataInsercao" name="dataInsercao" value="<?=$row['dataInsercao']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtHistoricoFamiliar">Histórico Familiar</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtHistoricoFamiliar" name="historicoFamiliar" value="<?=$row['historicoFamiliar']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtObs">Observações</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtObs" name="obs" value="<?=$row['obs']?>">
                        </div>
                    </div>
                                                                                
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Salvar">
                <a href="detalhe_prontuario.php?id=<?=$_GET['id']?>" class="btn btn-link">Cancelar</a>
            </div>
        </div>
        </form>

    </div>
</body>
</html>