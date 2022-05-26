<?php

require_once 'modele/cnx.php';
class eleve extends cnx {

    public function geteleve($cne=null) {
        if(!$cne){  $sql = "SELECT * FROM eleves";
            $eleves= $this->executerRequete($sql,null);
            return $eleves;
        }
        else {
            $sql = "SELECT * FROM eleves WHERE CNE= $cne";
            $eleves= $this->executerRequete($sql,array($cne));
            return $eleves;
        }

      
    }
    public function ajoutereleve($nom,$prenom,$cne,$adresse,$ville,$email,$photo) {
        $sql ="INSERT INTO eleves (Nom,Prenom,CNE,Adresse,Ville,email,photo) 
        VALUES (?,?,?,?,?,?,?);";
        $this->executerRequete($sql, array($nom,$prenom,$cne,$adresse,$ville,$email,$photo));
    }
}
?>