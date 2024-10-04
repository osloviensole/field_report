<?php
  session_start();  
?>
<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Envoie</title>
        <link rel="shortcut icon" href="assets/img/omega.png">
        <link rel="stylesheet" href="assets/css/style.css">
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    </head>
    <body class='snippet-body'>
        <div class="wrapper">
            <div class="logo"> <img src="assets/img/omega.png" alt=""> </div>
            <div class="text-center mt-4 name" style="margin-bottom: 120px;"> Confirmer l'envoie </div>
            <form class="p-3 mt-3" method="post" action="ending.php">
                <input type="submit" name="" class="btn1 mt-3" value="Soumettre">
            </form>
        </div>
    </body>
</html>