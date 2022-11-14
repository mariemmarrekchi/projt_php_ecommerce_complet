<?php
class admin{
   

    public function  __construct(){
}

public function verifAdmin($login,$pass){
    require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');
    $cnx=new connexion();
    $pdo=$cnx->CnxDB();
    $req="select count(*) from admin where login='$login'  and pass='$pass'";
    $res=$pdo->query($req) or  print_r($pdo->errorInfo());
    return $res;

}

public function destruction(){
    session_destroy();
}

}
?>