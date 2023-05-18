<?php 

include 'config.php';

$nome = $_POST['nome'];
$desenvolvedor = $_POST['desenvolvedor'];
$gender = $_POST['gender'];
$platform = $_POST['platform'];
$classification = $_POST['classification'];

$fpGames = fopen(REFEICOES_DB, 'a');

fputcsv($fpGames, [$nome, $desenvolvedor, $gender, $platform,$classification]);

header("location: ../view/home.php");
exit(); 
?>