<?php include 'database.php';
    $pdoStat= $bdd->prepare('DELETE FROM livres WHERE id=:num LIMIT 1');
    $pdoStat->bindValue(':num', $_GET['numUser'], PDO::PARAM_INT);
    $executeIsOk = $pdoStat->execute();
    if ($executeIsOk){
        $message = "Le livre a été supprimé.";
    }else{
        $message = "Echec de la suppression du livre.";
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Revue d'un nouveau livre</title>
    </head>

    <body>
        <h1 class ="square"> Supprimer </h1>
        <p> <?= $message ?></p>
        <a href='index.php'>Revenir à l'accueil</h1>    
    </body>
</html>