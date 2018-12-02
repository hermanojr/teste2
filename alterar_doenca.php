<?php
require_once 'class/classSingleton.php';
require_once 'class/classDoenca.php';

$db = ConexaoSingleton::getInstance();

$stmt = $db->prepare("SELECT * FROM doenca where id=".$_GET['id']);
$stmt->execute();
$row = $stmt->fetch();

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
    <form method="post" action="salvar_doenca.php">
        <div class="card">
            <div class="card-header">
            Alterar Doença
            </div>
            <div class="card-body">

                    <input type="hidden" name="id" value="<?=$row['id']?>">
                
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtNome">Nome</label>
                        <div class="col-md-10">
                        <input type="text" class="form-control" id="txtNome" name="nome" value="<?=$row['nome']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtCid">CID nº</label>
                        <div class="col-md-4">
                        <input type="text" class="form-control" id="txtCid" name="cid" value="<?=$row['cid']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtGrauRisco">Grau de Risco da Doença</label>
                        <div class="col-md-10">
                        <input type="text" class="form-control" id="txtGrauRisco" name="grauRisco" value="<?=$row['grauRisco']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtAreaMedica">Aréa Médica</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtAreaMedica" name="areaMedica" value="<?=$row['areaMedica']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtDataInsercao">Data de Inserção</label>
                        <div class="col-md-6">
                        <input type="date" class="form-control" id="txtDataInsercao" name="dataInsercao" value="<?=$row['dataInsercao']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtdescricao">Descrição</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtDescricao" name="descricao" value="<?=$row['descricao']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtTratamento">Tratamento</label>
                        <div class="col-md-10">
                        <input type="text" class="form-control" id="txtTratamento"  name="tratamento" value="<?=$row['tratamento']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtCausa">Causa</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtCausa" name="causa" value="<?=$row['causa']?>">
                            </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtTempoTratamento">Tempo de Tratamento</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtTempoTratamento" name="tempoTratamento" value="<?=$row['tempoTratamento']?>">
                            </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtMedicamento">Medicamentos</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtMedicamento" name="medicamento" value="<?=$row['medicamento']?>">
                            </div>
                    </div>
                                                        
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Salvar">
                <a href="lista_doencas.php" class="btn btn-link">Cancelar</a>
            </div>
        </div>
        </form>

    </div>
</body>
</html>