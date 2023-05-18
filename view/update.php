<?php
require('../controllers/secure.php');
$fpRefeicoes = fopen('../controllers/jogos.csv', 'r');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../styles/styleHome.css"> -->
</head>
<body>
    
    <h1>Edite</h1>
  
    <form action="../controllers/update.php" method="post">
    <?php while (($row = fgetcsv($fpRefeicoes)) !== false): ?>
        <input type="text" name="nome" value="<?= $row[0] ?>" placeholder="Nome">
        <select name="desenvolvedor" id="">
            <option value="Back-end" <?= $row[1] === 'Back-end' ? 'selected' : '' ?>>Back-End</option>
            <option value="Front-end" <?= $row[1] === 'Front-end' ? 'selected' : '' ?>>Front-End</option>
            <option value="DevOps" <?= $row[1] === 'DevOps' ? 'selected' : '' ?>>DevOps</option>
            <option value="Mobile" <?= $row[1] === 'Mobile' ? 'selected' : '' ?>>Mobile</option>
        </select>       
        <select name="gender" id="">
            <option value=""></option>
            <option value="Ação" <?= $row[2] === 'Ação' ? 'selected' : '' ?>>Ação</option>
            <option value="Aventura" <?= $row[2] === 'Aventura' ? 'selected' : '' ?>>Aventura</option>
            <option value="Estratégia" <?= $row[2] === 'Estratégia' ? 'selected' : '' ?>>Estratégia</option>
        </select>
        <select name="platform" id="">
            <option value=""></option>
            <option value="Computador" <?= $row[3] === 'Computador' ? 'selected' : '' ?>>Computador</option>
            <option value="Xbox" <?= $row[3] === 'Xbox' ? 'selected' : '' ?>>Xbox</option>
            <option value="PlayStation" <?= $row[3] === 'PlayStation' ? 'selected' : '' ?>>PlayStation</option>
        </select>
        <input type="number" name="classification" value="<?= $row[4] ?>" placeholder="Classificação">
        <button type="submit">Atualizar</button>
    <?php endwhile; ?>
    </form>

    <table border="1px solid black">
        <tr>
            <th>Nome</th>
            <th>Desenvolvedor</th>
            <th>Gênero</th>
            <th>Plataforma</th>
            <th>Classificação</th>
        </tr>
        <?php rewind($fpRefeicoes); // Voltar ao início do arquivo ?>
        <?php while (($row = fgetcsv($fpRefeicoes)) !== false): ?>
            <tr>
                <td><?= $row[0] ?></td>
                <td><?= $row[1] ?></td>
                <td><?= $row[2] ?> </td>
                <td><?= $row[3] ?></td>
                <td><?= $row[4] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>