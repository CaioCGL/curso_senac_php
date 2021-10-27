<?php

    require_once('functions.php'); 
    view($_GET['id']);

    include HEADER_TEMPLATE;

?>
<div class="row" style="background-color: red; padding: 100px; background-image: linear-gradient(to bottom right, rgb(75,0,130), rgb(255,165,0));">
    <div class="containers" style="background-color: #f1f1f1; width: 70%; padding: 40px 80px">
        <h2>Cliente <?php echo $customer['id']; ?></h2>
        <hr>
        <dl>
            <dt>Nome:</dt>
            <dd><?php echo $customer['nome']; ?></dd>
            <dt>Sobrenome:</dt>
            <dd><?php echo $customer['sobrenome']; ?></dd>
            <dt>Email:</dt>
            <dd><?php echo $customer['email']; ?></dd>
            <dt> Telefone:</dt>
            <dd><?php echo $customer['telefone']; ?></dd>
            <dt>Cidade:</dt>
            <dd><?php echo $customer['cidade']; ?></dd>
            <dt>Mensagem:</dt>
            <dd><?php echo $customer['mensagem']; ?></dd>
            <dt>Data de Criação:</dt>
            <dd><?php echo $customer['created']; ?></dd>
        </dl>
    
        <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-danger">Editar</a>
        <a href="selecao.php" class="btn btn-secondary">Voltar</a>
    </div>
</div>



<?php
    include FOOTER_TEMPLATE;
?>