<?php 
    require "cli-config.php";
    if(isset($_POST['connect']))
    {
        $UserName = htmlspecialchars($_POST['UserName']);
        $Code = htmlspecialchars($_POST['Code']);

        if(!empty($Username) AND !empty($Code))
        {
            $req = $bdd->prepare("SELECT * FROM users WHERE UserName = ? AND Code = ?");
            $req->execute(array($UserName, $Code));

            $userexist = $req->rowCount();
            if($userexist == 1)
            {
                $userinfo = $req->fetch();
                $_SESSION['id'] = $userinfo['id'];
                $_SESSION['UserName'] = $userinfo['UserName'];
                $_SESSION['Code'] = $userinfo['Code'];
                header('Location: localisation.php?id='.$_SESSION['id']);
            }
            else
            {
                $erreur = "Username ou Code incorrect !";
            }
        }
        else
        {
            $erreur = "Remplis Tout les champs";
        }
    }

?>