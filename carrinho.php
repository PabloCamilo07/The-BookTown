<!-- incluir o cabeçario -->
<?php
include_once("templates/header.php");
?>
<!--INFOS PARA AJUDAR -->
<!-- COL (define dinamicamente a largura para as colunas.)-->
<!-- ROW (é necessário para que o espaçamento das extremidades do Grid funcionem sem erros.) -->
<!-- mb (margin bottom para definir a margem da parte inferior) -->
<!-- mt (margin top para definir a margem da parte superior) -->


<!-- incluir o css -->
<link rel="stylesheet" href="carrinho.css">
<!-- container -->
<div class="container mt-5">
    <h2><i class="bi bi-cart3"></i> Carrinho de compras</h2>
    <hr>

    <!-- PRIMEIRO LIVRO -->
    <!-- id para o quadradao cinza -->
    <div class="row mb-3 light-color" id="products-container">
        <div class="col-2">
            <img src="img/capa_1.jpeg" class="img-fluid" alt="livro-one-piece">
        </div>
        <div class="col-6">
            <!-- titulo e autor do livro -->
            <h3>One Piece vol. 103</h3>
            <p>Por Eiichiro Oda</p>
        </div>
        <div class="col-2">
            <!-- preço do livro -->
            <p class="preco h5">R$ 44,90</p>
        </div>
        <div class="col-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1" checked>
            </div>
        </div>
    </div>

    <br>
    <!-- SEGUNDO LIVRO -->
    <div class="row mb-3 light-color" id="products-container">
        <div class="col-2">
            <img src="img/livro-infantil.jpg" class="img-fluid" alt="livro-one-piece">
        </div>
        <div class="col-6">
            <!-- titulo e autor do livro -->
            <h3>Marcelo Marmelo Martelo</h3>
            <p>Por Eiichiro Oda</p>
        </div>
        <div class="col-2">
            <!-- preço do livro -->
            <p class="preco h5">R$ 62,00</p>
        </div>
        <div class="col-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1" checked>
            </div>
        </div>
    </div>
    <br>
    <!-- TERCEIRO LIVRO -->
    <div class="row mb-3 light-color" id="products-container">
        <div class="col-2">
            <img src="img/Reinacoes_Narizinho.jpeg" class="img-fluid" alt="livro-one-piece">
        </div>
        <div class="col-6">
            <!-- titulo e autor do livro -->
            <h3>Reinações de Narizinho</h3>
            <p>Por Monteiro Lobato</p>
        </div>
        <div class="col-2">
            <p class="preco h5">R$ 39,99</p>
        </div>
        <div class="col-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1" checked>
            </div>
        </div>
    </div>

    <div class="total-items-container row mt-4">
        <div class="">
            <h5>Total:</h5>
        </div>
        <div class="">
            <!-- preço total -->
            <h5>R$ 106,90</h5>
        </div>
    </div>
    <div class="align-button-right row col-md-2">
        <a href="<?=$BASE_URL?>compra_confirmada.php" class="btn">Finalizar Compra</a>
    </div>

    
    <br>
</div>

<!-- Footer -->
<?php include_once("templates/footer.php"); ?>
<!-- para incluir o footer -->
<?php
include_once("templates/footer.php");
?>