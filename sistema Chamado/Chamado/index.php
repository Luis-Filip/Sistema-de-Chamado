<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <title>Tela de Login </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style type="text/css">
        #tamanhoContainer{
            width: 800px;
        }
        #formTitulo{
            margin-top: 0px;
            background-color: #007bff;
            color: #ffffff;
            align-items: center;
            justify-content: center;
            border-radius: 0px;
            font-weight: bold;
            font-family: 'Libre Baskerville', serif;
            height: 100px;
            display: flex;
        }

    </style>

</head>

<body>
    <h1 class="title has-text-grey" id="formTitulo">Login</h1>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                   
                    <?php
                        if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div>
                      <p class="alert alert-danger" role="alert">ERRO: Usuario ou senha invalidos.</p>
                    </div>
                    <?php
                        endif;
                        unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="container" style="margin-top: 50px; width: 600px; border-radius: 15px; border: 2px solid #d3d3d3; padding: 10px; -webkit-box-shadow: 10px 10px 26px -1px rgba(179,179,179,1); -moz-box-shadow: 10px 10px 26px -1px rgba(179,179,179,1); box-shadow: 10px 10px 26px -1px rgba(179,179,179,1);" >
                        <center>
                            <img src="img/login.png" width="160px" height="130px">
                        </center>
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control" style="margin-top: 30px;">
                                    <input type="text" name="login" class="form-control" placeholder="Seu login" autofocus="" autocomplete="off" required="">
                                </div>
                            </div>

                            <div class="field" style="margin-top: 30px;">
                                <div class="control">
                                    <input name="senha" class="form-control" type="password" placeholder="Sua senha" autocomplete="off">
                                </div>
                            </div>
                            <div style="text-align: center; margin-top: 40px;">
                                <button type="submit" class="btn btn-primary">Entrar</button>
                            </div>
                        </form>
                    </div>
                            <div style="text-align: center; margin-top: 100px;">
                                <small>Não tem cadastro? Clique <a href="cadastro_usuario_externo.php">aqui</a></small>
                            </div>
                </div>
            </div>
        </div>
    </section>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>