<?php
include 'header.php';
require_once('class/reservation.php');
$res=new Reservation();

 $mat_a_reserver = $_GET["matricule"];

$image = $_GET["image"];
echo "<img src=' $image.jpg ' style='width: 600px; height: 300px;' class='img-fluid' alt='...'>";

/*if(isset($_POST["submit"])){
  $res->mat_res=$mat_a_reserver;
  $res->fullNameCl=$_POST["fullNameCl"];
  $res->emailCl=$_POST["emailCl"];
   $res->insert_reservation();  
  header('location:main_page.php'); }*/
  
  
?>


<h2>Réservation</h2>
    <form action="create_reservation.php" method="post">
    
        <label for="fullNameCl">Full Name :</label>
        <input type="text" id="fullNameCl" name="fullNameCl" required><br><br>
        <input type="hidden" name="matricule" id="matricule" value="<?php echo '$mat_a_reserver';?>">

        <label for="emailCl">Email :</label>
        <input type="email" id="emailCl" name="emailCl" required><br><br>

        <label for="jour">Jour :</label>
        <select id="jour" name="jour" required>
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select><br><br>

        <label for="mois">Mois :</label>
        <select id="mois" name="mois" required>
            <option value="1">Janvier</option>
            <option value="2">Février</option>
            <option value="3">Mars</option>
            <option value="4">Avril</option>
            <option value="5">Mai</option>
            <option value="6">Juin</option>
            <option value="7">Juillet</option>
            <option value="8">Août</option>
            <option value="9">Septembre</option>
            <option value="10">Octobre</option>
            <option value="11">Novembre</option>
            <option value="12">Décembre</option>
        </select><br><br>
        
        <button type="submit" class="btn btn-primary" name="submit">Reserver</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
    </form>
