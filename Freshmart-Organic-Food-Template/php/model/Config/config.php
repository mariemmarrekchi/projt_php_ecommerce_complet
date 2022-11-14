<?php
class connexion{
    public function CnxDB(){
        $user="root";
        $conx=new PDO("mysql:host=localhost;dbname=achats",$user,"");
        return $conx;
    }
}

?>