<?php

class Car {
    public $matricule;
    public $marque;
    public $puissance;


    public $prix;
    public $image;

    public function __construct() {}

    public function setMatricule($matricule) {
        $this->matricule = $matricule;
    }

    
    public function getMatricule() {
        return $this->matricule;
    }

   
    public function setMarque($marque) {
        $this->marque = $marque;
    }

    
    public function getMarque() {
        return $this->marque;
    }

   
    public function setPuissance($puissance) {
        $this->puissance = $puissance;
    }

    
    public function getPuissance() {
        return $this->puissance;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getImage() {
        return $this->image;
    }

  
    public function setPrix($prix) {
        $this->prix = $prix;
    }

   
    public function getPrix() {
        return $this->prix;
    }


    

    public function affichage() {
        foreach($this as $cle => $valeur)
            echo "$cle => $valeur \n<br>";
    }

    public function insert_car() {
        require_once('class\database.php');
        $cnx = new Connexion();
        $PDO = $cnx->CnxBase();

        $req = "insert into car (matricule,marque,puissance,prix,image) values ('$this->matricule','$this->marque',$this->puissance,$this->prix,'$this->image')";
        
        $PDO->exec($req);
    }

    public function list_car() {
        require_once('class\database.php');
        $cnx = new Connexion();
        $PDO = $cnx->CnxBase();

        $req = "select * FROM car" ;
        $res = $PDO->query($req)->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }

    public function modif_car() {
        require_once('class\database.php');
        $cnx = new Connexion();
        $PDO = $cnx->CnxBase();

        $req = "UPDATE car SET matricule='$this->matricule',marque='$this->marque',puissance='$this->matricule',prix='$this->prix',image='$this->image' WHERE id=$this->matricule";
        $PDO->exec($req);
    }

    public function sup_car($matricule) {
        require_once('class\database.php');
        $cnx = new Connexion();
        $PDO = $cnx->CnxBase();

        $req = "DELETE FROM car WHERE matricule='$matricule'" ;
        $res = $PDO->exec($req);
        
    }
    public function getImageByMatricule($matricule) {
        require_once('class/database.php');
        $cnx = new Connexion();
        $PDO = $cnx->CnxBase();

        $req = "SELECT image FROM car WHERE matricule='$matricule'";
        $res = $PDO->query($req)->fetch(PDO::FETCH_OBJ);
        return $res ;
    }
}
?>
