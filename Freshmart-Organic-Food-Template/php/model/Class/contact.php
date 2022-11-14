<?php
class contact 
{
    public $email;
    public $message ;
    public $subject;
    public function __construct(){

    }
    public function ajouterContact(){
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\model\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="insert into contact values(NULL,'$this->email','$this->subject','$this->message')";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    } 
    public function afficher(){
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\model\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select * from contact";
        $res=$pdo->query($req) or print_r($pdo->errorInfo());
        return  $res;
    } 
    
} 
?>