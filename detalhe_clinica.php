<?php

require_once 'class/classSingleton.php';
require_once 'class/classClinica.php';

$db = ConexaoSingleton::getInstance();

$stmt = $db->prepare("SELECT * FROM clinica  where id=".$_GET['id']);

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
                Detalhes da Clínica
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
                        <label class="col-md-2 col-form-label">CNPJ</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['cnpj']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                            <label class="col-md-2 col-form-label">Endereço</label>
                            <div class="col-md-10">
                            <input type="text" readonly class="form-control-plaintext" value="<?=$row['endereco']?>">
                            </div>
                        </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Bairro</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['bairro']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Municipio</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['municipio']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">UF</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['uf']?>">
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
                        <label class="col-md-2 col-form-label">Data de Criação</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=date_format(new DateTime ($row['dataCriacao']), 'd/m/Y')?>">
                        </div>
                    </div>

                </form>
            </div>
            <div class="card-footer">
                <a href="alterar_clinica.php?id=<?=$_GET['id']?>" class="btn btn-primary">Editar</a>
                <a href="lista_clinicas.php" class="btn btn-link">Voltar</a>
                <a href="delete_clinica.php?id=<?=$_GET['id']?>" class="btn btn-danger float-right">Excluir</a>
            </div>
        </div>


    </div>
</body>
</html>