<?php include 'database.php';
$pdoStat= $bdd->prepare('SELECT * FROM livres WHERE id=:num');
$pdoStat->bindValue(':num', $_GET['numUser'], PDO::PARAM_INT);
$executeIsOk = $pdoStat->execute();
$user = $pdoStat->fetch();

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Bouton modification</title>
    </head>

    <body>
        <h1 class="square">Modification du livre</h1>
            <form action="modifier.php" method="post">
                    <input class="form-control" name="numUser" value=<?= $user['id'] ?> type="hidden">
                    <input class="form-control" name="titre" id="titre"  type="text" placeholder="titre" value="<?= $user['titre']?>" >
                    <input class="form-control" name="auteur" id="auteur" type="text" placeholder="auteur" value="<?= $user['auteur']?>" >
                    <input class="form-control" name="avis" id="avis" type="text" placeholder="avis" value="<?= $user['avis']?>" >
                    <input class="form-control" name="note" id="note" type="text" placeholder="note" value="<?= $user['note']?>" >
                    <input type="submit" name="formsend" id="formsend" value="Modifier le livre">
            </form>

        
        <a href='index.php'>Revenir à l'accueil</h1>    
    </body>
</html>