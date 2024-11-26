<?php

class Reservation {
    public $mat_res;
    public $fullNameCl;
    public $emailCl;
    public $date_res;

    public function __construct() {}

    // Getters
    public function getMatRes() {
        return $this->mat_res;
    }

    public function getFullNameCl() {
        return $this->fullNameCl;
    }

    public function getEmailCl() {
        return $this->emailCl;
    }

    public function getDateRes() {
        return $this->date_res;
    }

    // Setters
    public function setMatRes($mat_res) {
        $this->mat_res = $mat_res;
    }

    public function setFullNameCl($fullNameCl) {
        $this->fullNameCl = $fullNameCl;
    }

    public function setEmailCl($emailCl) {
        $this->emailCl = $emailCl;
    }

    public function setDateRes($date_res) {
        $this->date_res = $date_res;
    }
    public function insert_reservation() {
        require_once('class\database.php');
        $cnx = new Connexion();
        $PDO = $cnx->CnxBase();

        $req = "insert into reservation(mat_res,fullNameCl,emailCl,date_res) values('$this->mat_res','$this->fullNameCl','$this->emailCl','$this->date_res')";
        $PDO->exec($req);
    }
}
?>
