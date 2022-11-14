<?php
session_start();
require_once("../model/Class/comments.php");
$com=new Comments();
$com->accept=$_POST['accept'];
$com->modifierAccept($_POST['id']);
header("location:../../gestionComments.php");



?>