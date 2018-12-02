<?php

require_once 'class/classSingleton.php';
require_once 'class/classProntuario.php';

$db = ConexaoSingleton::getInstance();

$query = ("SELECT prontuario.*, paciente.nome as nomePaciente, medico.nome as nomeMedico, consulta.dataConsulta as dataConsulta, exame.nome as nomeExame, doenca.nome as nomeDoenca FROM consulta
                      inner join paciente on prontuario.Paciente_id = paciente.id
                      inner join medico on prontuario.Medico_id = medico.id 
                      inner join consulta on prontuario.Consulta_id = consulta.id 
                      inner join exame on prontuario.Exame_id = exame.id 
                      inner join doenca on prontuario.Doenca_id = doenca.id ");

if (isset($_POST['filtro'])) {
    $filtro = $_POST['filtro'];
    $query = $query . " WHERE paciente.nome  like '%" . $filtro . "%'";
} else {
    $filtro = null;
}


$stmt = $db->prepare($query);
$stmt->execute();


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
                Relação dos Prontários
            </div>
            <div class="card-body">
                <form method="post" action="lista_prontuarios.php">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Filtro</label>
                        <div class="col-md-3 col-sm-9">
                            <input type="text" name="filtro" class="form-control" value="<?=$filtro?>">
                        </div>
                        <div class="col-md-1 col-sm-3">
                            <input type="submit" class="btn btn-primary" value="Filtrar">
                        </div>
                        <div class="col-md-1 col-sm-3">
<?php if ($filtro) { ?>
                            <a href="lista_prontuarios.php" class="btn btn-secondary">Limpar consulta</a>
<?php }?>
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Paciente</th>
                        <th>Médico Principal</th>
                        <th>Data do Cadastro</th>
                    </tr>
                </thead>
                <tbody>
<?php
    while ($row = $stmt->fetch()) {
?>                
                    <tr>
                        <td><?=$row['id']?></td>
                        <td>
                            <a href="detalhe_prontuario.php?id=<?=$row['id']?>"><?=$row['nomePaciente']?></a><br>
                        </td>
                        <td><?=$row['nomeMedico']?></td>
                        <td ><?=date_format(new DateTime ($row['dataInsercao']), 'd/m/Y')?></td>
                    </tr>
<?php
    }
?>
                </tbody>
            </table>
            <div class="card-footer">
                <a href="novo_prontuario.php" class="btn btn-primary">Novo Prontuario</a>
            </div>
        </div>


    </div>
</body>
</html>