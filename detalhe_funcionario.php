<?php

require_once 'class/classSingleton.php';
require_once 'class/classFuncionario.php';

$db = ConexaoSingleton::getInstance();

$stmt = $db->prepare("SELECT * FROM funcionario  where id=".$_GET['id']);

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
                Detalhe funcionario
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
                        <label class="col-md-2 col-form-label">Data de nascimento</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=date_format(new DateTime ($row['nascimento']), 'd/m/Y')?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">CPF</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['cpf']?>">
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
                        <label class="col-md-2 col-form-label">Celular</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['celular']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">E-mail</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['email']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Senha</label>
                        <div class="col-md-10">
                        <input type="password" readonly class="form-control-plaintext" value="<?=$row['senha']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Cargo</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['cargo']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Salário</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['salario']?>">
                        </div>
                    </div>

                </form>
            </div>
            <div class="card-footer">
                <a href="alterar_funcionario.php?id=<?=$_GET['id']?>" class="btn btn-primary">Editar</a>
                <a href="lista_funcionarios.php" class="btn btn-link">Voltar</a>
                <a href="delete_funcionario.php?id=<?=$_GET['id']?>" class="btn btn-danger float-right">Excluir</a>
            </div>
        </div>


    </div>
</body>
</html>