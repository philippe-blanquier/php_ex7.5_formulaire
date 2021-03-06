<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 7.5 Formulaire: Client & Server</title>
    </head>
    <body >
        <?php
        /*  Créer un formulaire sur la page index.php avec :  
                Une liste déroulante pour la civilité (Mr ou Mme)
                Un champ texte pour le nom
                Un champ texte pour le prénom  
            Ce formulaire doit rediriger vers la page index.php. 
            Vous avez le choix de la méthode.
        */
        if ((empty($_REQUEST['civil'])) || (empty($_REQUEST['userName'])) || (empty($_REQUEST['userFirstname'])))
        {
            // Client part
        ?>
        <form action="index.php" method="get">
            <label>Client: </label>
            <select name="civil" id="civilId">
                <option value="Mr">Mr</option>    			
                <option value="Mme">Mme</option>   
            </select>
            <label for="userName">Nom: </label>
        	<input type="string" name="userName" placeholder="nom">
            <label for="userFirstname">Prénom: </label>
        	<input type="string" name="userFirstname" placeholder="prénom">            
            <input type="submit" value="OK">
        </form>
        <?php
        }
        else
        {
            // Server part
            $civilInfo= $_REQUEST['civil'];
            $userName= $_REQUEST['userName'];
            $userFirstname= $_REQUEST['userFirstname'];
            echo ("Server: ".$civilInfo." ".$userName." ".$userFirstname);
        }
        ?>
    </body>
</html>