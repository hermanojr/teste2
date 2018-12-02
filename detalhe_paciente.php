<?php

require_once 'class/classSingleton.php';
require_once 'class/classPaciente.php';

$db = ConexaoSingleton::getInstance();

$stmt = $db->prepare("SELECT paciente.*, convenio.nome as nomeConvenio FROM paciente
                    inner join convenio on paciente.Convenio_id = convenio.id 
                    where paciente.id=".$_GET['id']);

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
                Detalhe paciente
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
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['4']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                            <label class="col-md-2 col-form-label">Endereço</label>
                            <div class="col-md-10">
                            <input type="text" readonly class="form-control-plaintext" value="<?=$row['5']?>">
                            </div>
                        </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Bairro</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['6']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Municipio</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['7']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">UF</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['8']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Fone</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['9']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Celular</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['10']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">E-mail</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['12']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Convênio</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['nomeConvenio']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Número Convênio</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['13']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Peso</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['14']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Altura</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['15']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Prontuários</label>
                        <div class="col-md-10">
                        <table class="table table-hover table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Médico</th>
                            <th scope="col">Data de Criacão</th>
                            </tr>
                        </thead>
                        <tbody>
<?php
$db2 = ConexaoSingleton::getInstance();
$stmt2 = $db2->prepare("SELECT prontuario.*, medico.nome as nomeMedico FROM prontuario inner join medico on prontuario.Medico_id = medico.id where prontuario.Paciente_id=".$_GET['id']);
$stmt2->execute();
    while ($row2 = $stmt2->fetch()) {
?>                
                    <tr>
                        <td><?=$row2['id']?></td>
                        <td>
                            <a href="detalhe_prontuario.php?id=<?=$row2['id']?>"><?=$row2['nomeMedico']?></a><br>                            
                        </td>
                        <td><?=date_format(new DateTime ($row2['dataInsercao']), 'd/m/Y')?></td>                        
                    </tr>
<?php
    }
?>                          
                        </tbody>
                        </table>
                        <div class="card-footer">
                            <a href="novo_prontuario.php" class="btn btn-primary btn-sm">Novo Prontuário</a>
                        </div>
                        </div>
                    </div>




                </form>
            </div>
            <div class="card-footer">
                <a href="alterar_paciente.php?id=<?=$_GET['id']?>" class="btn btn-primary">Editar</a>
                <a href="lista_pacientes.php" class="btn btn-link">Voltar</a>
                <a href="delete_paciente.php?id=<?=$_GET['id']?>" class="btn btn-danger float-right">Excluir</a>
            </div>
        </div>


    </div>
</body>
</html>