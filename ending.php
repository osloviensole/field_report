<?php
    session_start();
    if(isset($_POST['new']))
    {
        header("Location: localisation.php");
    }
    if(isset($_POST['out']))
    {
        session_destroy();
        header("Location: index.php");
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
            <div class="logo"> <img src="assets/img/omega.png" alt=""> </div>
            <div class="text-center mt-4 name" style="margin-bottom: 188px;"> Terminée ! </div>
            <form method="post" action="" class="p-3 mt-3">
                <input type="submit" class="btn mt-3" name="out" value="Quitter">
                <input type="submit" class="btn mt-3" name="new" value="Nouveau">
            </form>
        </div>
    </body>
</html>