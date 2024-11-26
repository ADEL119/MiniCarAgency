<?php
class Connexion
{
public function CNXbase(){
try{
$dbc=new PDO('mysql:host=localhost;dbname=agence_voiture','root','');
return $dbc;
}
catch (PDOException $e ) {
echo "Connection à MySQL impossible : ", $e->getMessage();
exit();
}
}
}
?>
