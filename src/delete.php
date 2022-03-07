<?php
require('classes/DB.php');
$id= $_POST['id_pro'];
$sql = DB::getInstance()->prepare("DELETE FROM product WHERE id = $id");
$gd =$sql->execute();
$fg  =$sql -> setFetchMode(PDO::FETCH_ASSOC);
header('location:products.php');
  
  
?>