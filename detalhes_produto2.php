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
                <img src="img/b5.webp" style="width:450px;height:380px;" alt="" class="img_produto mb-3 col-12">
                <img src="img/b8.webp" style="width:450px;height:380px;" alt="" class="img_produto mb-3 col-12">
            </div>
            <div class="row container-produto justify-content-center">
                <img src="img/b9.webp" style="width:450px;height:380px;" alt="" class="img_produto mb-3 col-12">
                <img src="img/b4.jpg" style="width:450px;height:380px;" alt="" class="img_produto mb-3 col-12">
            </div>
            <div class="row container-produto justify-content-center">
                <img src="img/b10.jpeg" style="width:450px;height:380px;" alt="" class="img_produto mb-3 col-12">
            </div>

        </div>

        <!-- Informações do Produto -->

        <div class="col-lg-4 col-md-12 col-sm-12 justify-content-center info-box">
            <div class="bordinha col-lg-4 col-md-12 col-sm-5 mb-5 justify-content-center p-2 card light-color">
                <!-- Nome -->
                <p class="h2 mt-5" style="font-weight:500;">A biblioteca da meia noite</p>
                <!-- Tipo do produto -->
                <p class="h4 mt-3" style="font-weight:400;">Romance</p>
                <!-- Avaliação do Produto -->
                <div class="star_avaliation mt-4">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                </div>
                <p class="h3 mt-3" style="font-weight:400;">Avaliação de Produto</p>
                <!-- Preço -->
                <p class="h2 mt-3">R$50,39</p>

                <input type="text" placeholder="Quantidade" style="border-radius:5px;" class="form-control">
                <!-- Adicionar ao Carrinho -->
                <a href="<?= $BASE_URL ?>carrinho.php" class="add_carrinho mt-4 text-center btn" type="submit">Adicionar
                    ao Carrinho</a>


                <br><br>
            </div>
            <!-- Container com os detalhes do produto -->
            <div class="detalhes2 col-lg-4 col-md-12 col-sm-5 justify-content-center p-2 card light-color">
                <p class="h4 mt-3" style="font-weight:400;">Descrição do produto
                </p>
                <p class="description mt-3 mb-4">
                    Aos 35 anos, Nora Seed é uma mulher cheia de talentos e poucas
                    conquistas. Arrependida das escolhas que fez no passado, ela vive se perguntando o que poderia ter
                    acontecido caso tivesse vivido de maneira diferente. Após ser demitida e seu gato ser atropelado,
                    Nora vê pouco sentido em sua existência e decide colocar um ponto final em tudo. Porém, quando se vê
                    na Biblioteca da Meia-Noite, Nora ganha uma oportunidade única de viver todas as vidas que poderia
                    ter vivido. Mas será que alguma dessas outras vidas é realmente melhor do que a que ela já tem?
                </p>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Linkando templates: footer -->
<?php
include_once("templates/footer.php");
?>