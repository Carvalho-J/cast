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
                    <h3 class="well">Create Product</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="createProduct.php">
                        <br class="control-group">
                        <div class="control-group">
                            <label class="control-label">Description</label>
                            <div class="controls">
                                <input size="50" class="form-control" name="description" type="text" placeholder="Insert product description"
                                id="description"  value="<?php echo !empty($description) ? $description : ''; ?>">
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Stock quantity</label>
                            <div class="controls">
                                <input size="15" class="form-control" name="quantity" type="number" placeholder="Insert product quantity"
                                value="<?php echo !empty($quantity) ? $quantity : ''; ?>">
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Price per unit</label>
                            <div class="controls">
                                <input size="50" class="form-control" name="pricePerUnit" type="number" placeholder="Insert product price per unit"
                                id="pricePerUnit"  value="<?php echo !empty($pricePerUnit) ? $pricePerUnit : ''; ?>" min="0">
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Maximum discount allowed per unit - % - (Max 15%)</label>
                            <div class="controls">
                                <input size="50" class="form-control" name="maxDiscountPerUnit" type="text" placeholder="Insert max discount allowed per unit"
                                id="maxDiscountPerUnit"  value="<?php echo !empty($maxDiscountPerUnit) ? $maxDiscountPerUnit : ''; ?>" min="0" max="15">
                            </div>
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
