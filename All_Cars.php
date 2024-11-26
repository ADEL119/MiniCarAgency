<?php
include 'header.php';

require('class/car.php');
$car=new Car();
?>
<?php //$_GET['id']>0
if(isset($_GET['action']) && $_GET['action']=='delete' ){
$car->sup_car($_GET['matricule']);
header("location:All_Cars.php");
}
//modifier produit
if(isset($_POST['modif'])){
$car->matricule=$_POST['matricule'];
$car->marque=$_POST['marque'];
$car->puissance=$_POST['puissance'];
$car->prix=$_POST['prix'];
//modifier un produit dans la base de données
$car->modif_car();
header("location:All_Cars.php");
}
?>
<h1>All Cars</h1>
<table class="table table-striped table-bordered" id="listprod">
<thead>
<tr>
<th>Matricule</th>
<th>Modele</th>
<th>Puissance</th>
<th>Prix</th>
<th>Image</th>
</tr>
</thead>
<tbody>

<?php
$cars=$car->list_car();
foreach ($cars as $c) {
    $im=$c->image;
    $image=$im.".jpg";
echo "<tr>
<td>$c->matricule</td>
<td>$c->marque</td>
<td>$c->puissance</td>
<td>$c->prix</td>
<td><img src='$image' class='card-img-top'  style='width: 400px;height:190px;transition: transform 0.3s;'</img></td>
<td>
<a href='reservation_page.php?matricule=$c->matricule&image=$c->image'><button type='button'  class='btn btn-success' data-bs-toggle='modal' databs-target='#exampleModal'>Reserver</button>

</td>
</tr>";

}
?>
</tbody>
</table>
<div class="modal fade" id="exampleModal" tabindex="-1" arialabelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1 class="modal-title fs-5" id="exampleModalLabel">Modifier produit</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" arialabel="Close"></button>
</div>
<div class="modal-body">
<form action="liste_produits.php" method="post">
<div class="row">
<div class="col-12">

<label class="form-label" for="nom">Matricule</label>
<input class="form-control" type="text" value="" name="nom" id="nom"
required>
</div>
<div class="col-12">
<label class="form-label" for="prix_achat">Modele</label>
<input class="form-control" type="number" value=""
name="prix_achat" id="prix_achat" required>
</div>
<div class="col-12">
<label class="form-label" for="prix">Puissance</label>
<input class="form-control" type="number" value="" name="prix"
id="prix" required>
</div>
</div>
</div>
<div class="modal-footer">
<input type="hidden" name="id" id="id" value="">
<button type="button" class="btn btn-secondary" data-bsdismiss="modal">Annuler</button>
<button type="submit" class="btn btn-primary" name="modif">modifier</button>
</div>
</form>
</div>
</div>
</div>
<?php include "footer.php";?>