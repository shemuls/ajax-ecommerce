<?php

use App\Controllers\ProductController;
include '../../../../vendor/autoload.php';


$product = new ProductController;
$id = $_POST['id'];
$status = $_POST['status'];

$product -> updateProductStatus($id, $status);