<?php

require_once 'class/classSingleton.php';
require_once 'class/classPaciente.php';

$db = ConexaoSingleton::getInstance();

$query = "SELECT paciente.*, convenio.nome as nomeConvenio " .
         "FROM paciente inner join convenio on paciente.Convenio_id = convenio.id";

if (isset($_POST['filtro'])) {
    $filtro = $_POST['filtro'];
    $query = $query . " WHERE paciente.nome like '%" . $filtro . "%'";
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
                Relação dos Pacientes
            </div>
            <div class="card-body">
                <form method="post" action="lista_pacientes.php">
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
                            <a href="lista_pacientes.php" class="btn btn-secondary">Limpar consulta</a>
<?php }?>
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Nascimento</th>
                        <th>Convênio</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
                <tbody>
<?php
    while ($row = $stmt->fetch()) {
?>                
                    <tr>
                        <td><?=$row['id']?></td>
                        <td>
                            <a href="detalhe_paciente.php?id=<?=$row['id']?>"><?=$row['nome']?></a><br>
                            <span class="text-muted"><?=$row['12']?></span>
                        </td>
                        <td><?=date_format(new DateTime ($row['nascimento']), 'd/m/Y')?></td>
                        <td><?=$row['nomeConvenio']?></td>
                        <td><?=$row['fone']?></td>
                    </tr>
<?php
    }
?>
                </tbody>
            </table>
            <div class="card-footer">
                <a href="novo_paciente.php" class="btn btn-primary">Novo paciente</a>
            </div>
        </div>


    </div>
</body>
</html>