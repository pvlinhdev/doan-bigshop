<?php

session_start();
include_once 'mysql.php';
// Categories
function getAllCategories() {
    $sql = "select * from categories";
    global $pdo;
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query;
}
//product
function getAllProduct() {
    $sql = "select * from products";
    global $pdo;
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query;
}

function deleteCategory($id) {

}

function updateCategory($id) {

}

function getCategory($id) {
    $sql = "select * from categories where id=? LIMIT 1";
    global $pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    return $stmt->fetch();
}

/**
 * Helpers
 */
function increment(&$i = 1) {
    $i++;
    return $i;
}

/**
 * Url helpers
 */
function getAdminUrl($url) {
    return 'http://localhost:81/bigshop/admin/' . $url;
}

function redirect($url) {
    header("Location: $url");
    die();
}
?>