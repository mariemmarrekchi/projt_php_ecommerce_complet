<?php
session_start();

if(empty($_SESSION['whislist']))
{
$_SESSION['whislist']=array();	
$_SESSION['name']=array();
}
array_push($_SESSION['whislist'],$_GET['id']);
array_push($_SESSION['name'],$_GET['name']);

// foreach ($_SESSION['whislist'] as $key => $value) {
//    echo $value;
// }
header("location:../../whishlists.php");

?>