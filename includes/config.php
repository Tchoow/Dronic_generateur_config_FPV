<?php
    $servername = "localhost";
    $username   = "tchoow";
    $password   = "tchoow";
    $bddName    = "dronic";

    try {
        $bdd = new PDO("mysql:host=$servername;dbname=$bddName", $username, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Fonctionne";
        }
    catch(PDOException $e)
        {
        echo "Erreur de connexion: " . $e->getMessage();
        }
    

    /*
    $requete = "SELECT frames FROM drone";
    $resultat = $bdd->query($requete);
        

    if ($resultat->num_rows > 0)
    {
        while($donnees = $resultat->fetch_assoc())
        {
            echo $donnees["frames"];
        }
    }
    else
    {
        echo "0 resultat";
    }
    
    $bdd->close();

    */

    /*
    $reponse = $bdd->query('SELECT * FROM drone');
    
    while ($donnees = $reponse->fetch())
    {
        $donnees['frames'];
    }

    */

          
?>