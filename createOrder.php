<?php

require 'database.php';

$clientId    = filter_input(INPUT_POST, 'clientId');
$productId   = filter_input(INPUT_POST, 'productId');
$quantity    = filter_input(INPUT_POST, 'quantity');