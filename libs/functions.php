<?php
session_start();
include_once 'mysql.php';

function getAllProducts() {
    $sql = "select * from products";
    global $pdo;
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query;
}

function getProduct($id) {
    $sql = "select * from products where id=? LIMIT 1";
    global $pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function getProductsByCategory($categoryId){
    $sql = "select * from products where categories=$categoryId";
    global $pdo;
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query;
}

function getProductsByName($name){
    $sql = "select * from products where name like '%" . $name ."%'";
    global $pdo;
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query;
}
function create_order($productId, $name, $image, $price, $quantity) {
    if(isset($_SESSION['cart'])){
        $cart = $_SESSION['cart'];
    }else{
        $cart = array();  
    }

    $productExists = false;

    foreach($cart as $key => $value){
        if($productId == $value['productId']){
            $value['quantity'] = $value['quantity'] + $quantity;
            $cart[$key] = $value;
            $productExists = true;
            break;
        }
    }

    if(!$productExists) {
        $product = array(
            'productId' => $productId,
            'name' => $name,
            'image' => $image,
            'price' => $price,
            'quantity' => $quantity,
        );
    
        $cart[] = $product;
    }
   
    $_SESSION['cart'] = $cart;
}

// function order($productId, $name, $image, $price, $quantity) {
//     if(isset($_SESSION['cart'])){
//         $cart = $_SESSION['cart'];
//     }else{
//         $cart = array();
//     }
    
//     $product = array(
//         'productId' => $productId,
//         'name' => $name,
//         'image' => $image,
//         'price' => $price,
//         'quantity' => $quantity,
//     );

//     $cart[] = $product;
//     $_SESSION['cart'] = $cart;
// }

function getOrdersBySession() {
    if(isset($_SESSION['cart'])){
        $cart = $_SESSION['cart'];
    }else{
        $cart = array();
    }
    return $cart;
}
// Redirect page
function redirect($url) {
    header("Location: $url");
    die();
}
/**
 * Helpers
 */
function calc_product_price($product) {
    $sum = $product['quantity'] * $product['price'];
    return number_format($sum);
}

