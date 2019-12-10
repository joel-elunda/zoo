<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <title>Zoo de Lubumbashi</title>
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
    <a class="navbar-brand" href="#">Zoo de Lubumbashi - 
      <strong>
        <?php
          
          if (isset($_SESSION['nom']) && isset($_SESSION['email']))   {
              echo $_SESSION['nom'];
          }
        ?>
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
    
        <div class="row">
          <form action="../../controllers/admin/gerer.php" method="post" class="p-3">
            <h4>Ajouter un animal</h4>
            <h6>
              <?php
                if(  isset($_GET['valeur'] )){
                    if( $_GET['valeur'] == 'aucune_donnee') {
                        echo '<span class="badge badge-pill badge-danger">Veuillez compléter tous les champs.</span>';
                    }
                    
                    if( $_GET['valeur'] == 'nom_manquant') {
                        echo '<span class="badge badge-pill badge-danger">Erreur : Veuillez entrer le nom de l\'animal.</span>';
                    }
                    if( $_GET['valeur'] == 'categorie_manquant') {
                        echo '<span class="badge badge-pill badge-danger">Erreur : Veuillez entrer la categorie.</span>';
                    }
                    if( $_GET['valeur'] == 'erreur_insertion') {
                      echo '<span class="badge badge-pill badge-danger">Erreur à l\'insertion</span>';
                    }
                    if( $_GET['valeur'] == 'donnees_inserees') {
                      echo '<span class="badge badge-pill badge-success">Données ajoutées.</span>';
                  }
                }
              ?>
            </h6>

            <div class="row">
              <div class="col">
                <div class="form-group">
                    <input type="text" name="nom"  id="nom" class="form-control form-control-sm" id="exampleNameHelp" aria-describedby="nameHelp" placeholder="Nom">
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <select name="categorie" class="form-control form-control-sm">
                    <option>Mammifère</option>
                    <option>Oiseau</option>
                    <option>Reptile</option>
                  </select> 
                </div>
              </div>
              <div class="col">
                <input type="number" name="nombre"  id="nombre" class="form-control form-control-sm" id="exampleNameHelp" aria-describedby="nameHelp" placeholder="Nombre">
              </div>
                    
              <div class="col">
                <div class="form-group">
                  <input type="file" name="photo" id="photo" class="form-control-file form-control-sm" id="exampleFormControlFile1">
                </div>
              </div>
              <div class="col">
                <button type="submit" name="form_ajouter_animal" class="btn btn-light border">Ajouter</button>
              </div>
            </div>
          </form>
        </div>
        <hr>
          <div class="row">
            <table class="table table-bordered table-striped table-condensed table-sm table-hover">
              <thead>
                  <tr>
                    <th>*</th>
                    <th>Nom</th>
                    <th>Catégorie</th>
                    <th>Nombre</th>
                    <th>Date</th>
                    <th>Option</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                  require_once '../../models/BDD.php';
                  
                  $table_animaux = 'animaux';
                  $animaux = contenu($GLOBALS['table_animaux']);
                  
                  if( empty($animaux) ) {
                      echo '<tr><td>Empty</td></tr>';
                  }
                  else {
                      while( $resultat = $animaux -> fetch() ) {
                        ?>
                          <tr>
                            <th  scope="row"> <?= $resultat['id']; ?></th>
                            <td><?= $resultat['nom']; ?></td>
                            <td><?= $resultat['categorie']; ?></td>
                            <td><?=  $resultat['nombre'];  ?></td>
                            <td><?= $resultat['date_enregistrement']; ?></td>
                            <td>
                              <a href="<?= $resultat['id'] ?>"><span class="badge badge-info">Supprimer</span></a>
                              <a href="<?= $resultat['id'] ?>"><span class="badge badge-info">Modifier</span></a> 
                            </td>
                        </tr>  
                        <?php
                      } 
                        }
                    ?>
                  <?php
                ?>
                
              </tbody>
              <tfoot>
              </tfoot>
            </table>
          </div>
          

    </section>
  
    <div class="col-lg-2">
        <div class="row">
        <aside class="col-lg-12">
        
        <ul class="list-group list-group-flush">
          <li class="h6 list-group-item list-group-item-action"><a href="gerer.php">Accueil</a></li>
          <li class="h6 list-group-item list-group-item-action"><a href="gerer-reservations.php">RESERVATIONS</a></li>
          <li class="h6 list-group-item list-group-item-action"><a href="gerer-horaires.php">HORAIRES</a></li>
          <li class="h6 list-group-item list-group-item-action"><a href="gerer-tarifs.php">TARIFS</a></li>
          <li class="h6 list-group-item list-group-item-action"><a href="gerer-visiteurs.php">VISITEURS</a></li>
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