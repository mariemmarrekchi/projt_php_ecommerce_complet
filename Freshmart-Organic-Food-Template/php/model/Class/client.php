<?php
class Client 
{
    public $id;
    public $nom;
    public $prenom;
    public $email;
    public $password;
    public $tel;
    public $code;


    public function __construct(){

    }
    public function ajouterClient(){
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="insert into client values(NULL,'$this->nom','$this->prenom','$this->email','$this->password','$this->tel','$this->code')";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    } 
    
    public function afficherClient(){
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');
        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select * from client";
        $res=$pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }
    public function afficherClientById($id){
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select * from client where id='$id' ";
        $res=$pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }
  
    public function getClientByData($email,$code){
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select * from client where email='$email'  and code='$code' ";
        $res=$pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }
    public function delete($id){
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="delete from client where id='$id' ";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }
    public function update($id){
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="update client set nom='$this->nom',prenom='$this->prenom',email='$this->email',motpass='$this->motpass',tel='$this->tel' where id='$id' ";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }

    public function getDataClient($email){
        require_once('C:\xampp\htdocs\projet\Freshmart-Organic-Food-Template\php\Model\Config\config.php');

        $cnx=new connexion();
        $pdo=$cnx->CnxDB();
        $req="select * from client where email='$email'";
        $res=$pdo->query($req) or print_r($pdo->errorInfo());
        return $res;
    }
} 
?>