<?php
session_start();

if(empty($_POST['product_name']) || 
   empty($_POST['product_price']) || 
   empty($_POST['user_name'])){
    header('location: ./product.php');
    exit;
}

$user_name = $_POST['product_name'];
$product_name = $_POST['product_name'];
$product_price = intval($_POST['product_price']);

if($product_price < 1){
    header('location: ./product.php');
    exit;
}

//echo $product_name . ' ' . $product_price;

$newProduct = array(
    'name' => $product_name,
    'price' => $product_price,
    'user' => $user_name,
);

$_SESSION['numberOfProduct'] = 0;

$_SESSION['products'][] = $newProduct;

header('Location: ./product.php?nom='.$user_name.'');

?>