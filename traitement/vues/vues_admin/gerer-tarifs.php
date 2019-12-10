<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <title>Gérer les tarifs</title>
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
    <a class="navbar-brand" href="#">Zoo de Lubumbashi  <strong>
    <?php
        if (isset($_SESSION['nom']) && isset($_SESSION['email']))   {
            echo '- ' . $_SESSION['nom'];
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
            <h5 class="card-title">Gérer les tarifs</h5>
            <p class="card-text"><small class="text-muted">Mettez à jour la liste de vos tarifs</small></p>
        </div>

        
    <form action="../../controllers/admin/gerer.php" method="post"> 
      <h6>
        <?php
        if( isset($_GET['valeur'] )){
            if( $_GET['valeur'] == 'aucune_donnee') {
            echo '<span class="badge badge-pill badge-danger">Veuillez remplir les champs.</span>';
            }
            if( $_GET['valeur'] == 'categorie_manquant') {
                echo '<span class="badge badge-pill badge-danger">Catégorie manquant.</span>';
            }
            if( $_GET['valeur'] == 'age_manquant') {
                echo '<span class="badge badge-pill badge-danger">Age manquant</span>';
            }
            if( $_GET['valeur'] == 'prix_manquant') {
            echo '<span class="badge badge-pill badge-danger">Prix manquant</span>';
            } 
            if( $_GET['valeur'] == 'donnees_inserees') {
            echo '<span class="badge badge-pill badge-success">Données ajoutées.</span>';
            }
            if( $_GET['valeur'] == 'erreur_insertion') {
                echo '<span class="badge badge-pill badge-success">Erreur l\'insertion.</span>';
            }
        }
        ?>
    </h6>
    <div class="form-row">
        <div class="col-3"> 
            <label for=""><small>Catégorie</small></label>
            <select name="categorie" class="form-control form-control-sm" >
                <option>Enfant</option>
                <option>Jeune</option>
                <option>Adulte</option>
            </select> 
        </div>
        <div class="col-3"> 
            <label for="age"><small>Age</small></label>
            <input type="text" name="age" id="age" class="form-control form-control-sm"> 
        </div>
        <div class="col-3">
          <label for="prix"><small>Prix</small></label>
          <input type="text" name="prix" id="prix" class="form-control form-control-sm">
        </div>
        <div class="col-3"> 
          <label for="">.</label>
          <button type="submit" name="form_tarifs" class="form-control form-control-sm btn-light border">Ajouter</button>
        </div>
      </div> 
    </form>
    <br>
    <table class="table table-bordered table-striped table-condensed table-sm table-hover">
      <thead>
          <tr>
              <th>*</th>
              <th>Catégorie</th>
              <th>Age</th>
              <th>Prix</th>
              <th>Option</th>
          </tr>
      </thead>
      <tbody>
        <?php
            require_once '../../models/BDD.php';
                    
            $table_tarifs = 'tarifs';
            
            $tarifs = contenu($GLOBALS['table_tarifs']);
            
            if( empty($tarifs) ) {
                echo '<tr><td>Vide</td></tr>';
            }
            else {
                while( $resultat = $tarifs -> fetch() ) {
            ?>
                <tr>
                    <td scope="row"><?= $resultat['id']; ?></td>
                    <td><?= $resultat['categorie']; ?></td>
                    <td><?= '<strong>' . $resultat['age'] . '</strong>';  ?></td>
                    <td><?= '<strong>' . $resultat['prix'] . '</strong> CDF'; ?></td> 
                    <td>
                        <a href="<?= '../../controllers/admin/gerer.php?supprimer_tarifs=' . $resultat['id'] ?>"><span class="badge badge-info">Supprimer</span></a>
                        <a href="<?= '../../controllers/admin/gerer.php?supprimer_tarifs=' . $resultat['id'] ?>"><span class="badge badge-info">Modifier</span></a> 
                    </td>
                </tr>
            <?php } }?>
        </tbody>
        <tfoot> </tfoot>
    </table>
    </section>
  
    <div class="col-lg-2">
        <div class="row">
        <aside class="col-lg-12">
        
        <ul class="list-group list-group-flush">
            <li class="h6 list-group-item list-group-item-action"><a href="gerer.php">Accueil</a></li>
            <li class="h6 list-group-item list-group-item-action"><a href="gerer-reservations.php">RESERVATIONS</a></li> 
            <li class="h6 list-group-item list-group-item-action"><a href="gerer-visiteurs.php">VISITEURS</a></li>
            <li class="h6 list-group-item list-group-item-action"><a href="gerer-tarifs.php">TARIFS</a></li> 
            <li class="h6 list-group-item list-group-item-action"><a href="gerer-animaux.php">ANIMAUX</a></li>
            <li class="h6 list-group-item list-group-item-action"><a href="#">Se déconnecter</a></li>
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