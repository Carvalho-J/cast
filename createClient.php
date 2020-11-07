<?php

require 'database.php';

$clientName = filter_input(INPUT_POST, 'clientName');
$cpf        = filter_input(INPUT_POST, 'cpf');
$gender     = filter_input(INPUT_POST, 'gender');
$address    = filter_input(INPUT_POST, 'address');

//if($name && $cpf && $email && $gender && $address) {
//    echo 'ok';
//
//
//} else {
//    header("Location: client.php");
//    exit;
//}

if($clientName && $cpf && $gender && $address) {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare("INSERT INTO clients (clientName, cpf, gender, address) VALUES (:clientName, :cpf, :gender, :address)");
    $sql->bindValue(':clientName', $clientName);
    $sql->bindValue(':cpf', $cpf);
    $sql->bindValue(':gender', $gender);
    $sql->bindValue(':address', $address);
    $sql->execute();
    header("Location: client.php");
}else{
    header("Location: client.php");
}


