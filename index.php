<?php
    session_start();
    require "db.php"; 
    if(isset($_POST['connect']))
    {
        $UserName = htmlspecialchars($_POST['UserName']);
        $Code = htmlspecialchars($_POST['Code']);

        if(!empty($UserName) AND !empty($Code))
        {
            $req = $bdd->prepare("SELECT * FROM invest WHERE UserName = ? AND Code = ?");
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
            $erreur = "Remplis tous les champs";
        }
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Login</title>
        <link rel="shortcut icon" href="assets/img/omega.png">
        <link rel="stylesheet" href="assets/css/style.css">
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
        <script type='text/javascript' src=''></script>
    </head>
    <body class='snippet-body'>
    <div class="loader"></div>
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
            <div class="text-center mt-4 name" style="font-size: 24px;"> Enquêteur </div>
            <form method="post" class="p-3 mt-3" action="index.php">
                <div class="form-field d-flex align-items-center">
                    <input type="text" name="UserName" id="userName" placeholder="Nom de l'enquêteur"> 
                </div>
                <div class="form-field d-flex align-items-center">  
                    <input type="text" name="Code" id="pwd" placeholder="Code de l'enquêteur"> 
                </div> 
                <input type="submit" class="btn1 mt-3" name="connect" value="Connexion">
            </form>
        </div>
    </body>
</html>