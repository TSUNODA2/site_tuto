<?php 
require_once 'config/bdd.php';

if(isset($_POST['sned']))
{
    if()
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cours_admin</title>
    <link rel="stylesheet" href="admin_css.css">
</head>

<body class="s_body_admin_utilisateur">

    <header class="s_header_admin_utilisateur">

        <ul>

            <li class="s_admin_links">
                <a href="admin_utilisateur.php" class="s_link_utilisateur_2"><h2>Utilisateurs</h2></a>
                <a href="admin_cours.php" class="s_link_cours_2"><h2>Cours</h2></a>
            </li>

            <li>
                <h3>lorem, lorem</h3>
                <a href="#" class="s_deco"><h3 class="s_deco">Deconnexion</h3></a>
            </li>

        </ul>

    </header>

    <main class="s_admin_cours">

        <table class="s_table_cours_list">

            <tr class="s_table_top">
                <th>Titre</th>
                <th>Description</th>
                <th>suppression</th>
            </tr>

            <tr class="s_table_mid">
                <th>Theoreme</th>
                <th>lorenfkjnsdjfnj ksdjfhkjsdfhjehfufefhjk shfjehf sjhdjfk hef</th>
                <th><a href="#" class="s_close_button"><img src="./pictures_admin/close.png" width="20%" alt=""></a></th>
            </tr>

        </table>

        <br>

        <h1 class="s_title_h1">Ajouter un cours</h1>

        <br>

        <table class="s_table_cours_add">
            
         <tr class="s_table_top_add">
             <th><input class="s_enter_train" type="text" size="100%" placeholder="Entrer le titre de votre exercice" name="" id=""></th>
         </tr>

         <tr class="s_table_mid_add">
            <th><textarea class="s_desc_cours" name="description" id="description" placeholder="Entrer la description de votre poste" cols="80" rows="10"></textarea></th>
            <th><input class="s_button_add" type="submit" value="add"></th>
         </tr>

        </table>

    </main>
    </body>