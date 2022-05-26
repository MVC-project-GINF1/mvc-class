<?php

require_once 'modele/cnx.php';
require_once 'modele/eleve.php';

class compte extends cnx {
    public function ajoutercompte($pass,$user_name,$cne) {
$res=geteleve($cne);
if ($res->rowCount() > 0)
     $row=$res->fetch(); 
     $id= $row['ID_eleve']; 
     $sql = "INSERT INTO comptes(ID,user,passwd) VALUES (?,?,? );";
     $this->executerRequete($sql, array($id, $user_name , $pass));
else
    throw new Exception("$user_name est inexistant !!!!!!!!!!!! ");
    }
public function getcompte ($id){
    $sql = "SELECT * FROM comptes WHERE ID = ? ";
    $comptes= $this->executerRequete($sql,array($id));
    return $comptes;
}


}