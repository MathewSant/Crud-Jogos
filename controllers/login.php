<?php 

include 'config.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$fp = fopen(USERS_DB, 'r');

$data = [];

while (($row = fgetcsv($fp)) !== false) {
    $data[] = $row;
}

$login_sucesso = false;

foreach ($data as $row) {
    if (trim($row[1]) === trim($email) && trim($row[2]) === trim($senha)) {
        $login_sucesso = true;
        break;
    }
}

if ($login_sucesso) {
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['auth'] = true;
    header("location: ../view/home.php");
} else {
   header("location: ../view/login.php?err=Email ou senha erradas");
}
