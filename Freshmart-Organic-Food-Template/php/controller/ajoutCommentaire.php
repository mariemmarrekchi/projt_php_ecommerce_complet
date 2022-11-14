<?php

session_start();
require_once("../model/Class/comments.php");
$com=new Comments();
$com->id_client=$_POST['id'];
$com->commntaire=$_POST['commentaire'];
$com->ajouterCommenter();

header("location:../../commentaire.php");


?>