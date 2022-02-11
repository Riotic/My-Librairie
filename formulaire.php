<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Revue d'un nouveau livre</title>
    </head>
    <body>
        <!-- Menu de navigation -->
        <a href=index.php>Accueil et liste des livres</a>

        <h1 class="square gray">Revue d'un nouveau livre</h1>
        
        <form method="post">
            <input class="form-control" name="titre" id="titre"  type="text" placeholder="titre" required >
            <input class="form-control" name="auteur" id="auteur" type="text" placeholder="auteur" required >
            <input class="form-control" name="avis" id="avis" type="text" placeholder="avis" required >
            <input class="form-control" name="note" id="note" type="text" placeholder="note" required >
            <input type="submit" name="formsend" id="formsend" value="Créer le livre">
        </form>

        <?php
            include 'database.php';
            global $bdd;
            if(isset($_POST['formsend']))
            {
                extract($_POST);
                if(!empty($titre) && !empty($auteur) && !empty($avis)  && !empty($note))
                {
                    $q = $bdd->prepare("INSERT INTO livres(titre,auteur,avis,note) VALUES (:titre,:auteur,:avis,:note)");
                    $q->execute([
                        'titre' => $titre,
                        'auteur' => $auteur,
                        'avis'=> $avis,
                        'note'=> $note,
                    ]);
                    echo "Livre crée.";
                }
                
            }


         ?> 
    </body>

    <footer><a href='https://fr.freepik.com/photos/livre'>Livre photo créé par ikaika - fr.freepik.com</a></footer>
</html>