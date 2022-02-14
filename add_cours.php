<?php 
require_once "config/bdd.php";

$s_titre = htmlspecialchars($_POST["titre"]);
$s_description = nl2br(htmlentities($_POST["dsc"]));

if(!empty($s_titre) && !empty($s_description)) {

    $s_insertCours = $bdd->prepare("INSERT INTO ajout_cours(titre, dsc) VALUES(?, ?)");
    $s_insertCours->execute([$s_titre, $s_description]);

    header("Location: admin_cours.php?cours_err=success");

}else header('Location: admin_cours.php?cours_err=cours');
?>