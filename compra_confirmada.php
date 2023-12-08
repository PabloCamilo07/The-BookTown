<!-- Linkando templates: header -->
<?php
include_once("templates/header.php");
?>

    <!-- CONTAINER DE POSICIONAMENTO -->
    <div class="container p-4">

    <!-- Quadro de Confirmação de compra -->
    <div class="quadro-compra d-flex p-5 justify-content-around align-items-center mb-5">

        <!-- Título -->
        <p class="h5">Compra efetuada com sucesso</p>

        <!-- Imagem de confirmação de compra -->
        <div class="correct mt-3 mb-3">
            <i class="bi bi-check-circle"></i>
        </div>

        <!-- Botão para volta para a página inicial -->
        <a href="<?=$BASE_URL?>index.php" class="btn">Retornar à página inicial</a>
    </div>
    </div>

<!-- Linkando templates: footer -->
<?php
include_once("templates/footer.php");
?>