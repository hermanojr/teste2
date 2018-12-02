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

    <div class="container">
        <form method="post" action="login.php">
            <div class="card">
                <div class="card-header">
                    Bem Vindo ao Sistema de Clinica Médica!
                    Favor Informar seu login e senha para acessar o sistema.
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="txtEmail">E-mail</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" id="txtEmail"  name="email" >
                        </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="txtSenha">Senha</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="txtSenha" name="senha" >
                        </div>
                    </div>
                    </div>    
                    </div>
                    <div class="card-footer">
                    <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>
</body>
</html>