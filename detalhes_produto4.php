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
                <img src="img/hp3.webp" style="width:450px;height:380px;" alt="" class="img_produto mb-3 col-12">
                <img src="img/hp4.webp" style="width:450px;height:380px;" alt="" class="img_produto mb-3 col-12">
            </div>
            <div class="row container-produto justify-content-center">
                <img src="img/hp5.webp" style="width:450px;height:380px;" alt="" class="img_produto mb-3 col-12">
                <img src="img/hp6.webp" style="width:450px;height:380px;" alt="" class="img_produto mb-3 col-12">
            </div>
            <div class="row container-produto justify-content-center">
                <img src="img/hp7.webp" style="width:450px;height:380px;" alt="" class="img_produto mb-3 col-12">
            </div>

        </div>

        <!-- Informações do Produto -->

        <div class="col-lg-4 col-md-12 col-sm-12 justify-content-center  ">
            <!-- Nome -->
            <div class="bordinha col-lg-4 col-md-12 col-sm-5 justify-content-center p-2 card light-color">
                <p class="h2 mt-5" style="font-weight:500;">Harry Potter E A Criança Amaldiçoada</p>
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
                <p class="h2 mt-3">R$31,90</p>

                <input type="text" placeholder="Quantidade" style="border-radius:5px;" class="form-control">
                <!-- Adicionar ao Carrinho -->
                <a href="<?= $BASE_URL ?>carrinho.php" class="add_carrinho mt-4 text-center btn" type="submit">Adicionar
                    ao Carrinho</a>
            </div>


            <br><br>

            <!-- Container com os detalhes do produto -->
            <div class="detalhes4 col-lg-4 col-md-12 col-sm-5 justify-content-center p-2 card light-color">
                <p class="h4 mt-3" style="font-weight:400;">Descrição do produto:</p>

                <p class="description mt-3 mb-4">Sempre foi difícil ser Harry Potter e não é mais fácil agora que ele é
                    um sobrecarregado funcionário do Ministério da Magia, marido e pai de três crianças em idade
                    escolar. Enquanto Harry lida com um passado que se recusa a ficar para trás, seu filho mais novo,
                    Alvo, deve lutar com o peso de um legado de família que ele nunca quis. À medida que passado e
                    presente se fundem de forma ameaçadora, ambos, pai e filho, aprendem uma incômoda verdade: às vezes
                    as trevas vêm de lugares inesperados.</p>
            </div>
        </div>
    </div>
</div>

<!-- Linkando templates: footer -->
<?php
include_once("templates/footer.php");
?>