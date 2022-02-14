<?php 
session_start();
require_once 'config/bdd.php';

if(isset($_GET['id']) AND !empty($_GET['id'])){
    $s_getId = $_GET['id'];
    $s_recupUser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
    $s_recupUser->execute(array($s_getId));
    if($s_recupUser->rowCount() > 0){

        $s_suppUser = $bdd->prepare('DELETE FROM membres WHERE id= ?');
        $s_suppUser->execute(array($s_getId));

        header('Location: admin_utilisateur.php');
    }else{
        echo "aucun utilisateur n'a ete trouve !";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
</head>
<body>
    
</body>
</html>