<?php include 'database.php';
    $pdoStat = $bdd->prepare('UPDATE livres SET titre=:titre, auteur=:auteur, avis=:avis, note=:note WHERE id=:num LIMIT 1');
    $pdoStat->bindValue(':num', $_POST['numUser'], PDO::PARAM_INT);
    $pdoStat->bindValue(':titre', $_POST['titre'], PDO::PARAM_STR);
    $pdoStat->bindValue(':auteur', $_POST['auteur'], PDO::PARAM_STR);
    $pdoStat->bindValue(':avis', $_POST['avis'], PDO::PARAM_STR);
    $pdoStat->bindValue(':note', $_POST['note'], PDO::PARAM_STR);
    $executeIsOk = $pdoStat->execute();
    if($executeIsOk){
        $message = 'Le livre a été mis à jour.';
    }else{
        $message = 'Echec de la mis à jour.';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Revue d'un nouveau livre</title>
    </head>

    <body>
        <h1 class ="square"> Modifier </h1>
        <p> <?= $message ?></p>
        <a href='index.php'>Revenir à l'accueil</h1>    
    </body>
</html>