<?php 

session_start();
require_once 'config/bdd.php';

if(isset($_GET['id_2']) AND !empty($_GET['id_2'])){
    $s_getId2 = $_GET['id_2'];
    $s_recupCours = $bdd->prepare('SELECT * FROM ajout_cours WHERE id_2 = ?');
    $s_recupCours->execute(array($s_getId2));
    if($s_recupCours->rowCount() > 0){

        $s_suppCours = $bdd->prepare('DELETE FROM ajout_cours WHERE id_2 = ?');
        $s_suppCours->execute(array($s_getId2));

        header('Location: admin_cours.php');
    }else{
        echo "aucun cours n'a ete trouve !";
    }
}
?>