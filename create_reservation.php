<?php

$mat_a_reserver = $_POST["matricule"];
 


require_once('class/reservation.php');
$res=new Reservation();
if(isset($_POST["submit"])){
   


    $dat_res=$_POST["mois"]."/".$_POST["jour"];
    $res->mat_res=$mat_a_reserver."_".$dat_res;
    $res->fullNameCl=$_POST["fullNameCl"];
    $res->emailCl=$_POST["emailCl"];
    $res->date_res=$dat_res;

     $res->insert_reservation();
     

    header('location:mess_conf_res.php'); }
    
