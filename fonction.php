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
         return $bdd->query("SELECT * FROM defaut_projet");
     }
     function affiche_ville()
     {
        $bdd = database();
         return $bdd->query("SELECT * FROM defaut_ville");
     }