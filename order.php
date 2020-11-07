<?php
require 'database.php';

// get clients
$clientsList = [];
$pdo =  $pdo = Database::connect();

// get clients
$sqlClients = $pdo->query("SELECT * FROM clients");
    if ($sqlClients->rowCount() > 0){
        $clientsList = $sqlClients->fetchAll(PDO::FETCH_ASSOC);
    }else{
        $errorMessage = "Theres no client to show";
        return $errorMessage;
    }

// get produtcs
$productList = [];

$sqlProducts = $pdo->query("SELECT * FROM products");
    if ($sqlProducts->rowCount() > 0){
        $productList = $sqlProducts->fetchAll(PDO::FETCH_ASSOC);
    }else{
        $errorMessage = "Theres no products to show";
        return $errorMessage;
    }
    ?>

<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="_css.style.css"/>
    <link href="http://fonts.googleapis.com/css?family=Varela" rel="stylesheet" />
    <link href="default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <div>
       <div class="form-group">
            <label for="exampleFormControlSelect1">Select a client</label>
            <select name="client" class="form-control">
                <?php foreach ($clientsList as $client): ?>
                    <option value="<?php echo $client['id']?>"><?php echo $client['clientName'] ?> (<?php echo $client['cpf'] ?>)</option>
                <?php endforeach; ?>
            </select>
       </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select a client</label>
            <select name="client" class="form-control">
                <?php foreach ($productList as $product): ?>
                    <option value="<?php echo $product['id']?>"><?php echo $product['description'] ?> (<?php echo $product['pricePerUnit'] ?>)</option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="control-group ">
            <div class="form-actions">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="index.php" type="btn" class="btn btn-default">Return</a>
            </div>
        </div>
    </div>
</body>
</html>