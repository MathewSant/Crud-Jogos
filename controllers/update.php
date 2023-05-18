<?php

if(isset($_POST['nome']) && isset($_POST['desenvolvedor']) && isset($_POST['gender']) && isset($_POST["platform"]) && isset($_POST["classification"])) {

  $fp = fopen('jogos.csv', 'r');
  
  $temp = tempnam('.', '');
  $tempFile = fopen($temp, 'w');

  while (($row = fgetcsv($fp)) !== FALSE) {
    if (isset($_POST['nome']) && isset($_POST['desenvolvedor']) && isset($_POST['gender']) && isset($_POST["platform"]) && isset($_POST["classification"])) {

      $row[0] = $_POST['nome'];
      $row[1] = $_POST['desenvolvedor'];
      $row[2] = $_POST['gender'];
      $row[3] = $_POST['platform'];
      $row[4] = $_POST['classification'];
    }
    fputcsv($tempFile, $row);
  }

  fclose($fp);
  fclose($tempFile);
  rename($temp, 'jogos.csv');

  header("Location: ../view/home.php");
} else {
  echo "Os dados não estão sendo enviados";
}


?>
