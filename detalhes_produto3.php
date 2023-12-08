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
                <img src="img/pequeno_principe.jpeg" style="width:350px;height:380px;" alt=""
                    class="img_produto img_detalhe3_1 mb-3 col-12">
                <img src="img/pequeno_principe2.jpg" style="width:450px;height:380px;" alt=""
                    class="img_produto img_detalhe3_2 mb-3 col-12">
            </div>
            <div class="row container-produto justify-content-center">
                <img src="img/pequeno_principe3.jpg" style="width:450px;height:380px;" alt=""
                    class="img_produto mb-3 col-12">
                <img src="img/pequeno_principe4.jpg" style="width:450px;height:380px;" alt=""
                    class="img_produto mb-3 col-12">
            </div>
            <div class="row container-produto justify-content-center">
                <img src="img/pequeno_principe5.jpg" style="width:450px;height:380px;" alt=""
                    class="img_produto mb-3 col-12">
            </div>

        </div>

        <!-- Informações do Produto -->

        <div class="col-lg-4 col-md-12 col-sm-12 justify-content-center  ">
            <!-- Nome -->
            <div class="bordinha col-lg-4 col-md-12 col-sm-5 justify-content-center p-2 card light-color">
                <p class="h2 mt-5" style="font-weight:500;">O pequeno principe</p>
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
                <p class="h2 mt-3">R$24,99</p>

                <input type="text" placeholder="Quantidade" style="border-radius:5px;" class="form-control">
                <!-- Adicionar ao Carrinho -->
                <a href="<?= $BASE_URL ?>carrinho.php" class="add_carrinho mt-4 text-center btn" type="submit">Adicionar
                    ao Carrinho</a>
            </div>


            <br><br>

            <!-- Container com os detalhes do produto -->
            <div class="detalhes3 col-lg-4 col-md-12 col-sm-5 justify-content-center p-2 card light-color">
                <p class="h4 mt-3" style="font-weight:400;">Descrição do produto:</p>

                <p class="description mt-3 mb-4">O grande clássico de todos os tempos!

                    As sábias, encantadoras e inesquecíveis histórias contadas pelo pequeno príncipe falam de seu
                    próprio planeta, com seus três vulcões e uma flor presunçosa.

                    Uma história maravilhosa e profunda, para todas as idades, e ilustrada pelo próprio autor.

                    Edição brochura, no formato tradicional da obra.

                    Nova tradução, pela professora de Literatura Francesa Isolina Bresolin Vianna. Ilustrado com as
                    aquarelas do próprio Saint-Exupéry.

                    O pequeno príncipe é um dos maiores clássicos da literatura francesa. Sempre presente nas listas de
                    best-sellers, já foi publicado em mais de 250 idiomas, e tornou-se o livro mais lido e mais
                    traduzido na literatura internacional.

                    Esta edição, que conta ainda com uma inovação editorial:é a única a trazer as ilustrações
                    posicionadas fielmente à sequência da própria narrativa.</p>
            </div>
        </div>
    </div>
</div>

<!-- Linkando templates: footer -->
<?php
include_once("templates/footer.php");
?>