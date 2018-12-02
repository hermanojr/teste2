<?php

require_once 'class/classSingleton.php';
require_once 'class/classExame.php';

$db = ConexaoSingleton::getInstance();

$stmt = $db->prepare("SELECT * FROM exame  where id=".$_GET['id']);

$stmt->execute();

$select = $stmt->fetchAll();
$count = count($select);
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

        <div class="card">
            <div class="card-header">
                Detalhes do Exame
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group row board">
                        <label class="col-md-2 col-form-label">Nome</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['nome']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Valor</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['valor']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                            <label class="col-md-2 col-form-label">Descrição</label>
                            <div class="col-md-10">
                            <input type="text" readonly class="form-control-plaintext" value="<?=$row['descricao']?>">
                            </div>
                        </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Data da Inserção</label>
                        <div class="col-md-10">
                        <input type="date" readonly class="form-control-plaintext" value="<?=$row['dataInsercao']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Doenças Relacionadas</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['doencaRelacionada']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Tempo para o resultado</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['tempoResultado']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Tempo do Exame</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['tempoExame']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Referência</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['referencia']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Especialidade</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['especialidade']?>">
                        </div>
                    </div>
                                        
                </form>
            </div>
            <div class="card-footer">
                <a href="alterar_exame.php?id=<?=$_GET['id']?>" class="btn btn-primary">Editar</a>
                <a href="lista_exames.php" class="btn btn-link">Voltar</a>
                <a href="delete_exame.php?id=<?=$_GET['id']?>" class="btn btn-danger float-right">Excluir</a>
            </div>
        </div>


    </div>
</body>
</html>