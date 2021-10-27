<?php

require_once 'functions.php';
edit();
include HEADER_TEMPLATE;

?>

<div class="row-" style="background-color: red; padding: 100px; background-image: linear-gradient(to bottom right, rgb(75,0,130), rgb(255,165,0));">
    
        
        <div class="containers col-lg-6 col-md-7 col-sm-8" style="margin-top: 50; background-color:rgba(221, 221, 221, 0.8); margin-bottom:100px">
        
            <h1>Edição de Usuário</h1>

            <form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="">Nome:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="customer['nome']" value="<?php echo $customer['nome']; ?>">
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="">Sobrenome:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="customer['sobrenome']" value="<?php echo $customer['sobrenome']; ?>">
                       
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="">E-mail:</label>
                    </div>
                    <div class="col-75">
                        <input type="email" name="customer['email']"  value="<?php echo $customer['email']; ?>">
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-5">
                        <label for="">Telefone:</label>
                    </div>
                    <div class="col-7">
                        <label for="">Cidade:</label>
                    </div>

                </div>

                <div class="row">
                    <div class="col-5">
                        <input type="tel" name="customer['telefone']"  value="<?php echo $customer['telefone']; ?>">
                        
                    </div>
                    <div class="col-7">
                        <select name="customer['cidade']" id="cidade" value="<?php echo $customer['cidade']; ?>"><span>*</span>
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
                        <textarea style="height: 100px;" name="customer['mensagem']" ><?php echo $customer['mensagem']; ?></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger" style="margin-top: 20px;">Confirmar</button>
                <a href="selecao.php" class="btn btn-secondary" style="margin-top: 20px;">Cancelar</a>
            </form>

        </div>
    </div>

    <?php
    include FOOTER_TEMPLATE;
    ?>
    


