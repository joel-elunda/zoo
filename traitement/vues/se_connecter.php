

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>Se connecter</title>
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
        <div class="col-lg-12">
            <!-- Entete -->
        </div>
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
            <form action="../controllers/compte_utilisateur.php" method="post" class="w-50 p-3">
                <h4>Login</h4>
                <h6>
                    <?php
                        if(  isset($_GET['valeur'] )){
                            if( $_GET['valeur'] == 'compte_cree') {
                                echo '<span class="badge badge-pill badge-success">Votre compte a été créé.</span>';
                            }
                            if( $_GET['valeur'] == 'aucune_donnee') {
                                echo '<span class="badge badge-pill badge-danger">Aucune donnée entréé.</span>';
                            }
                            if( $_GET['valeur'] == 'email_manquant') {
                                echo '<span class="badge badge-pill badge-danger">Erreur : Veuillez entrer l\'email.</span>';
                            }
                            if( $_GET['valeur'] == 'mot_de_passe_manquant') {
                                echo '<span class="badge badge-pill badge-danger">Erreur : Veuillez entrer le mot de passe.</span>';
                            }
                            if( $_GET['valeur'] == 'login_incorrect') {
                                echo '<span class="badge badge-pill badge-danger">Login ou mot de passe incorrect.</span>';
                            }
                        }
                    ?>
                </h6>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" id="email" name="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" id="mot_de_passe" name="mot_de_passe"  class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <a href="creer_compte.php" class="h6">S'inscrire</a>
                </div>
                <button type="submit" name="form_se_connecter" class="btn btn-light border">Se connecter</button>
                
            </form>
        </section>
        <div class="col-lg-2">
            <div class="row">
                <aside class="col-lg-12">
                    <ul class="list-group">
                        <li class="h6 list-group-item"><a href="../../../index.php">Accueil</a></li>
                        <li class="h6 list-group-item"><a href="creer_compte.php">Créer un compte</a></li>
                        <li class="h6 list-group-item"><a href="horaires-tarifs.php">Horaires et tarifs</a></li>
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