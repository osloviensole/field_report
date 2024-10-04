<?php 
    session_start();
  require "db.php";

  $_SESSION['boucle'] = (int)$_SESSION['boucle'];
  
    if(isset($_POST['send']))
    {
        $users_name = $_SESSION['UserName'];
        $nom_interlocuteur = htmlspecialchars($_POST['nom_interlocuteur']);
        $age_interlocuteur = htmlspecialchars($_POST['age_interlocuteur']);
        $sex_interlocuteur = htmlspecialchars($_POST['sex_interlocuteur']);
        $lieux_interlocuteur = htmlspecialchars($_POST['lieux_interlocuteur']);
        $numero_interlocuteur = htmlspecialchars($_POST['numero_interlocuteur']);
        $mail_interlocuteur = htmlspecialchars($_POST['mail_interlocuteur']);

        if(!empty($nom_interlocuteur) AND !empty($age_interlocuteur) AND !empty($sex_interlocuteur) 
            AND !empty($lieux_interlocuteur) AND !empty($numero_interlocuteur) AND !empty($mail_interlocuteur))
        {
            $reqInter = $bdd->prepare("INSERT INTO interview(users_name, nom_interlocuteur, age_interlocuteur, sex_interlocuteur, 
                lieux_interlocuteur, numero_interlocuteur, mail_interlocuteur, date_interview) VALUES(?, ?, ?, ?, ?, ?, ?, NOW())");
            $reqInter->execute(array($users_name, $nom_interlocuteur, $age_interlocuteur, $sex_interlocuteur, 
                $lieux_interlocuteur, $numero_interlocuteur, $mail_interlocuteur));
                (int)$_SESSION['boucle'] -= 1;
                echo (int)$_SESSION['boucle'];
        }
        else
        {
            $erreur = "Remplis tous les champs";
        }
    }
    if((int)$_SESSION['boucle'] == 0)
    {
        unset($_SESSION['boucle']);
        header("Location: envoyer.php");
        exit();
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Interview</title>
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
            <div class="text-center mt-4 name" style="font-family: 'Montserrat', sans-serif;"> Interview aboutie <?php echo (int)$_SESSION['boucle']; ?> </div>
            <form method="post" action="interview.php" class="p-3 mt-3">
                <div class="form-field d-flex align-items-center"><input type="text" name="nom_interlocuteur" id="Name" placeholder="Nom complet "> </div>
                <div class="form-field d-flex align-items-center"><input type="text" name="age_interlocuteur" id="userName" placeholder="Age de la personne"> </div>
                <div class="form-field d-flex align-items-center">  
                    <select name="sex_interlocuteur" id="pays" placeholder="Sexe">
                        <option value="M">Sexe</option>
                        <option value="M">M</option>
                        <option value="F">F</option>
                    </select> </div>
                <div class="form-field d-flex align-items-center"><input type="text" name="lieux_interlocuteur" id="userName" placeholder="Adresse complete"> </div>
                <div class="form-field d-flex align-items-center"><input type="tel" name="numero_interlocuteur" id="tel" placeholder="Téléphone"> </div>
                <div class="form-field d-flex align-items-center"><input type="email" name="mail_interlocuteur" id="email" placeholder="Email"> </div>
                <input type="submit" class="btn1 mt-3" name="send" value="Enregistrer">
            </form>
        </div>
    </body>
</html>