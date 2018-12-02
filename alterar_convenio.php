<?php
require_once 'class/classSingleton.php';
require_once 'class/classConvenio.php';

$db = ConexaoSingleton::getInstance();

$stmt = $db->prepare("SELECT * FROM convenio where id=".$_GET['id']);
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
    <form method="post" action="salvar_convenio.php">
        <div class="card">
            <div class="card-header">
                Alterar Convênio
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
                        <label class="col-md-2 col-md-label" for="txtContrato">Contrato nº</label>
                        <div class="col-md-4">
                        <input type="text" class="form-control" id="txtContrato" name="contrato" value="<?=$row['contrato']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtInicio">Início</label>
                        <div class="col-md-10">
                        <input type="date" class="form-control" id="txtInicio" name="inicio" value="<?=$row['inicio']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtValidade">Validade</label>
                        <div class="col-md-6">
                        <input type="date" class="form-control" id="txtValidade" name="validade" value="<?=$row['validade']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtContato">Contato</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtContato" name="contato" value="<?=$row['contato']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtFone">Fone</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtFone" name="fone" value="<?=$row['fone']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtEmail">E-mail</label>
                        <div class="col-md-10">
                        <input type="email" class="form-control" id="txtEmail"  name="email" value="<?=$row['email']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtAvaliacao">Nota de Avaliação</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtAvaliacao" name="avaliacao" value="<?=$row['avaliacao']?>">
                            </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtObs">Observações</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtObs" name="obs" value="<?=$row['obs']?>">
                            </div>
                    </div>
                                                        
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Salvar">
                <a href="lista_clinicas.php" class="btn btn-link">Cancelar</a>
            </div>
        </div>
        </form>

    </div>
</body>
</html>