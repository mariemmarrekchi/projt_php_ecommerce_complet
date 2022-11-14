<?php

require_once('../model/Class/contact.php');
$con=new contact();
$con->email=$_POST['email'];
$con->subject=$_POST['subject'];
$con->message=$_POST['content'];
// if(!(empty($email) && empty($subject) && empty($message))  ){
    //if(filter_var($email,FILTER_VALIDATE_EMAIL)){   
        $con->ajouterContact();
        header("location:../../page-contact.php");  
   // }
        
// }

?>