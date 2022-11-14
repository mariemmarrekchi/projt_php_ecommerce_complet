<?php

require_once("../model/Class/admin.php");
session_start();
$adm=new admin();
$login=$_POST['login'];
$password=$_POST['password'];

// $password=crypt($_POST['password']);
//$hash=password_hash($password,PASSWORD_BCRYPT);
$res=$adm->verifAdmin($login,$password);
$n=$res->fetchColumn(0);
if($n==0){
   ?>
   <img src="../../img/denied.png" alt="denied service"/>
  
   <?php 
    
}
else{
    $_SESSION['login']=$login;
    $_SESSION['pass']=$password;
    header('location:../../adminwork.php');
}
?>