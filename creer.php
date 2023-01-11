<?php
require 'config/init.php';
include 'functions/messageValidation.php';
include 'functions/messageErreur.php';

?>


<?php
$arrayValidation = [];
$arrayErreur = [];

if (isset($_POST['submit'])) {
    if (!(empty($_POST['titre']) || empty($_POST['description']))) {
        $titre = $_POST['titre'];
        $description = $_POST['description'];
        $requete = "INSERT INTO produits (titre, description) VALUES ('$titre', '$description')";
        $rq = $pdo->prepare($requete);
        $rq->execute();

        array_push($arrayValidation, 'Le produit a bien été envoyé à la base de données !');
    } else {
        array_push ($arrayErreur, 'Un des champs est manquant !');
    }
}

include 'components/head.html';


?>

<title>Titre de la page</title>



<?php
include 'components/header.html';

messageValidation($arrayValidation);
messageErreur($arrayErreur);

?>

<div style="margin: 20px;">
    <form action="creer.php" method="POST">
        <label for="Titre">Titre :</label>
        <input type="text" name="titre">
        <br>
        <label for="description">Description :</label>
    <br>
        <textarea name="description" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" name="submit" value="Créer">
    </form>
</div>

<?php
include 'components/footer.html';
?>
