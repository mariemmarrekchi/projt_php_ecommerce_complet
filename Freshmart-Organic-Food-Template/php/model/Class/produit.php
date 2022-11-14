<?php
class Produit 
{
    public $id;
    public $prix;
    public $solde;
    public $description;
    public $image;
    public $categorie;
    public $name;


    public function __construct(){

    }
    public function ajouterProduit(){
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="insert into produit values(NULL,'$this->prix','$this->solde','$this->description','$this->image','$this->categorie','$this->name')";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    } 
    
    public function afficherProduit(){
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');
        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select * from produit";
        $res=$pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }
    public function afficherProduitById($id){
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select * from produit where id='$id' ";
        $res=$pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }

    public function afficherProduitByName($name){
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select * from produit where name='$name' ";
        $res=$pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
        
    }

    public function afficherProduitFruit(){
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select * from produit where categorie='fruits' ";
        $res=$pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }
    public function afficherProduitByLimit($debut,$nb){
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select * from produit limit ".$debut.','.$nb;
        $res=$pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }
    public function afficherProduitVegetal(){
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select * from produit where categorie='vegtables' ";
        $res=$pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }

    public function afficherProduitJuice(){
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select * from produit where categorie='juice' ";
       $res= $pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }

    public function delete($id){
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="delete from produit where id='$id' ";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }
    public function update($id){
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="update produit set prix='$this->prix',name='$this->name',solde='$this->solde',description='$this->description',image='$this->image',categorie='$this->categorie' where id='$id' ";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }

    public function ajoutepanier($ch)
	{
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');
        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select * from produit where id in('$ch')";
        $res=$pdo->query($req)or print_r($pdo->errorInfo());
        return $res;
	}
    public function verifpanier($ch)
	{
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');
        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select id from produit where id in ('$ch')";
        $res=$pdo->query($req)or print_r($pdo->errorInfo());
        return $res;
	}

} 
?>