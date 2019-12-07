
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
            <img src="img/zoo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Zoo de Lubumbashi</h5>
                <p class="card-text"><small>
            Visitez le zoo de Lubumbashi et faites la rencontre d'une diversité d'espece animal.
            Réservez vos places pour bénéficier de nos protocoles de visites. </small></p>
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
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Espèces animales</h5>
            <p class="card-text"><small>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</small></p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        <img src="img/zebre.jpg" class="card-img-top" alt="...">
    </div>

    </section>
  
    <div class="col-lg-2">
        <div class="row">
        <aside class="col-lg-12">
        
        <ul class="list-group">
          <li class="h6 list-group-item"><a href="traitement/vues/se_connecter.php">Se connecter</a></li>
          <li class="h6 list-group-item"><a href="traitement/vues/horaires-tarifs.php">Nos hoaires et tarifs</a></li>
          <li class="h6 list-group-item"><a href="traitement/vues/vues_admin/gerer.php">ADMIN</a></li>
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