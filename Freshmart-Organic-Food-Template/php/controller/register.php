<?php
require_once("../model/Class/client.php");
session_start();
$client=new Client();
$_SESSION['email']="";
$_SESSION['motpass']="";
$_SESSION['id']="";


$client->nom=$_POST['first_name'];
$client->prenom=$_POST['last_name'];
$client->email=$_POST['email'];
$client->password=password_hash($_POST['password'],PASSWORD_BCRYPT);
$client->tel=$_POST['tel'];
$client->code=random_int(100, 1000000);
$email=$_POST['email'];
$pass=$_POST['password'];
if (password_verify($pass, $client->password)) {
$res=$client->getClientByData($email,$code);

}
$verif=$res->fetchColumn(0);

    if($verif!=0){
        header("location:../../user-login.php");
    }
    else{
        $client->ajouterClient();
        $_SESSION['email']=$email;
        $_SESSION['motpass']=$client->code;
       
        foreach ($id as $key => $value) {
            $_SESSION['id']=$value[0];
        }


        //print_r($_SESSION['id']);
        header("location:../../compte.php");
    }





?>