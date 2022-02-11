<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
</head>

<body>

    <a href=formulaire.php>Créer des revues</a>
    <div class="center"><h1 class="square plus">Voici la bibliotèque alt-rh</h1></div>
    <?php
            include 'database.php';
            global $bdd;
            $q = $bdd->query("SELECT *  FROM livres");
            while($user = $q->fetch()) {
                ?> <div class="square">
                    <?php ?>
                    <li>
             <p>Id</p><?= $user['id'] ?> <p>Titre :</p><?= $user['titre'] ?> <p>Auteur</p> <?= $user['auteur'] ?> <p>Avis</p><?= $user['avis'] ?> <p>Note</p><?= $user['note'] ?><p>Crée le</p> <?= $user['date_creation'] ?> <a href=supprimer.php?numUser=<?= $user['id'] ?>>Supprimer</a> <a href=form_modif.php?numUser=<?= $user['id'] ?>>Modifier</a>
                    </li>
                   </div> <?php 
            }

         ?> 
    




</body>

<footer>
<a href='https://fr.freepik.com/photos/livre'>Livre photo créé par ikaika - fr.freepik.com</a>
</footer>    

</html>