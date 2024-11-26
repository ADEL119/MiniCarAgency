<?php
include 'header.php';
require('class/database.php');
if(isset($_POST["submit"])){

    
$cnx = new Connexion();
$PDO = $cnx->CnxBase();
$req = "select * from administrateur";
$res = $PDO->query($req)->fetch(PDO::FETCH_OBJ);


$entred_id=$_POST["id"];
$entred_password=$_POST["password"];

$correct_id=$res->password;
$correct_password=$res->Id;


if($entred_id==$correct_id && $entred_password==$correct_password){
    header("Location: admin_all_cars.php");
    exit();
    
} 
else {
    
    echo "<script>alert('Identifiant ou mot de passe incorrect');</script>";
}
}


  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Administrateur</title>
    <style>
        .login-container {
            width: 300px;
            margin: 0 auto;
            padding-top: 50px;
        }
        .login-container img {
            display: block;
            margin: 0 auto;
            width: 200px;
            height: auto;
        }
        .login-form input {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            box-sizing: border-box;
        }
        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="admin.png" alt="Logo" />
        <form class="login-form" action="admin_connexion.php" method="post">
            <input type="text" name="id" placeholder="Identifiant" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <button type="submit"  name="submit">Se connecter</button>
        </form>
    </div>
    <br/>
</body>
</html>
<?php include "footer.php";?>
