<?php require_once '../libs/functions.php' ?>
<?php 
if(!isset($_GET['id'])) redirect(getAdminUrl('categories/indexProduct.php'));

$id = $_GET['id'];
$sql = "delete from products where id = " . $id;

$pdo->exec($sql);

redirect(getAdminUrl('categories/indexProduct.php'));
?>