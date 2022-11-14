<?php

    require_once("../model/Class/client.php");
    session_start();
    $client=new Client();
    $email=$_POST["email"];
    $motpass=$_POST['password'];
    $code=$_POST['code'];
    $res=$client->getClientByData($email,$code);
    $_SESSION['email']="";
    $_SESSION['motpass']="";
   
    
    $verif=$res->fetchColumn(0);
    if($verif==0){
?>
 <img src="../../img/att.gif" alt="denied service" />
 <a href="../../user-register.php"> <button> Retour </button></a>
<?php
    }
    else{
        $_SESSION['email']=$email;
	    $_SESSION['motpass']=$code;
       
        //print_r( $_SESSION['email']);
        header("location:../../compte.php");
    }

?>