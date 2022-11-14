<?php
require_once("../model/Class/produit.php");
$prod=new Produit();
$prod->delete($_GET['id']);
header("location:../../gestionProduit.php");

?>