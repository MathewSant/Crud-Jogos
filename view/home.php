<?php 

require('../controllers/secure.php');

// include 'config.csv';

// session_start();

$email = $_SESSION['email'];
// $nome = $_SESSION['nome'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/styleHome.css">
</head>
<body>
    <div class="container">
        <div class="quelafé">
    <h2>Jogos</h2>
    <form action="../controllers/addRefeicoes.php" method="POST">
        <input type="text" name="nome" placeholder="Nome" id="nome">
        <select name="desenvolvedor" id="">
            <option value="Front-end">Front-End</option>
            <option value="Back-end">Back-End</option>
            <option value="DevOps">DevOps</option>
            <option value="Mobile">Mobile</option>
        </select>       
         <select name="gender" id="">
            <option value=""  disabled selected>Escolha o gênero do jogo</option>
            <option value="Ação">Ação</option>
            <option value="Aventura">Aventura</option>
            <option value="Estrategia">Estratégia</option>
        </select>
        <select name="platform" id="">
            <option value=""  disabled selected>Escolha a plataforma</option>
            <option value="Computador">Computador</option>
            <option value="Xbox">Xbox</option>
            <option value="PlayStation">PlayStation</option>
        </select>
        <input type="number" name="classification" placeholder="Classificação">

        <button class="submit" type="submit">Enviar</button>
    </form>
    <table>
        <tr>
            <th>Nome</th>
            <th>Desenvolvedor</th>
            <th>Gênero</th>
            <th>Plataforma</th>
            <th>Classificação</th>
        </tr>
        <?php $fpRefeicoes = fopen('../controllers/jogos.csv', 'r'); ?>
        <?php while (($row = fgetcsv($fpRefeicoes)) !== false): ?>
        <tr>
            <td><?= $row[0] ?></td>
            <td><?= $row[1] ?></td>
            <td><?= $row[2] ?> </td>
            <td><?= $row[3] ?></td>
            <td><?= $row[4] ?></td>
            <td><a href="../controllers/delete.php?nome=<?= $row[0] ?>">Deletar</a></td>
            <td><a href="../view/update.php?nome=<?= $row[0] ?>">Editar</a></td>
        </tr>

        <?php endwhile ?>
    </table>
    </div>
    </div>
</body>
</html>