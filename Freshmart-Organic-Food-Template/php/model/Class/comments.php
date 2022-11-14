<?php
class Comments 
{
    public $id;
    public $id_client ;
    public $commntaire;
    public $accept;
    


    public function __construct(){

    }
    public function ajouterCommenter(){
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="insert into comments values(NULL,'$this->commntaire','$this->id_client','0')";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    } 
    
    public function afficherCommentaire(){
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');
        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select comments.id ,nom,prenom ,commentaire,accept from client, comments where client.id=comments.id_client";
        $res=$pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }
    public function afficherNomClientBycommentaire() {
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');
        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select nom,prenom ,commentaire from client, comments where client.id=comments.id_client and comments.accept=1 ";
        $res=$pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }

    public function modifierAccept($id) {
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');
        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="update comments set accept='$this->accept ' where id='$id' ";
        $res=$pdo->exec($req) or print_r($pdo->errorInfo());
        
    }
    
} 
?>