<?php
    include_once ('templates/header.php');
?>

<!-- Body com classe cody 2 para definição de tamanho na página -->
<body class="body2">

    <!-- Contaier do login -->
    <div class="login-container mt-5">

        <!-- Formulário de login -->
        <form action="<?= $BASE_URL ?>config/process.php" method="POST" class="form1">

        <!-- Título -->
            <h2>Login</h2>

            <!-- Input que define o tipo de serviço lá na modelagem de dados, possibilitando alternância de funcionamentos dos dados -->
            <input type="hidden" name="type" value="login">

            <!-- Email -->
            <label for="email" class="form-label">Email</label> 
            <input type="email" class="form-control "id="email" name="email" required>

            <!-- Senha -->
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control "id="passw" name="passw" required>
            <a href="index.php"><button class="botao1" type="submit">Login</button></a>
        </form>
        
    </div>

    
    <?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos de usuário e senha foram preenchidos
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        // Verifica se o usuário e a senha correspondem a um usuário fictício (substitua por seu próprio sistema de autenticação)
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === "usuario" && $password === "senha123") {
            echo "Login bem-sucedido!";
        } 
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}
?>
    <?php 
        include_once('templates/footer.php');
    ?>

