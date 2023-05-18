<?php 

// $nome = $_SESSION['nome'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Alimentação</title>
</head>

<body>
    <h1>Login</h1>
    <form action="../controllers/login.php" method="post">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Entrar</button>
        <?php if (isset($_GET['err'])): ?>
            <div style="color: red;"><?= $_GET['err'] ?></div>
        <?php endif ?>
        <!-- <?= $nome ?> -->
    </form>
</body>
</html>