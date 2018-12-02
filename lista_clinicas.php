<?php

require_once 'class/classSingleton.php';
require_once 'class/classClinica.php';

$db = ConexaoSingleton::getInstance();

$query = "SELECT * FROM clinica";

if (isset($_POST['filtro'])) {
    $filtro = $_POST['filtro'];
    $query = $query . " WHERE nome like '%" . $filtro . "%'";
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
                Relação das Clinicas
            </div>
            <div class="card-body">
                <form method="post" action="lista_clinicas.php">
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
                            <a href="lista_clinicas.php" class="btn btn-secondary">Limpar consulta</a>
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
                        <th>Data de Criação</th>
                        <th>CNPJ</th>
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
                            <a href="detalhe_clinica.php?id=<?=$row['id']?>"><?=$row['nome']?></a><br>
                            <span class="text-muted"><?=$row['email']?></span>
                        </td>
                        <td><?=date_format(new DateTime ($row['dataCriacao']), 'd/m/Y')?></td>
                        <td><?=$row['cnpj']?></td>
                        <td><?=$row['fone']?></td>
                    </tr>
<?php
    }
?>
                </tbody>
            </table>
            <div class="card-footer">
                <a href="novo_clinica.php" class="btn btn-primary">Nova Clínica</a>
            </div>
        </div>


    </div>
</body>
</html>