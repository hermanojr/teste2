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
    <form method="post" action="salvar_convenio.php">
        <div class="card">
            <div class="card-header">
                Nova Clínica
            </div>
            <div class="card-body">
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtNome">Nome</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="txtNome" name="nome">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtContrato">Contrato nº</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="txtContrato" name="contrato">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtInicio">Início</label>
                    <div class="col-md-10">
                        <input type="date" class="form-control" id="txtInicio" name="inicio">
                    </div>
                    </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtValidade">Validade</label>
                    <div class="col-md-6">
                        <input type="date" class="form-control" id="txtValidade" name="validade">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtContato">Contato</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="txtContato" name="contato">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtFone">Fone</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="txtFone" name="fone">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtEmail">E-mail</label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" id="txtEmail"  name="email">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtAvaliacao">Avaliação</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="txtAvaliacao" name="avaliacao">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtObs">Observações</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="txtObs" name="obs">
                    </div>
                </div>
                                
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Salvar">
                <a href="lista_convenios.php" class="btn btn-link">Cancelar</a>
            </div>
        </div>
        </form>

    </div>
</body>
</html>