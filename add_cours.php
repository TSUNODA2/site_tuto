<?php 
require_once "config/bdd.php";

$s_titre = htmlspecialchars($_POST["titre"]);
$s_description = nl2br(htmlentities($_POST["dsc"]));

if(!empty($s_titre) && !empty($s_description)) {

    $s_insertCours = $bdd->prepare("INSERT INTO ajout_cours(titre, dsc) VALUES(?, ?)");
    $s_insertCours->execute([$s_titre, $s_description]);

    $success = "Votre tuto a etais ajouter !";
    header("Location: admin_cours.php?error=$success");

}else{
    $erreur = "Entrer tout les champs !";
    header("Location: admin_cours.php?error=$erreur");
}
?>