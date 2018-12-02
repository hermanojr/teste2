<?php

require_once 'class/classSingleton.php';
require_once 'class/classConvenio.php';

$db = ConexaoSingleton::getInstance();

$stmt = $db->prepare("SELECT * FROM convenio  where id=".$_GET['id']);

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
                Detalhes do Convênio
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
                        <label class="col-md-2 col-form-label">Contrato nº</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['contrato']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                            <label class="col-md-2 col-form-label">Início</label>
                            <div class="col-md-10">
                            <input type="date" readonly class="form-control-plaintext" value="<?=$row['inicio']?>">
                            </div>
                        </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Validade</label>
                        <div class="col-md-10">
                        <input type="date" readonly class="form-control-plaintext" value="<?=date_format(new DateTime ($row['validade']), 'd/m/Y')?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Contato</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['contato']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Fone</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['fone']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">E-mail</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['email']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Avaliação</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['avaliacao']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Observações</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['obs']?>">
                        </div>
                    </div>
                                        
                </form>
            </div>
            <div class="card-footer">
                <a href="alterar_convenio.php?id=<?=$_GET['id']?>" class="btn btn-primary">Editar</a>
                <a href="lista_convenios.php" class="btn btn-link">Voltar</a>
                <a href="delete_convenio.php?id=<?=$_GET['id']?>" class="btn btn-danger float-right">Excluir</a>
            </div>
        </div>


    </div>
</body>
</html>