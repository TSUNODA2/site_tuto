<?php 
try{
    $bdd = new PDO("mysql:host=localhost;dbname=site_tuto", "root", "");
}
catch(Exception $e){
    die('Erreur' .$e->getMessage());
}
?>