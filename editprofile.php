<?php

// Inclusão de arquivos externos
require_once("templates/header.php");
require_once("models/User.php");
require_once("Controller/UserController.php");

// Criação de classe
$user = new User();
$userController = new UserController($conn, $BASE_URL);

// Verifica o token do usuário para autenticação. Se o token for válido, recupera os dados do usuário.
$userData = $userController->verifyToken(true);


// Obtém o nome completo do usuário usando o método getFullName da classe User. Verifica se o usuário possui uma imagem de perfil; se não tiver, define uma imagem padrão.
$fullName = $user->getFullName($userData);

if ($userData->image == "") {
  $userData->image = "people-avatar-green.png";
}

?>

<!-- CONTAINER DE POSICIONAMENTO COM ID-->
<div class="container-fluid col-11 col-md-9" id="main-container">

  <!-- Container de coluna para ajustar na grade -->
  <div class="col-md-12">


    <!-- Inicia um formulário que será enviado para process.php para processamento. Este formulário inclui campos para editar o nome, sobrenome, email, imagem de perfil e uma descrição sobre o usuário. -->
    <!-- Formulário de edição de perfil -->
    <form action="<?= $BASE_URL ?>config/process.php" method="POST" enctype="multipart/form-data">

      <!-- Input de definição de tipo de modelagem de dados utilizada, predefinida na página de processamento(process.php) -->
      <input type="hidden" name="type" value="update">

      <!-- Linha de posicionamento -->
      <div class="row">
        <!-- Coluna de posicionamento -->
        <div class="col-md-4">

          <!-- Nome do perfil de usuário -->
          <h1>
            <?= $fullName ?>
          </h1>
          <p class="page-description">Altere seus dados no formulário abaixo:</p>
          <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o seu nome"
              value="<?= $userData->name ?>">
          </div>
          <div class="form-group">
            <label for="lastname">Sobrenome:</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Digite o seu sobrenome"
              value="<?= $userData->lastname ?>">
          </div>
          <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="text" class="form-control" id="email" name="email"
              placeholder="Digite o seu nome" value="<?= $userData->email ?>">
          </div>
          <br>
          <input type="submit" class="btn btn-light" value="Alterar">
        </div>

        <div class="col-md-6 mt-5">
          <div id="profile-image-container"
            style="background-image: url('<?= $BASE_URL ?>img/users/<?= $userData->image ?>')"></div>

          <div class="form-group">
            <label for="image">Foto:</label>
            <input type="file" class="form-control-file" name="image">
          </div>

          <br>

          <div class="form-group">
            <label for="bio">Sobre você:</label>
            <textarea class="form-control" name="bio" id="bio" rows="5"
              placeholder="Conte quem você é, o que faz e onde trabalha..."><?= $userData->bio ?></textarea>
          </div>
        </div>
      </div>
    </form>


    <!-- Inicia uma seção para a alteração de senha, que também se comunica com process.php. Inclui campos para inserção da nova senha e confirmação. -->
    <!-- Div de alterar senha -->
    <div class="row" id="change-password-container">
      <div class="col-md-4">
        <br>

        <!-- Título -->
        <h2>Alterar a senha:</h2>

        <p class="page-description">Digite a nova senha e confirme para alterar sua senha:</p>

        <!-- Formjlário conectado na página de process.php -->
        <form action="<?= $BASE_URL ?>config/process.php" method="POST">
          <input type="hidden" name="type" value="changepassword">
          <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" id="passw" name="passw" placeholder="Digite a sua nova senha">
          </div>
          <div class="form-group">
            <label for="confirmpassword">Confirmação de senha:</label>
            <input type="password" class="form-control" id="confirmpassw" name="confirmpassw"
              placeholder="Confirme a sua nova senha">
          </div>
          <br>

          <!-- Botão de envio de informação -->
          <input type="submit" class="btn btn-success" value="Alterar Senha">
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<br>

<?php
require_once("templates/footer.php");
?>
