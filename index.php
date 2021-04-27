<?php
$title = "Page d'accueil";

include 'header.php';
include 'includes/config.php';

$req = $bdd->query('SELECT * FROM drone');

?>




<main class="container">
  <div class="bg-light p-5 rounded">
    
  </div>

  <div>
      

  </div>

  <div class="box">
  <div class="form">
      <div class="ali">
        <form action="/index.php" method="GET">

        <div>
          <input  type="radio" id="analogique" name="transmission" value="analogique" checked>
          <label class="trans" for="analogique">Analogique</label>
        </div>

        <div>
          <input  type="radio" id="numerique" name="transmission" value="numerique">
          <label class="trans" for="numerique">Numérique</label>
        </div>


        

          <select name="pets" id="pet-select">
          <?php
          while($displayVtx = $req->fetch() )
          {

          ?>
            <option value=""><?php if(isset($displayVtx["vtx"])) { echo $displayVtx["vtx"]; } else { echo "not found"; } ?></option>

          <?php
          }
          ?>
          </select>



          <select name="pets" id="pet-select">
            <option value="">--Choix du transmitteur video--</option>
            <option value="dog">...</option>
            <option value="cat">...</option>
            <option value="hamster">...</option>
            <option value="parrot">...</option>
            <option value="spider">...</option>
            <option value="goldfish">...</option>
          </select>



          <select name="pets" id="pet-select">
            <option value="">--Choix de la fc--</option>
            <option value="dog">...</option>
            <option value="cat">...</option>
            <option value="hamster">...</option>
            <option value="parrot">...</option>
            <option value="spider">...</option>
            <option value="goldfish">...</option>
          </select>



           <button id="go" type="submit">Valider</button>
        </form>


      </div>


  
  </div>
  <div><h1>Generateur de configuration pour drone FPV</h1></div>
  <div><img src="assets/img/dronic.png" alt="logo drone">

  </div>
</div>

<?php require 'footer.php'; ?>
