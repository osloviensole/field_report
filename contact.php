<?php
    session_start();
    require "db.php";

    if(isset($_POST['contact']))
    {
        unset($_SESSION['boucle']);
        $users_name = $_SESSION['UserName'];
        $contact_refus = htmlspecialchars((int)$_POST['contact_refus']);
        $annulee_interrompue = htmlspecialchars((int)$_POST['annulee_interrompue']);
        $sans_reponse = htmlspecialchars((int)$_POST['sans_reponse']);
        $_SESSION['boucle'] = htmlspecialchars((int)$_POST['contact_reussi']);
        $contact_pris = $contact_refus + $annulee_interrompue + $sans_reponse + $_SESSION['boucle'];

        if(!empty($contact_refus) >=0 AND !empty($annulee_interrompue) >=0 AND !empty($sans_reponse) >=0 AND !empty($_SESSION['boucle']) >=0)
        {
            if ($contact_refus >= 0 AND $annulee_interrompue >=0 AND $sans_reponse >=0 AND $_SESSION['boucle'] >=0) 
            {
                $reqContact = $bdd->prepare("INSERT INTO contacts(users_name, contact_refus, annulee_interrompue, sans_reponse, contact_reussi, contact_pris, date_contact) VALUES(?, ?, ?, ?, ?, ?, NOW())");
                $reqContact->execute(array($users_name, $contact_refus, $annulee_interrompue, $sans_reponse, $_SESSION['boucle'], $contact_pris));
                header("Location: interview.php");
            }
            else
            {
                $erreur = "Les valeurs doivent être égales ou superieures à 0";
            }
        }
        else{
            $erreur = "Remplissez tous les champs";
        }
    }
    if(isset($_POST['Retour']))
    {
        header("Location: localisation.php");
    }

?>
<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Contact</title>
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
            <div class="logo"> <img src="assets/img/omega.png" alt="contact.php"> </div>
            <div class="text-center mt-4 name" style="font-family: 'Montserrat', sans-serif;"> Nombre de contacts </div>
            <form method="post" class="p-3 mt-3" action="contact.php">
                <div class="form-field d-flex align-items-center"><input type="number" name="contact_refus" id="contact_refus" placeholder="Interview refusée"></div>
                <div class="form-field d-flex align-items-center"><input type="number" name="annulee_interrompue" id="annulée_interrompue" placeholder="Interview annulée/interrompue"></div>
                <div class="form-field d-flex align-items-center"><input type="number" name="sans_reponse" id="sans_reponse" placeholder="Porte verouillée/pas de réponse"></div>
                <div class="form-field d-flex align-items-center"><input type="number" name="contact_reussi" id="contact_reussi" placeholder="Nombre d'interview réalisé"> </div>
                <input type="submit" class="btn mt-3" name="Retour" value="Retour"><input type="submit" class="btn mt-3" name="contact" value="Suivant">
            </form>
        </div>
    </body>
</html>