<?php

require 'config/init.php';

$requete = "SELECT * FROM produits";
$rq = $pdo->prepare($requete);
$rq->execute();

$resultats = $rq->fetchAll(PDO::FETCH_ASSOC);

include 'functions/card.php';


// SUPPRIMER

if(isset($_GET['supprimer']) ){
    $id = $_GET['supprimer'];

    $requete = "DELETE FROM produits WHERE id = $id";
    $rq = $pdo->prepare($requete);
    $rq->execute();
}

  //MODIFIER

  if(isset($_GET['modifier']) ){

    $id = $_GET['modifier'];
    $requete = "UPDATE produits SET titre = '$titre' , description= '$description' , image= '$image'  WHERE id = $id";
    $rq = $pdo->prepare($requete);
    $rq->execute();
}

include 'components/head.html';
include 'components/header.html';
 
foreach ($resultats as $r) {
    card( $r['titre'], $r['description'], $r['image'], $r['id'], $r['date']);
}

include 'components/footer.html';



?>

