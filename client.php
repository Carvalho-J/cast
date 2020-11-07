<!DOCTYPE html>
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
    <div class="container">
        <div clas="span10 offset1">
            <div class="card">
                <div class="card-header">
                    <h3 class="well">Create Client</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="createClient.php">
                    <br class="control-group">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <input size="50" class="form-control" name="clientName" type="text" placeholder="Insert Name"
                            id="clientName"  value="<?php echo !empty($clientName) ? $clientName : ''; ?>">
                        </div>
                        <div class="control-group ">
                            <label class="control-label">CPF</label>
                            <div class="controls">
                                <input size="15" class="form-control" name="cpf" type="text" placeholder="cpf"
                                       value="<?php echo !empty($cpf) ? $cpf : ''; ?>">
                            </div>
                        </div>
                        <div class="controls">
                            <label class="control-label">Gender</label>
                            <div class="form-check">
                                <p class="form-check-label">
                                    <input class="form-check-input" type="radio" name="gender" id="male"
                                           value="M" <?php isset($_POST["gender"]) && $_POST["gender"] == "M" ? "checked" : null; ?>/>
                                    <label for="male">Male</label></p>
                                <p class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender" id="female"
                                       value="F" <?php isset($_POST["gender"]) && $_POST["gender"] == "F" ? "checked" : null; ?>/>
                                    <label for="female">Female</label></p>
                                <p class="form-check-label">
                                    <input class="form-check-input" type="radio" name="gender" id="other"
                                           value="O" <?php isset($_POST["gender"]) && $_POST["gender"] == "O" ? "checked" : null; ?>/>
                                    <label for="other">Other</label></p>
                            </div>
                        </div>
                        <label class="control-label">Address</label>
                        <div class="controls">
                            <input size="50" class="form-control" name="address" type="text" placeholder="Insert Address"
                                   id="address"  value="<?php echo !empty($address) ? $address : ''; ?>">
                        </div>
                        </br>
                        <div class="control-group ">
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Save</button>
                                <a href="index.php" type="btn" class="btn btn-default">Return</a>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
</body>
</html>
