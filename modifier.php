<?php

require 'config/init.php';

if(isset($_GET['modifier']) ){

  $id = $_GET['modifier'];
  $requete = "UPDATE produits SET titre = '$titre' , description= '$description' , image= '$image'  WHERE id = $id";
  $rq = $pdo->prepare($requete);
  $rq->execute();


if(!empty($_POST['modiftitre'])){

  $modiftitre = $_POST['modiftitre'];
  $modifiertitre = "UPDATE produits SET titre = '$modiftitre' WHERE id = $id";
  $rq = $pdo-> prepare ($modifiertitre);
  $rq-> execute();
  echo 'le titre à bien été modifié';
}


if(!empty($_POST['modifdescription'])){
  $_POST['modifdescription'] = NULL;
} else {
  $modifdescription = $_POST['modifdescription'];
  $modifierdescription = "UPDATE produits SET description = modifdescription WHERE id = $id";
  $rq = $pdo-> prepare ($modifierdescription);
  $rq-> execute();
  echo 'la description à bien été modifiée';
}

if(!empty($_POST['modifimage'])){
  $_POST['modifdimage'] = NULL;
} else {
  $modifimage = $_POST['modifimage'];
  $modifierimage = "UPDATE produits SET image = modifimage WHERE id = $id";
  $rq = $pdo-> prepare ($modifierimage);
  $rq-> execute();
  echo 'l\'image à bien été modifiée';
}


}

?>
