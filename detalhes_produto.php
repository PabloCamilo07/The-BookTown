<!-- Linkando templates: header -->
<?php
include_once("templates/header.php");
?>

<!-- CONTAINER DE POSICIONAMENTO DA PÁGINA -->
<div class="container-fluid mt-5 mb-5">

    <!-- Linha com todos os itens: imagens e informações -->
    <div class="row d-flex justify-content-center">

        <!-- Colunas: Imagens e Informações -->

        <!-- Imagens -->
        <div class="col-lg-8 col-md-12 col-sm-12 p-5">
            <div class="row container-produto justify-content-center">
                <img src="img/Coraline1.jpg" style="width:320px;height:380px;" alt=""
                    class="img_produto img_detalhe1_1 mb-3 col-12">
                <img src="img/Coraline2.jpg" style="width:350px;height:380px;" alt=""
                    class="img_produto img_detalhe1_2 mb-3 col-12">
            </div>
            <div class="row container-produto justify-content-center">
                <img src="img/Coraline3.jpg" style="width:450px;height:380px;" alt="" class="img_produto mb-3 col-12">
                <img src="img/Coraline4.jpg" style="width:450px;height:380px;" alt="" class="img_produto mb-3 col-12">
            </div>
            <div class="row container-produto justify-content-center">
                <img src="img/Coraline5.jpg" style="width:450px;height:380px;" alt="" class="img_produto mb-3 col-12">
            </div>

        </div>

        <!-- Informações do Produto -->

        <div class="col-lg-4 col-md-12 col-sm-12 justify-content-center  ">
            <!-- Nome -->
            <div class="bordinha col-lg-4 col-md-12 col-sm-5 justify-content-center p-2 card light-color">
                <p class="h2 mt-5" style="font-weight:500;">Coraline</p>
                <!-- Tipo do produto -->
                <p class="h4 mt-3" style="font-weight:400;">Fantasia</p>
                <!-- Avaliação do Produto -->
                <div class="star_avaliation mt-4">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <p class="h3 mt-3" style="font-weight:400;">Avaliação de Produto</p>
                <!-- Preço -->
                <p class="h2 mt-3">R$54,38</p>

                <input type="text" placeholder="Quantidade" style="border-radius:5px;" class="form-control">
                <!-- Adicionar ao Carrinho -->
                <a href="<?= $BASE_URL ?>carrinho.php" class="add_carrinho mt-4 text-center btn" type="submit">Adicionar
                    ao Carrinho</a>
            </div>

            <!-- Quebra de Linha -->
            <br><br>

            <!-- Container com os detalhes do produto -->
            <div class="detalhes col-lg-4 col-md-12 col-sm-5 justify-content-center p-2 card light-color">
                <p class="h4 mt-3" style="font-weight:400;">Descrição do produto:</p>

                <p class="description mt-3 mb-4">Certas portas não devem ser abertas. E Coraline descobre isso pouco
                    tempo depois de chegar com os pais à sua nova casa, um apartamento em um casarão antigo ocupado por
                    vizinhos excêntricos e envolto por uma névoa insistente, um mundo de estranhezas e magia, o tipo de
                    universo que apenas Neil Gaiman pode criar.

                    Ao abrir uma porta misteriosa na sala de casa, a menina se depara com um lugar macabro e fascinante.
                    Ali, naquele outro mundo, seus outros pais são criaturas muito pálidas, com botões negros no lugar
                    dos olhos, sempre dispostos a lhe dar atenção, fazer suas comidas preferidas e mostrar os brinquedos
                    mais divertidos. Coraline enfim se sente... em casa. Mas essa sensação logo desaparece, quando ela
                    descobre que o lugar guarda mistérios e perigos, e a menina se dá conta de que voltar para sua
                    verdadeira casa vai ser muito mais difícil ― e assustador ― do que imaginava.

                    Publicado pela primeira vez em 2002, Coraline foi o primeiro livro de Neil Gaiman para o público
                    infantojuvenil e se tornou uma das obras mais emblemáticas do escritor. Repleta de elementos ao
                    mesmo tempo sombrios e lúdicos, a história conquistou crianças e adultos em todo o mundo e, em 2009,
                    ganhou as telas de cinema em uma animação dirigida por Henry Selick, de O estranho mundo de Jack.
                    Nesta edição especial em capa dura, com introdução do autor e projeto gráfico exclusivo, coube ao
                    renomado ilustrador Chris Riddell dar vida ao universo mágico e aterrorizante criado por Neil
                    Gaiman.</p>
            </div>
        </div>
    </div>
</div>

<!-- Linkando templates: footer -->
<?php
include_once("templates/footer.php");
?>