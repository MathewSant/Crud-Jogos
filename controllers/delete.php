<?php 

$nome = $_GET['nome'];

$tempFile = tempnam(".","");
$fpTemp = fopen($tempFile, 'w');

$fpOrigin = fopen('jogos.csv', 'r');

while (($row = fgetcsv($fpOrigin)) !== false) {
    if ($row[0] != $nome) {
        fputcsv($fpTemp, $row);
    }
}

fclose($fpOrigin);
fclose($fpTemp);

rename($tempFile, "jogos.csv");
header("location: ../view/home.php");


?>