<?php 
    function database()
    {
      try
      {
          $bdd = new PDO('mysql:host=localhost;dbname=rapport', 'root','' );
      }
      catch(Exception $e)
      {
          die('Erreur !: '. $e->getMessage());   
      }
      return $bdd;
    }

     function affiche_projet()
     {
        $bdd = database();
        $reqAffiche = $bdd->query("SELECT * FROM defaut_projet");

        return $reqAffiche;
     }
     function affiche_ville()
     {
        $bdd = database();
        $reqVille = $bdd->query("SELECT * FROM defaut_ville");

        return $reqVille;
     }
?>