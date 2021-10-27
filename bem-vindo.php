<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Seja bem vindo
        <?php
            echo $_POST["nome"]." ".$_POST["sobrenome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $cidade = $_POST["cidade"];
            $mensagem = $_POST["mensagem"];
        ?>

        <ul>
            <li><?php echo "<b>E-mail:</b> $email" ?></li>
            <li><?php echo "<b>Telefone:</b> $telefone" ?></li>
            <li><?php echo "<b>Cidade:</b> $cidade" ?></li>
            <li><?php echo "<b>Mensagem:</b> $mensagem" ?></li>
        </ul>
    </body>
</html>