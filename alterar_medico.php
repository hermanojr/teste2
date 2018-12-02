<?php
require_once 'class/classSingleton.php';
require_once 'class/classMedico.php';

$db = ConexaoSingleton::getInstance();

$stmt = $db->prepare("SELECT * FROM medico where id=".$_GET['id']);
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
    <form method="post" action="salvar_medico.php">
        <div class="card">
            <div class="card-header">
            Alterar Médico
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
                        <label class="col-md-2 col-md-label" for="txtNascimento">Data de nascimento</label>
                        <div class="col-md-4">
                        <input type="date" class="form-control" id="txtNascimento" name="nascimento" value="<?=$row['nascimento']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtCpf">CPF</label>
                        <div class="col-md-4">
                        <input type="text" class="form-control" id="txtCpf" name="cpf" value="<?=$row['cpf']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtEndereco">Endereço</label>
                        <div class="col-md-10">
                        <input type="text" class="form-control" id="txtEndereco" name="endereco" value="<?=$row['endereco']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtBairro">Bairro</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtBairro" name="bairro" value="<?=$row['bairro']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtMunicipio">Municipio</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtMunicipio" name="municipio" value="<?=$row['municipio']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtUf">UF</label>
                        <div class="col-md-6">
                        <select class=form-control name="uf"  value="<?=$row['uf']?>">
                            <option <?php if($row['uf'] == 'Acre') { ?>selected<?php } ?> >Acre</option>
                            <option <?php if($row['uf'] == 'Alagoas') { ?>selected<?php } ?> >Alagoas</option>
                            <option <?php if($row['uf'] == 'Amazonas') { ?>selected<?php } ?> >Amazonas</option>
                            <option <?php if($row['uf'] == 'Amapá') { ?>selected<?php } ?> >Amapá</option>
                            <option <?php if($row['uf'] == 'Bahia') { ?>selected<?php } ?> >Bahia</option>
                            <option <?php if($row['uf'] == 'Ceará') { ?>selected<?php } ?> >Ceará</option>
                            <option <?php if($row['uf'] == 'Distrito Federal') { ?>selected<?php } ?> >Distrito Federal</option>
                            <option <?php if($row['uf'] == 'Espírito Santo') { ?>selected<?php } ?> >Espírito Santo</option>
                            <option <?php if($row['uf'] == 'Goiás') { ?>selected<?php } ?> >Goiás</option>
                            <option <?php if($row['uf'] == 'Maranhão') { ?>selected<?php } ?> >Maranhão</option>
                            <option <?php if($row['uf'] == 'Mato Grosso') { ?>selected<?php } ?> >Mato Grosso</option>
                            <option <?php if($row['uf'] == 'Mato Grosso do Sul') { ?>selected<?php } ?> >Mato Grosso do Sul</option>
                            <option <?php if($row['uf'] == 'Minas Gerais') { ?>selected<?php } ?> >Minas gerais</option>
                            <option <?php if($row['uf'] == 'Pará') { ?>selected<?php } ?> >Pará</option>
                            <option <?php if($row['uf'] == 'Paraíba') { ?>selected<?php } ?> >Paraíba</option>
                            <option <?php if($row['uf'] == 'Pernambuco') { ?>selected<?php } ?> >Pernambuco</option>
                            <option <?php if($row['uf'] == 'Piauí') { ?>selected<?php } ?> >Piauí</option>
                            <option <?php if($row['uf'] == 'Paraná') { ?>selected<?php } ?> >Paraná</option>
                            <option <?php if($row['uf'] == 'Rio de Janeiro') { ?>selected<?php } ?> >Rio de Janeiro</option>
                            <option <?php if($row['uf'] == 'Rio Grande do Norte') { ?>selected<?php } ?> >Rio Grande do Norte</option>
                            <option <?php if($row['uf'] == 'Rio Grande do Sul') { ?>selected<?php } ?> >Rio Grande do Sul</option>
                            <option <?php if($row['uf'] == 'Rondônia') { ?>selected<?php } ?> >Rondônia</option>
                            <option <?php if($row['uf'] == 'Roraima') { ?>selected<?php } ?> >Roraima</option>
                            <option <?php if($row['uf'] == 'Santa Catarina') { ?>selected<?php } ?> >Santa Catarina</option>
                            <option <?php if($row['uf'] == 'São Paulo') { ?>selected<?php } ?> >São Paulo</option>
                            <option <?php if($row['uf'] == 'Segipe') { ?>selected<?php } ?> >Sergipe</option>
                            <option <?php if($row['uf'] == 'Tocantins') { ?>selected<?php } ?> >Tocantins</option>
                        </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtCep">CEP</label>
                        <div class="col-md-4">
                        <input type="text" class="form-control" id="txtCep" name="cep" value="<?=$row['cep']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtFone">Fone</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtFone" name="fone" value="<?=$row['fone']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtCelular">Celular</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="txtCelular" name="celular" value="<?=$row['celular']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtEmail">E-mail</label>
                        <div class="col-md-10">
                        <input type="email" class="form-control" id="txtEmail"  name="email" value="<?=$row['email']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtSenha">Senha</label>
                        <div class="col-md-6">
                        <input type="password" class="form-control" id="txtSenha" name="senha" value="<?=$row['senha']?>">
                            </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtCargo">Cargo</label>
                        <div class="col-md-4">
                        <input type="text" class="form-control" id="txtCargo" name="cargo" value="<?=$row['cargo']?>">
                            </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtSalario">Salário</label>
                        <div class="col-md-4">
                        <input type="text" class="form-control" id="txtSalario" name="salario" value="<?=$row['salario']?>">
                            </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-md-label" for="txtEspecialidade">Especialidade</label>
                        <div class="col-md-4">
                        <input type="text" class="form-control" id="txtEspecialidade" name="especialidade" value="<?=$row['especialidade']?>">
                        </div>
                    </div>
                
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Salvar">
                <a href="lista_medicos.php" class="btn btn-link">Cancelar</a>
            </div>
        </div>
        </form>

    </div>
</body>
</html>