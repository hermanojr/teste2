<?php
require_once 'class/classSingleton.php';

$db = ConexaoSingleton::getInstance();

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
                Nova Doença
            </div>
            <div class="card-body">
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtNome">Nome</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="txtNome" name="nome">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtCid">CID nº </label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="txtCid" name="cid">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtGrauRisco">Grau do Risco</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="txtGrauRisco" name="grauRisco">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtAreaMedica">Área Médica</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="txtAreaMedica" name="areaMedica">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtDataInsercao">Data de Inserção</label>
                    <div class="col-md-6">
                        <input type="date" class="form-control" id="txtDataInsercao" name="dataInsercao">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtDescricao">Descrição</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="txtDescricao"  name="descricao">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtTratamento">Tratamento</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="txtTratamento" name="tratamento">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtCausa">Causa</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="txtCausa" name="causa">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtTempoTratamento">Tempo de Tratamento</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="txtTempoTratamento" name="tempoTratamento">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtMedicamento">Medicamentos</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="txtMedicamento" name="medicamento">
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