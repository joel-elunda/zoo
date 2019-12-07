
<?php
    
    if (isset($_SESSION['nom']) && isset($_SESSION['email']))   {
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title> </title>
</head>
<style>
.container-fluid {
    margin-top: 5%;
}
</style>
<body>
<?php include 'header.php'; ?>
<div class="container-fluid">
    <header class="row">
    
    </header>
    <div class="row">
        <div class="col-lg-2">
            <div class="row">
                <aside class="col-lg-12 border-right">
                    <?php include 'card-zoo.php'; ?>
                </aside>
                <aside class="col-lg-12">
                    <!-- Aside -->
                </aside>
            </div>
        </div>
        <section class="col-lg-8">
            <div class="card" style="width: 35rem;">
                <img src="../../img/Material Icons_e7fd(2)_256.png" class="card-img-top w-25 h-25" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"><small>Votre compte utilisateur avec lequel vous bénéficez de plus de services du zoo.</small></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nom : <strong><?= $_SESSION['nom'];  ?></strong></li>
                    <li class="list-group-item">Email : <strong><?= $_SESSION['email']; }?></strong></li>
                </ul>
                <div class="card-body">
                    <h5>Mon compte : </h5>
                    <a href="" class="card-link"> <img src="../../img/Material Icons_e872(2)_48.png" alt="" srcset=""> Supprimer</a>
                    <a href="" class="card-link"> <img src="../../img/Material Icons_e254(3)_48.png" alt="" srcset=""> Modifier</a>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile"> Modifier photo de profil</label>
                    </div>
                </div>
            </div>
        </section>
        <div class="col-lg-2">
            <div class="row">
                <aside class="col-lg-12">
                    <ul class="list-group">
                        <li class="h6 list-group-item"><a href="../../index.php">Accueil</a></li>  
                        <li class="h6 list-group-item"><a href="#">Se déconnecter</a></li>
                    </ul>
                </aside>
                <aside class="col-lg-12">
                    <!-- Aside -->
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