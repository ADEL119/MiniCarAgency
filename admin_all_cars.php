<?php
include 'header.php';

require('class/car.php');
$car=new Car();
?>
<?php //$_GET['id']>0
if(isset($_GET['action']) && $_GET['action']=='delete' ){
    $matricule=$_GET['matricule'];
$car->sup_car($matricule);
header("location:admin_all_cars.php");
}
//modifier produit
if(isset($_POST['modif'])){
$car->matricule=$_POST['matricule'];
$car->marque=$_POST['marque'];
$car->puissance=$_POST['puissance'];
$car->prix=$_POST['prix'];
//modifier un produit dans la base de données
$car->modif_car();
header("location:admin_all_cars.php");
}
?>
<h1></h1>
<a href="add_car.php" class="btn btn-primary mb-3">Ajouter Voiture</a>
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
<td><img src='$image' class='card-img-top'  style='width: 600px;height:300px;'</img></td>
<td>

<a href='admin_all_cars.php?action=delete&matricule=$c->matricule'><button class='btn btn-danger'>Supprimer</button></a>
</td>
</tr>";

}
?>
</tbody>
</table>

<?php include "footer.php";?>