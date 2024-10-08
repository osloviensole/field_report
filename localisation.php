<?php 
    session_start();
    require "cli-config.php";
    require "fonction.php";
    $ville = affiche_ville();
    $projet = affiche_projet();
    if(isset($_POST['lieux']))
    {
        $users_name = $_SESSION['UserName'];
        $ville = htmlspecialchars($_POST['ville']);
        $projet = htmlspecialchars($_POST['projet']);

        if(!empty($ville) AND !empty($projet))
        {
            $reqlieux = $bdd->prepare("INSERT INTO projet(users_name, ville, projet, date_projet) VALUES(?, ?, ?, NOW())");
            $reqlieux->execute(array($users_name, $ville, $projet));
            header("Location: contact.php");
        }
        else{
            $erreur = "Remplis tous les champs";
        }
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Localisation</title>
        <link rel="shortcut icon" href="assets/img/omega.png">
        <link rel="stylesheet" href="assets/css/style.css">
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    </head>
    <body class='snippet-body'>
        <div class="wrapper">
            <div class="erreur">
                <?php 
                    if(isset($erreur))
                    {
                        echo $erreur;
                    }
                ?>
            </div>
            <div class="logo"> <img src="assets/img/omega.png" alt=""> </div>
            <div class="text-center mt-4 name" style="font-family: 'Montserrat', sans-serif;"> Détails du projet </div>
            <form method = "post" class="p-3 mt-3" action="">
                <div class="form-field d-flex align-items-center">
                    <select name="ville" id="pays" placeholder="Ville">
                        <option value="">--Choisir une ville--</option>
                        <optgroup label="Ville">
                        <?php while($villa = $ville->fetch()) {?>
                            <option value="<?php echo $villa['ville']; ?>"><?php echo $villa['ville']; ?></option>
                            <?php }?>
                        </optgroup>
                    </select>
                </div>
                <div class="form-field d-flex align-items-center">
                    <select  name="projet" id="projet" placeholder="Projet">
                        <option value="">--Choisir un projet--</option>
                        <optgroup label="Projet">
                            <?php while($project = $projet->fetch()) {?>
                            <option value="<?php echo $project['projet']; ?>"><?php echo $project['projet']; ?></option>
                            <?php } ?>
                        </optgroup>
                    </select> 
                </div>
                <input type="submit" class="btn1 mt-3" name="lieux" value="Suivant">
            </form>
        </div>
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
        <script type='text/javascript' src=''></script>
        <script type='text/javascript' src=''></script>
        <script type='text/Javascript'></script>
    </body>
</html>