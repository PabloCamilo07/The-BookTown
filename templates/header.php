<?php

// Inclui arquivos externos necessários
require_once("config/url.php");
require_once("config/connection.php");
require_once("models/Message.php");
require_once("Controller/UserController.php");

// Cria uma instância da classe Message para exibir mensagens do sistema
$message = new Message($BASE_URL);

// Obtém mensagens flash (mensagens temporárias exibidas uma única vez)
$flassMessage = $message->getMessage();

// Limpa a mensagem flash após exibi-la
if (!empty($flassMessage["msg"])) {
  $message->clearMessage();
}

// Cria uma instância da classe UserController para gerenciar operações relacionadas a usuários
$userController = new UserController($conn, $BASE_URL);

// Obtém dados do usuário com base no token (verifica se o usuário está autenticado)
$userData = $userController->verifyToken(false);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Booktown</title>
  <!-- Incluir o favicon -->
  <link rel="shortcut icon" href="<?= $BASE_URL ?>img/logo.png" type="image/x-icon">
  <!-- CSS do bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- Ícones do Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- CSS personalizado-->
  <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
  

  <!-- JS BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"
    defer></script>

<body>

  <header>

    <!-- Inserindo navbar -->
    <nav style="background-color: #C89F5F;" class="container-fluid navbar navbar-expand-md navbar-expand-lg py-4 px-2" id="navbar">
      <div class="container ">
        <!-- marca da loja -->
        <a class="navbar-brand" href="<?= $BASE_URL ?>index.php"><img class="logonav"
            src="<?= $BASE_URL ?>img/logo.png" alt=""></a>
        <div id="navbar-items">
          <!-- insere a div para limitar o espaço -->
          <div style="margin-right:100px"></div>
          <!-- formulario com display flex -->
          <form class="d-flex" id="search-form">
            <!-- ícone da lupa -->
            <i class="bi bi-search primary-color"></i>
            <input class="form-control me-2" type="search" placeholder="Encontre o seu produto" aria-label="Search"
              style="text-align: center;">
            <button style="background-color: #508696; border: white;" class="btn" id="button-search"
              type="submit">Procure</button>
          </form>

          <!-- Itens da navbar -->
          <div class="row align-items-center" id="navbar">

            <!-- Lista de itens -->
            <ul class="navbar-nav">

              <!-- Condições se as informações de usuáiro estiverem preenchidas ou nãp -->
              <?php if ($userData): ?>
                <!-- Carrinho de Compras -->
                <li class="nav-item">
                  <a href="<?= $BASE_URL ?>carrinho.php" class="nav-link bold">
                    <i class="bi bi-cart me-2"></i>Carrinho
                  </a>
                </li>

                <!-- Perfil -->
                <li class="nav-item">
                  <a href="<?= $BASE_URL ?>profile.php" class="nav-link bold"><i class="bi bi-person-circle"></i>
                    <?= $userData->name ?>
                  </a>
                </li>

                <!-- Edição de perfil -->
                <li class="nav-item">
                  <a href="<?= $BASE_URL ?>editprofile.php" class="nav-link bold"><i class="bi bi-pencil"></i>
                    Editar
                  </a>
                </li>

                <!-- Botão de Logout -->
                <li class="nav-item">
                  <a href="<?= $BASE_URL ?>logout.php" class="nav-link"><i class="bi bi-door-open"></i> Sair</a>
                </li>

                <!-- Condição se não houverem informações preenchidas -->
              <?php else: ?>
                
                <!-- Cadastrar -->
                <li class="nav-item">
                  <a href="<?= $BASE_URL ?>cadastro.php" class="nav-link"><i class="bi bi-person-plus"></i> Cadastrar </a>
                </li>

                <!-- Login -->
                <li class="nav-item">
                  <a href="<?= $BASE_URL ?>login.php" class="nav-link"> <i class="bi bi-person"></i> Entrar</a>
                </li>
                <!-- Fim de condição -->
              <?php endif; ?>
            </ul>
          </div>
        </div>
    </nav>

    <!-- Segunda navbar -->

    <nav class="navbar navbar-expand-lg secondary-bg-color p-2" id="bottom-navbar-container">
      <div class="container">

        <!-- menu hamburguer em mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bottom-navbar"
          aria-controls="bottom-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list"></i>
        </button>

        <ul class="navbar-nav mb-2 mb-lg-0 collapse navbar-collapse" id="bottom-navbar">
          <li class="nav-item second-nav-item">
            <a class="nav-link" href="<?=$BASE_URL?>index.php">
              Home
            </a>
          </li>
          <li class="nav-item second-nav-item">
            <a class="nav-link" href="#best-sellers">
              Mais vendidos
            </a>
          </li>
          <li class="nav-item second-nav-item">
            <a class="nav-link" href="#bottom-banner">
              Promoções
            </a>
          </li>
          <li class="nav-item second-nav-item">
            <a class="nav-link" href="#products">
              Produtos
            </a>
          </li>
          <li class="nav-item second-nav-item">
            <a class="nav-link" href="#gallery">
              Contato
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <br><br>
    <!-- FIM NAVBAR -->
  </header>

  <!-- Mensagens do sistema -->
  <?php if (!empty($flassMessage["msg"])): ?>
    <div class="msg-container">
      <p class="msg <?= $flassMessage["type"] ?>">
        <?= $flassMessage["msg"] ?>
      </p>
    </div>
  <?php endif; ?>