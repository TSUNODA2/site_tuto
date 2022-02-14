<?php 
session_start();
require_once 'config/bdd.php';

if(isset($_GET['id_cours']) AND !empty($_GET['id_cours'])){
    $s_getId_cours = $_GET['id_cours'];
    $s_recupCours = $bdd->prepare('SELECT * FROM ajout_cours WHERE id_cours = ?');
    $s_recupCours->execute(array($s_getId_cours));
    if($s_recupCours->rowCount() > 0){

        $s_suppCours = $bdd->prepare('DELETE FROM ajout_cours WHERE id_cours= ?');
        $s_suppCours->execute(array($s_getId_cours));

        header('location: admin_cours.php');
    }else{
        echo "aucun cours n'a ete trouve !";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete cours</title>
</head>
<body>
    
</body>
</html>