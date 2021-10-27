<?php
    session_start();
    require_once './config.php';
    
?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Lista de usuários</title>
    <link href="<?php echo BASEURL?>css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BASEURL?>bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo BASEURL?>bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <style>
        body{
            background-image: url("<?php echo BASEURL?>img/wallpaper.jpg");
        }
    </style>
</head>

<body>
    <div class="row-">
        <div class="containers col-lg-4 col-md-5 col-sm-6" style="background-color:unset; margin-top: 50px;">
            <a href="index.php"><img src="<?php echo BASEURL?>img/logo.png" alt="" width="100%"></a>
        </div>
        <div class="containers col-lg-4 col-md-5 col-sm-6" style="margin-top: 50px; background-color:rgba(221, 221, 221, 0.8)">
            <h1 class="text-center">Login</h1>
            <form action="valida.php" method="post">
                <div class="mb-3 mt-3">
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="usuario" placeholder="Coloque seu email" name="email">
                    <!-- <div id="emailhelp" class="form-text">E-mail ou senha inválida</div> -->
                </div>
                <div class="mb-3">
                    <label class="form-label">Senha:</label>
                    <input type="password" class="form-control" name="senha" placeholder="Coloque sua senha" name="pswd">
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Lembrar usuário
                    </label>
                </div>
                <button type="submit" class="btn btn-danger">Enviar</button>
                <a href="<?php echo BASEURL?>index.php" class="btn" >Cancelar</a>
            </form>
            <?php
                if (isset($_SESSION['loginErro'])){
                    echo $_SESSION['loginErro'];
                    unset($_SESSION['loginErro']);
                }
                
            ?>
        </div>
    </div>

</body>

</html>