<?php require_once '../libs/functions.php' ?>

<?php 
if(!isset($_GET['id'])) redirect(getAdminUrl('indexCreate.php'));

$id = $_GET['id'];
$sql = "delete from categories where id = " . $id;

$pdo->exec($sql);

redirect(getAdminUrl('categories/indexCreate.php'));
?>




