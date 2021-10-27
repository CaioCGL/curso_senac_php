<?php
require_once '../config.php';
require_once 'functions.php';
index();
include HEADER_TEMPLATE;
?>


<!-- Tabela de seleção de users -->
<div class="row" style="background-color: red; padding: 100px; background-image: linear-gradient(to bottom right, rgb(75,0,130), rgb(255,165,0));">
    <div class="col-lg-1 col-0"></div>
    <div class="col-lg-10 col-12">
        <div style="overflow-x: auto;">
            <table>
                <tr>
                    <!-- cada tr representa uma linha da tabela -->
                    <th>Nome</th> <!-- th representa o cabeçalho -->
                    <th>Sobrenome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
                <?php if ($customers) : ?>
                    <?php foreach ($customers as $customer) : ?>
                        <tr class="border-bottom">
                            <td><?php echo $customer['nome']; ?></td> <!-- th representa os valores em cada coluna -->
                            <td><?php echo $customer['sobrenome']; ?></td>
                            <td><?php echo $customer['email']; ?></td>
                            <td><?php echo $customer['telefone']; ?></td>
                            <td>
                                <a href="view.php?id=<?php echo $customer['id']; ?>" class="fas fa-eye" style="text-decoration: none; color:black"></a> |
                                <a href="edit.php?id=<?php echo $customer['id']; ?>" class="fas fa-user-edit" style="text-decoration: none; color:black"></a> |
                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete-modal"  data-customer="<?php echo $customer['id']; ?>" style="text-decoration: none; color:black">
                                    <i class="fas fa-user-times"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="5">Nenhum registro encontrado.</td>
                    </tr>
                <?php endif; ?>

            </table>
            <?php include './modal.php' ?>
        </div>
    </div>
    <div class="col-lg-1 col-0"></div>
</div>

<!-- Fim da tabela -->
<?php
include FOOTER_TEMPLATE;
?>
</body>

</html>