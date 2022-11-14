<?php

session_start();
$key = array_search($_GET['id'], $_SESSION['cart']); //recherche la raference et attribue son rang dans le tableau a $key
$key2 = array_search($_GET['prix'],$_SESSION['prix']); 
 
array_splice($_SESSION['cart'], $key, 1);
array_splice($_SESSION['prix'], $key2, 1);
header("location:../../product-cart.php");

?>