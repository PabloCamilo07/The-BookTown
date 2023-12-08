<?php
// Inclui o cabeçalho da página
include_once("templates/header.php");
?>

<!-- CONTAINER DE POSICIONAMENTO COM ID -->
<div class="container col-12 col-md-9 col-sm-6 mb-5" id="register-container">

    <!-- Linha -->
    <div class="row gx-5">

        <!-- Coluna geral com as duas partes do container -->
        <div class="col-md-6 cadastro">

            <!-- Título com ícone de pessoa -->
            <h2><i class="bi bi-person-fill"></i>Faça seu cadastro</h2>

            <!-- Container com as duas partes, o formulário e a imagem -->
            <div class="d-flex" style="gap:100px;">

            <!-- Formulário -->
                <form id="create-form" class="col-sm-6" action="<?= $BASE_URL ?>config/process.php" method="POST">
                    <!-- Campo oculto para indicar o tipo de operação (criação de usuário) -->
                    <input type="hidden" name="type" value="register">
                    <div class="form-group">
                        <!-- Campo para inserir o nome -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Campo para inserir o sobrenome -->
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Sobrenome</label>
                            <input type="text" class="form-control" id="lastname" name="lastname"
                                placeholder="Digite seu sobrenome">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Campo para inserir o email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="exemplo@email.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Campo para a senha -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="passw" name="passw"
                                placeholder="Digite sua senha">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Campo para confirmação da senha -->
                        <div class="mb-3">
                            <label for="confirmpassword" class="form-label">Confirmação de senha</label>
                            <input type="password" class="form-control" id="confirmpassw" name="confirmpassw"
                                placeholder="Confirme sua senha">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check mb-2">
                            <input class="form-check-input border border-success" type="checkbox" value="" id="agree-term">
                            <label class="form-check-label" for="agree-term">
                                Concordo com os <a href="#" class="link-danger">termos de serviço</a>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input border border-success" type="checkbox" value="" id="newsletter"
                                checked>
                            <label class="form-check-label" for="newsletter">
                                Aceito receber mais notícias informações
                            </label>
                        </div>
                    </div>
                    <!-- Botões para cadastrar o cliente ou voltar à página principal -->
                    <div class="d-flex justify-content-start">
                        <!-- Botão para submeter o formulário e cadastrar o cliente -->
                        <input type="submit" class="btn btn-outline-success m-4" value="Registrar">
                        <!-- Botão para voltar à página principal sem cadastrar o cliente -->
                        <a class="btn btn-outline-success m-4" href="<?= $BASE_URL ?>index.php" role="button">Voltar</a>
                    </div>
                </form>

                <!-- Coluna com imagem da TheBooktown e link para página de login -->
                <div class="col-md-12 mt-5 img-cadastro">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <img src="img/lendo.png" alt="Tela de cadastro" style="width:300px;height:300px;" class="img-fluid text-center">
                        </div>
                        <div class="col-12" id="link-container">
                            <a href="<?= $BASE_URL ?>login.php" class="link-danger text-center"><i class="bi bi-check-circle-fill"></i>
                                Eu já tenho uma conta</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<!-- Inclusão de arquivo footer.php -->
<?php
include_once("templates/footer.php");
?>