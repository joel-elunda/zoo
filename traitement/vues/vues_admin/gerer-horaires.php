
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <title>Gérer les horaires</title>
</head>
<style type="text/css">
.container-fluid{
    margin-top : 5%;
}
.card-deck {
    margin-bottom: 2%;
}
</style>
<body>
<div class="container-fluid">
  
  <header class="row">
    <div class="col-lg-12">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">Zoo de Lubumbashi - <strong>
    <?php
    session_start();
    if (isset($_SESSION['nom']) && isset($_SESSION['email']))   {
        echo $_SESSION['nom'];
    }?>
    </strong>
    </a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </nav>
    </div>
  </header>

  <div class="row">
    <div class="col-lg-2">
      <div class="row">
        <aside class="col-lg-12">
        <div class="card-deck">
        <div class="card">
            <img src="../../../img/parallax-bg.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Zoo de Lubumbashi</h5>
                <p class="card-text">
                Visitez le zoo de Lubumbashi et faites la rencontre d'une diversité d'espece animal
                vivant le dans jardin zoologique de Lubumbashi</p>
                <p class="card-text"><small class="text-muted">Des zèbres, des lions, des pelicans, des gorilles et biens d'autres.</small></p>
            </div>
        </div>
</div>
        </aside>
        <aside class="col-lg-12">
          
        </aside>
      </div>
    </div>

    <section class="col-lg-8">
    
        <div class="card-body">
            <h5 class="card-title">Gérer les horaires</h5>
            <p class="card-text"><small class="text-muted">Mettez à jour la liste de vos horaires</small></p>
        </div>

        
    <form action="../../controllers/admin/gerer.php" method="post"> 
      <h6>
        <?php
          if(  isset($_GET['valeur'] )){
              if( $_GET['valeur'] == 'aucune_donnee') {
                  echo '<span class="badge badge-pill badge-danger">Veuillez remplir les champs.</span>';
              }
              if( $_GET['valeur'] == 'date_debut_manquant') {
                  echo '<span class="badge badge-pill badge-danger">Date début manquant.</span>';
              }
              if( $_GET['valeur'] == 'date_fin_manquant') {
                  echo '<span class="badge badge-pill badge-danger">Date fin manquant</span>';
              }
              if( $_GET['valeur'] == 'heure_debut_manquant') {
                echo '<span class="badge badge-pill badge-danger">Heure début manquant</span>';
              }
              if( $_GET['valeur'] == 'heure_fin_manquant') {
                echo '<span class="badge badge-pill badge-danger">Heure fin manquant.</span>';
              }
              if( $_GET['valeur'] == 'donnees_inserees') {
                echo '<span class="badge badge-pill badge-success">Données ajoutées.</span>';
              }
          }
        ?>
      </h6>
      <div class="form-row">
        <div class="col-3"> 
          <label for=""><small>Date début</small></label>
          <input type="date" name="date_debut" id="date_debut" class="form-control form-control-sm" value="Lundi"> 
        </div>
        <div class="col-3"> 
          <label for=""><small>Date fin</small></label>
          <input type="date" name="date_fin" id="date_fin" class="form-control form-control-sm"> 
        </div>
        <div class="col-3">
          <label for=""><small>Heure début</small></label>
          <input type="time" name="heure_debut" id="heure_debut" class="form-control form-control-sm" placeholder="State">
        </div>
        <div class="col-3">
          <label for=""><small>Heure fin</small></label> 
          <input type="time" name="heure_fin" id="heure_fin" class="form-control form-control-sm"   placeholder="Zip">
        </div>
      </div> 
      <br>
      <div class="form-row">
        <div class="col"> 
          <input type="text" name="evenement" id="evenement" class="form-control form-control-sm" placeholder="Evenement"> 
        </div>
        <div class="col-3"> 
          <button type="submit" name="form_horaires" class="form-control form-control-sm btn-light border">Ajouter</button>
        </div>
      </div> 
    </form>

    <hr>
    <table class="table table-bordered table-striped table-condensed table-sm">
      <thead>
          <tr>
              <th>*</th>
              <th>Date</th>
              <th>Heure</th>
              <th>Evenement</th>
              <th>Option</th>
          </tr>
      </thead>
      <tbody>
      <?php
        require_once '../../models/BDD.php';
                
        $table_horaires = 'horaires';
        
        $horaires = contenu($GLOBALS['table_horaires']);
        
        if( empty($horaires) ) {
            echo 'Empty';
        }
        else {
            while( $resultat = $horaires -> fetch() ) {
      ?>
            <tr>
              <td scope="row"><?= $resultat['id']; ?></td>
              <td><?= '<strong>' . $resultat['date_debut'] .'</strong> > <strong>' . $resultat['date_fin'] . '</strong>';  ?></td>
              <td><?= 'De <strong>' . $resultat['heure_debut'] . '</strong> à <strong>' . $resultat['heure_fin'] . '</strong>'; ?></td> 
              <td><?= $resultat['evenement']; ?></td>
              <td>
                <a href="<?= $resultat['id'] ?>"><span class="badge badge-info">Supprimer</span></a>
                <a href="<?= $resultat['id'] ?>"><span class="badge badge-info">Modifier</span></a> 
              </td>
            </tr>
            <?php } }?>
      </tbody>
      <tfoot>
      </tfoot>
      </table>
    </section>
  
    <div class="col-lg-2">
        <div class="row">
        <aside class="col-lg-12">
        
        <ul class="list-group">
            <li class="h6 list-group-item"><a href="gerer.php">Accueil</a></li>
            <li class="h6 list-group-item"><a href="gerer-reservations.php">RESERVATIONS</a></li> 
            <li class="h6 list-group-item"><a href="gerer-visiteurs.php">VISITEURS</a></li> 
            <li class="h6 list-group-item"><a href="gerer-animaux.php">ANIMAUX</a></li>
            <li class="h6 list-group-item"><a href="#">Se déconnecter</a></li>
        </ul>
        </aside>
        <aside class="col-lg-12">
            
            
        </aside>
        </div>
    </div>
  </div>

  <footer class="row fixed-bottom">
    <div class="col-lg-12">
      <!-- Pied de page -->
    </div>
  </footer>

  </div>
</body>
</html>