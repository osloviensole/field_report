<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=omega_rapport', 'root','' );
    }
    catch(Exception $e)
    {
        die('Erreur !: '. $e->getMessage());   
    }
?>