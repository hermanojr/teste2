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
    <form method="post" action="salvar_exame.php">
        <div class="card">
            <div class="card-header">
                Novo Exame
            </div>
            <div class="card-body">
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtNome">Nome</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="txtNome" name="nome">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtValor">Valor</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="txtValor" name="valor">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtDescricao">Descrição</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="txtDescricao" name="descricao">
                    </div>
                    </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtDataInsercao">Data da Inserção</label>
                    <div class="col-md-6">
                        <input type="date" class="form-control" id="txtDataInsercao" name="dataInsercao">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtDoencaRelacionada">Doenças Relacionadas</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="txtDoencaRelacionada" name="doencaRelacionada">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtTempoResultado">Tempo para o Resultado</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="txtTempoResultado" name="tempoResultado">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtTempoExame">Tempo do Exame</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="txtTempoExame" name="tempoExame">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtReferencia">Referência</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="txtReferencia"  name="referencia">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtEspecialidade">Especialidade</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="txtEspecialidade" name="especialidade">
                    </div>
                </div>
                                
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Salvar">
                <a href="lista_exames.php" class="btn btn-link">Cancelar</a>
            </div>
        </div>
        </form>

    </div>
</body>
</html>