<?php
require_once 'class/classSingleton.php';

$db = ConexaoSingleton::getInstance();


$stmt = $db->prepare("SELECT * FROM medico");
$select = $stmt->fetchAll();
$stmt->execute();

$stmtp = $db->prepare("SELECT * FROM paciente");
$selectp = $stmtp->fetchAll();
$stmtp->execute();
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
                Nova Consulta
            </div>
            <div class="card-body">
                
            <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtMedico">Médico</label>
                    <div class="col-md-6">
                        <select class="form-control" id="txtMedico" name="Medico_id">
<?php
                            while ($row = $stmt->fetch()) {
?>                
                            <option value="<?=$row['id']?>"><?=$row['nome']?></option>
<?php
                            }
?>                            
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtPaciente">Paciente</label>
                    <div class="col-md-6">
                        <select class="form-control" id="txtPaciente" name="Paciente_id">
<?php
                            while ($rowp = $stmtp->fetch()) {
?>                
                            <option value="<?=$rowp['id']?>"><?=$rowp['nome']?></option>
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
                            <option>Convênio</option>
                            <option>Particular</option>                            
                        </select>
                        </div>
                </div>
                
                <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtDataConsulta">Data da Consulta</label>
                        <div class="col-md-6">
                        <input type="date" class="form-control" id="txtDataConsulta" name="dataConsulta" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtHoraInicio">Horário</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtHoraInicio" name="horaInicio" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtValor">Valor da Consulta</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtValor" name="valor" >
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtSintoma">Sintoma</label>
                        <div class="col-md-4">
                        <input type="text" class="form-control" id="txtSintoma" name="sintoma" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtHoraTermino">Hora do Termino da Consulta</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtHoraTermino" name="horaTermino" >
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtObs">Observações</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtObs" name="observacao" >
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