<?php
require_once("../model/Class/produit.php");
$prod=new Produit();
$prod->name=$_POST["name"];
$prod->prix=$_POST['prix'];
$prod->solde=$_POST["solde"];
$prod->description=$_POST['desc'];
$prod->categorie=$_POST['cat'];
$img=array();
foreach ($_FILES['image']['name'] as $key => $value) {
   
   array_push($img,$value);
     
  
   $target="../../img/product1/".basename($value);
   move_uploaded_file($_FILES['image']['tmp_name'][$key],$target);   
}

$prod->image=implode(",", $img);


$res=$prod->afficherProduitByName($_POST["name"]);
$n=$res->fetchColumn(0);
if($n==0 && (!empty($prod->name))){
 $prod->ajouterProduit()  ; 
}

header("location:../../gestionProduit.php");


?>