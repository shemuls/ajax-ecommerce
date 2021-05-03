<?php

use App\Controllers\ProductController;
include '../../../../vendor/autoload.php';


$product = new ProductController;

$product -> deleteProduct($_POST['id']);