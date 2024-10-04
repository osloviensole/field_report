<?php
    require "db.php";
    function insertion()
    {
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=rapport', 'root','' );
        }
        catch(Exception $e)
        {
            die('Erreur !: '. $e->getMessage());   
        }

        if(isset($_POST['send']))
        {
            $nom_interlocuteur = htmlspecialchars($_POST['nom_interlocuteur']);
            $users_id = $_SESSION['id'];
            $age_interlocuteur = htmlspecialchars($_POST['age_interlocuteur']);
            $sex_interlocuteur = htmlspecialchars($_POST['sex_interlocuteur']);
            $lieux_interlocuteur = htmlspecialchars($_POST['lieux_interlocuteur']);
            $numero_interlocuteur = htmlspecialchars($_POST['numero_interlocuteur']);
            $mail_interlocuteur = htmlspecialchars($_POST['mail_interlocuteur']);

            if(!empty($nom_interlocuteur) AND !empty($age_interlocuteur) AND !empty($sex_interlocuteur) 
                AND !empty($lieux_interlocuteur) AND !empty($numero_interlocuteur) AND !empty($mail_interlocuteur))
            {
                $requser = $bdd->prepare("INSERT INTO interview(nom_interlocuteur, users_id, age_interlocuteur, sex_interlocuteur, 
                    lieux_interlocuteur, numero_interlocuteur, mail_interlocuteur, date_interview) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())");
                $requser->execute(array($nom_interlocuteur, $users_id, $age_interlocuteur, $sex_interlocuteur, 
                    $lieux_interlocuteur, $numero_interlocuteur, $mail_interlocuteur));
            }
            else
            {
                $erreur = "Remplis Tous les champs";
            }
        }
    }
?>