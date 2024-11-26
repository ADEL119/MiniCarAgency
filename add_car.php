

<?php
include 'header.php';
require('class\car.php');
$car=new Car();
if(isset($_POST["submit"])){
$car->matricule=$_POST["matricule"];
$car->marque=$_POST["marque"];
$car->puissance=$_POST["puissance"];
$car->prix=$_POST["prix"];
$car->image=$_POST["image"];
$car->insert_car();
header('location:admin_all_cars.php');
/*$row=$pr-> rech_produit($pr->nom);
$n= $row->fetchColumn(0) ; // fetchColumn(0) retourne la valeur //relative à la
première colonne (n° 0) ou FALSE s'il n'y a plus de ligne.
if($n==0) { $pr->insert_produit();
header('location:liste_produits.php'); }
else { echo "article existe déjà "; }*/
}
?>
<form method='post' action = 'add_car.php'>
<h2 class="text-center">Add New Car</h2>
<div class='row'>
<div class="col">
<label for="Matricule" class="form-label">Matricule</label>
<input type="number" class="form-control" name="matricule" id="matricule" step="0.01" min="0" max="100" required>
</div>
<div class="col">
<label for="Marque" class="form-label">Marque</label>
<input type="text" class="form-control" id="marque" name="marque"
required>
</div>
<div class="col">
<label for="puissance" class="form-label">Puissance</label>
<input type="number" class="form-control" id="puissance" name="puissance" required>
</div>
<div class="col">
<label for="prix" class="form-label">Prix</label>
<input type="number" class="form-control" id="prix" name="prix" required>
</div>
<div class="col">
<label for="Img_Name" class="form-label">Img_Name</label>
<input type="text" class="form-control" id="image" name="image" required>
</div>
<div class="col">
<label class="form-label d-block">&nbsp;</label>
<button type="submit" class="btn btn-primary" name="submit">Ajouter</button>
<button type="reset" class="btn btn-secondary">Annuler</button>
</div>
</div>

</form>