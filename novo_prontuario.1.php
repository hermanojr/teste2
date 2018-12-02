<?php
require_once 'class/classSingleton.php';

$db = ConexaoSingleton::getInstance();


$stmtMedico = $db->prepare("SELECT * FROM medico");
$select = $stmtMedico->fetchAll();
$stmtMedico->execute();

$stmtPaciente = $db->prepare("SELECT * FROM paciente");
$select = $stmtPaciente->fetchAll();
$stmtPaciente->execute();

$stmtConsulta = $db->prepare("SELECT * FROM consulta");
$select = $stmtConsulta->fetchAll();
$stmtConsulta->execute();

$stmtExame = $db->prepare("SELECT * FROM exame");
$select = $stmtExame->fetchAll();
$stmtExame->execute();

$stmtDoenca = $db->prepare("SELECT * FROM doenca");
$select = $stmtDoenca->fetchAll();
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
                Novo Prontuario
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
                            <option value="<?=$rowPaciente['id']?>"><?=$rowPaciente['nome']?> </option>
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
                            <option value="<?=$rowMedico['id']?>"><?=$rowMedico['nome']?> </option>
<?php
                            }
?>                            
                        </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtConsulta">Consultas Realizadas</label>
                        <div class="col-md-6">
                        <select class="form-control" id="txtConsulta" name="Consulta_id">
<?php
                            while ($rowConsulta = $stmtConsulta->fetch()) {
?>                
                            <option value="<?=$rowConsulta['id']?>"><?=$rowConsulta['dataConsulta']?> </option>
<?php
                            }
?>                            
                        </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtExame">Exames Realizados</label>
                        <div class="col-md-6">
                        <select class="form-control" id="txtExame" name="Exame_id">
<?php
                            while ($rowExame = $stmtExame->fetch()) {
?>                
                            <option value="<?=$rowExame['id']?>"><?=$rowExame['nome']?></option>
<?php
                            }
?>                            
                        </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtDoenca">Doenças</label>
                        <div class="col-md-6">
                        <select class="form-control" id="txtDoenca" name="Doenca_id">
<?php
                            while ($rowDoenca = $stmtDoenca->fetch()) {
?>                
                            <option value="<?=$rowDoenca['id']?>"><?=$rowDoenca['nome']?> </option>
<?php
                            }
?>                            
                        </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtDataInsercao">Data de Criação</label>
                        <div class="col-md-6">
                        <input type="date" class="form-control" id="txtDataInsercao" name="dataInsercao" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtHistoricoFamiliar">Histórico Familiar</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtHistoricoFamiliar" name="historicoFamiliar" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtObs">Observações</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtObs" name="obs" >
                        </div>
                    </div>
                                                                                
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Salvar">
                <a href="lista_prontuarios.php" class="btn btn-link">Cancelar</a>
            </div>
        </div>
        </form>

    </div>
</body>
</html>