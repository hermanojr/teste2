<?php
require_once 'class/classSingleton.php';

$db = ConexaoSingleton::getInstance();


$stmt = $db->prepare("SELECT * FROM convenio");
$select = $stmt->fetchAll();
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
    <form method="post" action="salvar_paciente.php">
        <div class="card">
            <div class="card-header">
                Novo Paciente
            </div>
            <div class="card-body">
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtNome">Nome</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="txtNome" name="nome">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtNascimento">Data de nascimento</label>
                    <div class="col-md-4">
                        <input type="date" class="form-control" id="txtNascimento" name="nascimento">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtCpf">CPF</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="txtCpf" name="cpf">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtEndereco">Endereço</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="txtEndereco" name="endereco">
                    </div>
                    </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtBairro">Bairro</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="txtBairro" name="bairro">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtMunicipio">Municipio</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="txtMunicipio" name="municipio">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtUf">UF</label>
                    <div class="col-md-6">
                        <select class=form-control name="uf">
                            <option >Acre</option>
                            <option >Alagoas</option>
                            <option >Amazonas</option>
                            <option >Amapá</option>
                            <option >Bahia</option>
                            <option >Ceará</option>
                            <option >Distrito Federal</option>
                            <option >Espírito Santo</option>
                            <option >Goiás</option>
                            <option >Maranhão</option>
                            <option >Mato Grosso</option>
                            <option >Mato Grosso do Sul</option>
                            <option >Minas gerais</option>
                            <option >Pará</option>
                            <option >Paraíba</option>
                            <option selected>Pernambuco</option>
                            <option >Piauí</option>
                            <option >Paraná</option>
                            <option >Rio de Janeiro</option>
                            <option >Rio Grande do Norte</option>
                            <option >Rio Grande do Sul</option>
                            <option >Rondônia</option>
                            <option >Roraima</option>
                            <option >Santa Catarina</option>
                            <option >São Paulo</option>
                            <option >Sergipe</option>
                            <option >Tocantins</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtCep">CEP</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="txtCep" name="cep">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtFone">Fone</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="txtFone" name="fone">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtCelular">Celular</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="txtCelular" name="celular">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtEmail">E-mail</label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" id="txtEmail"  name="email">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtConvenio">Convênio</label>
                    <div class="col-md-6">
                        <select class="form-control" id="txtConvenio" name="Convenio_id">
<?php
                            while ($row = $stmt->fetch()) {
?>                
                            <option value="<?=$row['id']?>"><?=$row['nome']?></option>
<?php
                            }
?>                            
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtNumeroConvenio">Número Convênio</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="txtNumeroConvenio" name="numeroConvenio">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtPeso">Peso</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="txtPeso" name="peso">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtAltura">Altura</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="txtAltura" name="altura">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Salvar">
                <a href="lista_pacientes.php" class="btn btn-link">Cancelar</a>
            </div>
        </div>
        </form>

    </div>
</body>
</html>