<?php

require_once 'class/classSingleton.php';
require_once 'class/classProntuario.php';

$db = ConexaoSingleton::getInstance();

$stmt = $db->prepare("SELECT
P.nome as nomePaciente, 
M.nome as nomeMedico,
PR.dataInsercao as dataInsercao,
PR.obs as obs,
PR.avaliacao as avaliacao,
PR.historicoFamiliar as historicoFamiliar
From 
paciente P 
inner join prontuario PR on P.id = PR.Paciente_id
inner join medico M on PR.Medico_id = M.id
where 
P.id=".$_GET['id']);

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
                Detalhes do Prontuário
            </div>
            <div class="card-body">
                
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Paciente</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['nomePaciente']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row board">
                        <label class="col-md-2 col-form-label">Médico </label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['nomeMedico']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Exames</label>
                        <div class="col-md-10">
                        <table class="table table-hover table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Exame</th>
                            <th scope="col">Resultado</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
<?php
$db2 = ConexaoSingleton::getInstance();
$stmt2 = $db2->prepare("SELECT
                        E.id as idE,
                        P.id as idP,
                        E.nome as nomeExame,
                        PHE.resultado as resultado
                        FROM
                        prontuario P
                        inner join prontuario_has_exame PHE on P.id = PHE.Prontuario_id
                        inner join exame E on PHE.Exame_id = E.id
                        where P.Paciente_id=".$_GET['id']);
$stmt2->execute();
    while ($row2 = $stmt2->fetch()) {
?>                
                    <tr>
                        <td><?=$row2['idE']?></td>
                        <td><?=$row2['nomeExame']?><br></td>
                        <td><?=$row2['resultado']?></td>
                        <td><a href="delete_prontuario_has_exame.php?id=<?=$_GET['idE']?>&<?=$_GET['idP']?>" class="btn btn-danger btn-sm float-right">Excluir</a></td>                        
                    </tr>
<?php
    }
?>                          
                        </tbody>
                        </table>
                        <form method="post" action="salvar_exame_prontuario.php.php">
                            <input type="hidden" name="idPr" value="<?=$_GET['id']?>">
                            <div class="row">
                                <div class="col-md-2">Nova doença</div>
                                <div class="col-md-3">
                                    <select id="txtDoenca" name="idD" class="form-control">
<?php
$dbE = ConexaoSingleton::getInstance();
$stmtE = $dbE->prepare("SELECT E.nome as nomeExame, E.id as idE FROM exame E");
$stmtE->execute();
    while ($rowE = $stmtE->fetch()) {
?>                
                                        <option value="<?=$rowE['idE']?>"><?=$rowE['nomeExame']?></option>
<?php
                            }
?>                            
                                    </select>
                                </div>
                                <div class="col-md-3">
                                <input type="text" class="form-control" id="txtResultado" name="resultado" placeholder="Resultado" >
                                </div>
                                <div class="col-md-4">
                                    <input type="submit" class="btn" value="Adicionar">
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Doenças</label>
                        <div class="col-md-10">
                        <table class="table table-hover table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Doença</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
<?php
$db2 = ConexaoSingleton::getInstance();
$stmt2 = $db2->prepare("SELECT
D.id as idD,
Pr.id as idPr,
D.nome as nomeDoenca
FROM
prontuario Pr
inner join prontuario_has_doenca PHD on Pr.id = PHD.Prontuario_id
inner join doenca D on PHD.Doenca_id = D.id
where Pr.Paciente_id=".$_GET['id']);
$stmt2->execute();
    while ($row2 = $stmt2->fetch()) {
?>                
                    <tr>
                        <td><?=$row2['idD']?></td>
                        <td><?=$row2['nomeDoenca']?></td>
                        <td><a href="delete_prontuario_has_doenca.php?id=<?=$_GET['idD']?>&<?=$_GET['idPr']?>" class="btn btn-danger btn-sm float-right">Excluir</a></td>                        
                    </tr>
<?php
    }
?>                          
                        </tbody>
                        </table>

                        <form method="post" action="salvar_doenca_prontuario.php">
                            <input type="hidden" name="idPr" value="<?=$_GET['id']?>">
                            <div class="row">
                                <div class="col-md-2">Nova doença</div>
                                <div class="col-md-5">
                                    <select id="txtDoenca" name="idD" class="form-control">
<?php
$dbD = ConexaoSingleton::getInstance();
$stmtD = $dbD->prepare("SELECT D.nome as nomeDoenca, D.id as idD FROM doenca D");
$stmtD->execute();
    while ($rowD = $stmtD->fetch()) {
?>                
                                        <option value="<?=$rowD['idD']?>"><?=$rowD['nomeDoenca']?></option>
<?php
                            }
?>                            
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <input type="submit" class="btn" value="Adicionar">
                                </div>
                            </div>
                        </form>



                       </div>     
                    </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Data de Criação</label>
                        <div class="col-md-10">
                        <input type="date" readonly class="form-control-plaintext" value="<?=$row['dataInsercao']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Histórico Familiar</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['historicoFamiliar']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Observações</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['obs']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Avaliação</label>
                        <div class="col-md-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?=$row['avaliacao']?>">
                        </div>
                    </div>
                                    
                
            </div>
            <div class="card-footer">
                <a href="alterar_prontuario.php?id=<?=$_GET['id']?>" class="btn btn-primary">Editar</a>
                <a href="detalhe_paciente.php?id=<?=$_GET['id']?>"> Voltar</a>
                <a href="delete_prontuario.php?id=<?=$_GET['id']?>" class="btn btn-danger float-right">Excluir</a>
            </div>
        </div>


    </div>
</body>
</html>