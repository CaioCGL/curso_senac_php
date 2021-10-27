<?php
    require_once 'config.php';
    require_once DBAPI;
    $db = open_database();  

    include HEADER_TEMPLATE;
?>

    <!-- Conteúdo central do site -->
    <?php 
        if(isset($_SESSION['usuarioNome'])){
    ?>

    <div class="row" style="text-align: center; margin: auto; margin-top:40px; width: 60%">
        <h2><?php echo "Bem vindo(a) " .$_SESSION['usuarioNome'] . "!"; ?></h2>
        <hr style="margin-bottom: 40px;">
    </div>

    <?php 
        }
    ?>

    <div class="row" style="margin-top: 0px; ">
        <div id="demo" class="carousel slide" data-bs-ride="carousel" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/img4.png" alt="" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/img5.png" alt="C" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/img6.png" alt="" class="d-block w-100">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>

    <div class="row" style="text-align: center; margin: auto; margin-top:40px; width: 60%">
        <h3 style="color: rgb(219, 0, 0); margin: auto">Soluções CGLTelecom</h3>
        <p>Nossos produtos, cabos e componentes, agrupados em soluções inovam a forma de atender às demandas de largura de banda de redes de comunicação nas indústrias, empresas e residências. </p>
    </div>

    <div class="row" style="margin: auto; width: 80%; text-align:center;">
        <div class="col-lg-3 col-sm-6 col-xs-12" style="margin-top: 30px;">
            <a href="" style="text-decoration: none; color:black">
                <div class="polaroid2">
                    <img src="img/img2.png" alt="" width="100%" style="border-radius: 10px 10px 0px 0px;">
                    <div class="caixa"><p>RÁDIO</p></div>
                </div>
            </a>
        </div>
        
        <div class="col-lg-3 col-sm-6 col-xs-12" style="margin-top: 30px;">
            <a href="" style="text-decoration: none; color:black">
                <div class="polaroid2">
                    <img src="img/ftta.jpg" alt="" width="100%" style="border-radius: 10px 10px 0px 0px;">
                    <div class="caixa"><p>FTTA</p></div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12" style="margin-top: 30px;">
            <a href="" style="text-decoration: none; color:black">
                <div class="polaroid2">
                    <img src="img/ftth.jpg" alt="" width="100%" style="border-radius: 10px 10px 0px 0px;">
                    <div class="caixa"><p>FTTH</p></div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12" style="margin-top: 30px;">
            <a href="" style="text-decoration: none; color:black">
                <div class="polaroid2">
                    <img src="img/img1.jpg" alt="" width="100%" style="border-radius: 10px 10px 0px 0px;">
                    <div class="caixa"><p>DATA CENTER</p></div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12" style="margin-top: 30px;">
            <a href="" style="text-decoration: none; color:black">
                <div class="polaroid2">
                    <img src="img/laserway.jpg" alt="" width="100%" style="border-radius: 10px 10px 0px 0px;">
                    <div class="caixa"><p>LASERWAY</p></div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12" style="margin-top: 30px;">
            <a href="" style="text-decoration: none; color:black">
                <div class="polaroid2">
                    <img src="img/enterprise.jpg" alt="" width="100%" style="border-radius: 10px 10px 0px 0px;">
                    <div class="caixa"><p>ENTERPRISE</p></div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12" style="margin-top: 30px;">
            <a href="" style="text-decoration: none; color:black">
                <div class="polaroid2">
                    <img src="img/its.jpg" alt="" width="100%" style="border-radius: 10px 10px 0px 0px;">
                    <div class="caixa"><p>ITS</p></div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12" style="margin-top: 30px;">
            <a href="" style="text-decoration: none; color:black">
                <div class="polaroid2">
                    <img src="img/auto.jpg" alt="" width="100%" style="border-radius: 10px 10px 0px 0px;">
                    <div class="caixa"><p>AUTOMOBILÍSTICA</p></div>
                </div>
            </a>
        </div>
        
    </div>

    <div class="row" style="margin-top: 70px; background-color:rgb(219, 0, 0); background-image: linear-gradient(to bottom right, rgb(75,0,130), rgb(206,0,0));">
        <div class="row" style="width: 80%; margin:auto">
            <div class="col-lg-4 col-xs-12" style="padding: 100px 0px 100px 0px;">
                <a href="<?php echo BASEURL; ?>inc/sobre.php" style="text-decoration: none;">
                    <h1 style="text-align: left; color: white">Sobre nós</h1>
                    <h5 style="text-align: left; color: white">A história do Grupo CGLTelecom teve início há mais de 130 anos, no Brasil. São mais de 100 empresas afiliadas e modernos laboratórios de desenvolvimento, preparados para gerar novas tecnologias e produtos.</h5>
                    <p style="text-align: left; color: white; margin-top:20px;">Qualidade é um dos valores mais importantes para a CGLTelecom. A empresa monitora cada passo da produção dos seus produtos, processos e serviços, desde a obtenção da matéria-prima, passando pelo seu manuseio, até o correto uso pelo cliente. Por meio dessa filosofia, conquistou uma série de certificados nacionais e internacionais de qualidade.</p>
                    
                </a>
            </div>
            <div class="col-lg-8 col-xs-12" style="padding: 100px 0px 100px 0px; margin: auto; text-align: right">
                <img src="img/teste.png" alt="" style="width: 85% ;">
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 70px; background-color:white;">
        <div class="row" style="width: 80%; margin:auto">
            <div class="col-lg-4 col-xs-12" style="padding: 100px 0px 100px 0px; text-align:center"> 
                <p style="color: black; margin-bottom: 0">Fale Conosco</p>
                <h1 style="color:rgb(219, 0, 0)">0800 123 4567</h2>
                <p style="color: blck;">Nossa equipe aguarda seu contato! Caso deseje atendimento para outros países, basta alterar sua localização clicando aqui.</p>  
            </div>
            <div class="col-lg-8 col-xs-12" style="padding: 100px 0px 100px 0px; margin: auto; text-align: right">
                <img src="img/fale_conosco.png" alt="" style="width: 85% ;">
            </div>
        </div>
    </div>

    <div class="row" style="text-align: center; margin: auto; margin-top:0px; width: 60%">
        <h3 style="color: rgb(219, 0, 0); margin: auto">Novidades</h3>
    </div>

    <div class="row" style="margin: auto; width: 80%; text-align:center; margin-bottom: 70px;">
        <div class="col-lg-4 col-xs-12" style="margin-top: 30px;">
            <a href="" style="text-decoration: none; color:black">
                <div class="polaroid3">
                    <img src="img/novidades1.jpg" alt="" width="100%" style="border-radius: 10px 10px 0px 0px;">
                    <h5 style="margin: 20px; ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta aspernatur maiores  </h5>
                    <p style="margin: 20px; padding:0px 0px 20px 0px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptas fugiat fuga labore libero amet quia est eligendi, beatae molestias </p>
                </div>
            </a>
        </div>
        
        <div class="col-lg-4 col-xs-12" style="margin-top: 30px;">
            <a href="" style="text-decoration: none; color:black">
                <div class="polaroid3">
                    <img src="img/novidades2.jpeg" alt="" width="100%" style="border-radius: 10px 10px 0px 0px;">
                    <h5 style="margin: 20px; ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta aspernatur maiores  </h5>
                    <p style="margin: 20px; padding:0px 0px 20px 0px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptas fugiat fuga labore libero amet quia est eligendi, beatae molestias</p>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-xs-12" style="margin-top: 30px;">
            <a href="" style="text-decoration: none; color:black">
                <div class="polaroid3">
                    <img src="img/novidades3.jpeg" alt="" width="100%" style="border-radius: 10px 10px 0px 0px;">
                    <h5 style="margin: 20px; ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta aspernatur maiores  </h5>
                    <p style="margin: 20px; padding:0px 0px 20px 0px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptas fugiat fuga labore libero amet quia est eligendi, beatae molestias</p>
                </div>
            </a>
        </div>
  
    </div>


    <!-- Área de rodapé -->
    <?php
    include FOOTER_TEMPLATE;
    ?>


</body>

</html>