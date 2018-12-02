<?php
require_once 'class/classSingleton.php';
require_once 'class/classExame.php';

$db = ConexaoSingleton::getInstance();

$stmt = $db->prepare("SELECT * FROM exame where id=".$_GET['id']);
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
    <form method="post" action="salvar_exame.php">
        <div class="card">
            <div class="card-header">
            Alterar Exame
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
                        <label class="col-md-2 col-md-label" for="txtValor">Valor</label>
                        <div class="col-md-4">
                        <input type="text" class="form-control" id="txtValor" name="valor" value="<?=$row['valor']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtDescricao">Descrição</label>
                        <div class="col-md-10">
                        <input type="text" class="form-control" id="txtDescricao" name="descricao" value="<?=$row['descricao']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtDataInsercao">Data de Cadastro</label>
                        <div class="col-md-6">
                        <input type="date" class="form-control" id="txtDataInsercao" name="dataInsercao" value="<?=$row['dataInsercao']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtDoencaRelacionada">Doenças Relacionadas</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtDoencaRelacionada" name="doencaRelacionada" value="<?=$row['doencaRelacionada']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtTempoResultado">Tempo do Resultaldo</label>
                        <div class="col-md-4">
                        <input type="text" class="form-control" id="txtTempoResultado" name="tempoResultado" value="<?=$row['tempoResultado']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtTempoExame">Tempo do Exame</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtTempoExame" name="tempoExame" value="<?=$row['tempoExame']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtReferencia">Referência</label>
                        <div class="col-md-10">
                        <input type="text" class="form-control" id="txtReferencia"  name="referencia" value="<?=$row['referencia']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtEspecialidade">Especialidade</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtEspecialidade" name="especialidade" value="<?=$row['especialidade']?>">
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