
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <title>ADMIN - Zoo de Lubumbashi</title>
</head>
<style type="text/css">
.container-fluid{
    margin-top : 5%;
}

.card {
    margin-bottom: 2%;
}
</style>
<body>
<div class="container-fluid">
  
  <header class="row">
    <div class="col-lg-12">
    <?php include '../header.php'; ?>
    </div>
  </header>

  <div class="row">
    <div class="col-lg-2">
      <div class="row">
        <aside class="col-lg-12 border-right">
            <div class="card-deck">
                <div class="card">
                    <img src="../../../img/parallax-bg.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Compte ADMIN</h5>
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

        <div class="card">
            <div class="card-header">
                Animaux
            </div>
            <div class="card-body">
                <h5 class="card-title">GESTION D'ANIMAUX SAUVAGES ET D'ESPÈCES DU ZOO</h5>
                <p class="card-text">Obtenez une panoplis de tous les animaux et gérez les animaux dans leur ensemble.</p>
                <a href="gerer-animaux.php" class="btn btn-light border">Gérer</a>
            </div>
        </div>


        <div class="card">
            <div class="card-header">
                Visiteurs
            </div>
            <div class="card-body">
                <h5 class="card-title">GESTION DES COMPTES VISITEURS</h5>
                <p class="card-text">Gérez ici les comptes des visiteurs du zoo.</p>
                <a href="gerer-visiteurs.php" class="btn btn-light border">Gérer</a>
            </div>
        </div>



        <div class="card">
            <div class="card-header">
                Réservations
            </div>
            <div class="card-body">
                <h5 class="card-title">GESTION DES RESERVATIONS</h5>
                <p class="card-text">Validez les réservations des visiteurs.</p>
                <a href="gerer-reservations.php" class="btn btn-light border">Gérer</a>
            </div>
        </div>
<!-- 
        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div> -->

    </section>
  
    <div class="col-lg-2">
        <div class="row">
        <aside class="col-lg-12">
        
            <ul class="list-group">
                <li class="h6 list-group-item"><a href="traitement/vues/vues_admin/gerer-animal.php">Se déconnecter</a></li>
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