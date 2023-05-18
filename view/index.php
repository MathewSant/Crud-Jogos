<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Alimentação</title>
</head>

<body>
    <h1>Cadastro</h1>
    <form action="../controllers/add.php" method="post">
        <input type="text" name="nomeUsuario" placeholder="Nome de usuário" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Cadastrar</button>
    </form>
    <?php if (isset($_GET['errUser'])) : ?>
        <div style="color: red;"><strong><?=$_GET['errUser']?></strong> já existe, use outro</div>
    <?php endif ?>
    <?php if (isset($_GET['errEmail'])) : ?>
        <div style="color: red;"><strong><?=$_GET['errEmail']?></strong> já existe, use outro</div>
    <?php endif ?>
</body>
</html>