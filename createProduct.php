<?php


require 'database.php';

$description = filter_input(INPUT_POST, 'description');
$quantity = filter_input(INPUT_POST, 'quantity');
$pricePerUnit = filter_input(INPUT_POST, 'pricePerUnit');
$maxDiscountPerUnit = filter_input(INPUT_POST, 'maxDiscountPerUnit');


if($description && $quantity && $pricePerUnit && $maxDiscountPerUnit):
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = $pdo->prepare("INSERT INTO products (description, quantity, pricePerUnit, maxDiscountPerUnit) VALUES (:description, :quantity, :pricePerUnit, :maxDiscountPerUnit)");
    $sql->bindValue(':description', $description);
    $sql->bindValue(':quantity', $quantity);
    $sql->bindValue(':pricePerUnit', $pricePerUnit);
    $sql->bindValue(':maxDiscountPerUnit', $maxDiscountPerUnit);
    $sql->execute();
    header("Location: product.php?status=saved");
else:
    header("Location: product.php?status=error");
endif;