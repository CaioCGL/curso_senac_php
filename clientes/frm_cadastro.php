<?php
    require_once './functions.php'; 
    add();
?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link href="<?php echo BASEURL?>css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BASEURL?>bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo BASEURL?>bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <style>
        body {
            background-image: url("<?php echo BASEURL?>img/wallpaper.jpg");
        }

        span {
            color: red;
        }
    </style>

</head>

<body>
    <?php

        /* Tratamento dos dados enviados pelo formulário*/
        /* Esta validação por front-end não é suficiente
    ---> Tal validação também deve ser executada no back-end */

        /* $nome = $sobrenome = $email = $telefone = $cidade = $mensagem = "";
        $nomeErr = $sobrenomeErr = $emailErr = $telefoneErr = $cidadeErr = $mensagemErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (empty($_POST["nome"])) {
                $nomeErr = "Este campo não pode estar vazio.";
            } else {
                $nomeErr = "";
                $nome = test_input($_POST["nome"]);
            }

            if (empty($_POST["sobrenome"])) {
                $sobrenomeErr = "Este campo não pode estar vazio.";
            } else {
                $sobrenomeErr = "";
                $sobrenome = test_input($_POST["sobrenome"]);
            }

            if (empty($_POST["email"])) {
                $emailErr = "Este campo não pode estar vazio.";
            } else {
                $emailErr = "";
                $email = test_input($_POST["email"]);
            }

            if (empty($_POST["telefone"])) {
                $telefoneErr = "Este campo não pode estar vazio.";
            } else {
                $telefoneErr = "";
                $telefone = test_input($_POST["telefone"]);
            }

            if (empty($_POST["cidade"])) {
                $cidadeErr = "Este campo não pode estar vazio.";
            } else {
                $cidadeErr = "";
                $cidade = test_input($_POST["cidade"]);
            }

            $mensagem = test_input($_POST["mensagem"]);
        }


        // Função para prover segurança na passagem de dados
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        } */
    ?>

    <!-- Estrutura do formulário -->

    <div class="row-">
        <div class="containers col-lg-4 col-md-5 col-sm-6" style="background-color:unset; margin-top: 50px;">
            <img src="<?php echo BASEURL?>img/logo.png" alt="" width="100%">
        </div>
        <div class="containers col-lg-6 col-md-7 col-sm-8" style="margin-top: 50; background-color:rgba(221, 221, 221, 0.8); margin-bottom:100px">

            <h1>Cadastro</h1>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="">Nome:<span> *</span></label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="customer['nome']" placeholder="Digite seu primeiro nome" required>
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="">Sobrenome:<span> *</span></label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="customer['sobrenome']" placeholder="Digite seu sobrenome" required>
                       
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="">E-mail:<span> *</span></label>
                    </div>
                    <div class="col-75">
                        <input type="email" name="customer['email']" placeholder="email@dominio.com.br" required>
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-5">
                        <label for="">Telefone:<span> *</span></label>
                    </div>
                    <div class="col-7">
                        <label for="">Cidade:<span> *</span></label>
                    </div>

                </div>

                <div class="row">
                    <div class="col-5">
                        <input type="tel" name="customer['telefone']" placeholder="(ddd) 9 xxxx-xxxx" required>
                        
                    </div>
                    <div class="col-7">
                        <select name="customer['cidade']" id="cidade" required><span>*</span>
                            <option value="Vicente Pires">Vicente Pires</option>
                            <option value="Taguatinga">Taguatinga</option>
                            <option value="Ceilândia">Ceilândia</option>
                            <option value="Gama">Gama</option>
                            <option value="Samambaia">Samambaia</option>
                            <option value="Cruzeiro">Cruzeiro</option>
                            <option value="Guará">Guará</option>
                            <option value="Riacho Fundo">Riacho Fundo</option>
                            <option value="Lago Sul">Lago Sul</option>
                            <option value="Santa Maria">Santa Maria</option>
                            <option value="Brazlândia">Brazlândia</option>
                            <option value="Recando das Emas">Recanto das Emas</option>
                        </select>
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="">Mensagem:</label>
                    </div>
                    <div class="col-75">
                        <textarea style="height: 100px;" name="customer['mensagem']" placeholder="Digite sua mensagem"></textarea>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-danger" style="margin-top: 20px;">Cadastrar</button>
                <a href="<?php echo BASEURL?>index.php" class="btn" style="margin-top: 20px;">Cancelar</a>
                
            </form>

        </div>
    </div>
    </div>


</body>

</html>