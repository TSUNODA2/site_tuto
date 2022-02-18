<?php 
session_start();
require_once 'config/bdd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>utilisateur</title>
    <link rel="stylesheet" href="admin_css.css">
</head>

<body class="s_body_admin_utilisateur">

    <header class="s_header_admin_utilisateur">

        <ul>

            <li class="s_admin_links">
                <a href="admin_utilisateur.php" class="s_link_utilisateur"><h2>Utilisateurs</h2></a>
                <a href="admin_cours.php" class="s_link_cours"><h2>Cours</h2></a>
            </li>

            <li>
                <h3>$nom, $prenom</h3>
                <a href="#" class="s_deco"><h3 class="s_deco">Deconnexion</h3></a>
            </li>

        </ul>

    </header>
    
    <main class="s_main_admin_user">

    <table class="s_table_utilisateur_list">

      <tr class="s_table_top">
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>statut</th>
        <th></th>
      </tr>

      <?php 
      $s_recupUser = $bdd->query('SELECT id, nom, prenom, mail, statut FROM membres');
      while($s_user = $s_recupUser->fetch()){
          ?>
          <tr class="s_table_mid">
          <th><?= $s_user['nom'] ?></th>
          <th><?= $s_user['prenom'] ?></th>
          <th> <?= $s_user['mail'] ?> </th>
          <th> <?= $s_user['statut'] ?> </th>
          <th><a href="delete.php?id=<?= $s_user['id']; ?>" class="s_close_button"><img src="./pictures_admin/close.png" width="40%" alt=""></a></th>
      </tr>
      <?php
      }
      ?>

    </table>

    </main>
</body>
</html>