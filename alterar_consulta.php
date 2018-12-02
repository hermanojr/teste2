<?php
require_once 'class/classSingleton.php';
require_once 'class/classConsulta.php';

$db = ConexaoSingleton::getInstance();

$stmt = $db->prepare("SELECT * FROM consulta where id=".$_GET['id']);
$stmt->execute();
$row = $stmt->fetch();


$stmtMedico = $db->prepare("SELECT * FROM medico");
$stmtMedico->execute();

$stmtPaciente = $db->prepare("SELECT * FROM paciente");
$stmtPaciente->execute();
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
    <form method="post" action="salvar_consulta.php">
        <div class="card">
            <div class="card-header">
            Alterar Consulta
            </div>
            <div class="card-body">

                    <input type="hidden" name="id" value="<?=$row['id']?>">
                
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtMedico">Médico</label>
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
                        <label class="col-md-2 col-md-label" for="txtPaciente">Convênio</label>
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
                        <label class="col-md-2 col-md-label" for="txtTipo">Tipo da Consulta</label>
                        <div class="col-md-6">
                        <select class=form-control name="tipo"  value="<?=$row['tipo']?>">
                            <option <?php if($row['tipo'] == 'Particular') { ?>selected<?php } ?> >Particular</option>
                            <option <?php if($row['tipo'] == 'Convênio') { ?>selected<?php } ?> >Convênio</option>                            
                        </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtDataConsulta">Data da Consulta</label>
                        <div class="col-md-6">
                        <input type="date" class="form-control" id="txtDataConsulta" name="dataConsulta" value="<?=$row['dataConsulta']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtHoraInicio">Horário</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtHoraInicio" name="horaInicio" value="<?=$row['horaInicio']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtValor">Valor da Consulta</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtValor" name="valor" value="<?=$row['valor']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtSintoma">Sintoma</label>
                        <div class="col-md-4">
                        <input type="text" class="form-control" id="txtSintoma" name="sintoma" value="<?=$row['sintoma']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtHoraTermino">Hora do Termino da Consulta</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtHoraTermino" name="horaTermino" value="<?=$row['horaTermino']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtObs">Observações</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtObs" name="observacao" value="<?=$row['observacao']?>">
                        </div>
                    </div>
                                        
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Salvar">
                <a href="lista_consultas.php" class="btn btn-link">Cancelar</a>
            </div>
        </div>
        </form>

    </div>
</body>
</html>