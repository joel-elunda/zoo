

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>Horaires et tarifs</title>
</head>
<style>
.container-fluid {
    margin-top: 5%;
}
</style>
<body>
<?php include '../vues/header.php'; ?>
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
                    <div class="card-deck">
                        <div class="card">
                            <img src="../../img/zoo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Zoo de Lubumbashi</h5>
                                <p class="card-text">
                                Visitez le zoo de Lubumbashi et faites la rencontre d'une diversité d'espece animal.
                                Réservez vos places pour bénéficier de nos protocoles de visites.</p>
                                <p class="card-text"><small class="text-muted">Des zèbres, des lions, des pelicans, des gorilles et biens d'autres.</small></p>
                            </div>
                        </div>
                    </div>
                </aside>
                <aside class="col-lg-12">
                    <!-- Aside -->
                </aside>
            </div>
        </div>
        <section class="col-lg-8">
            <div class="row">

                <div class="col">
                <caption> <h4>Nos horaires</h4> </caption>
                <table class="table table-bordered table-striped table-condensed table-sm">
                    
                    <thead>
                        <tr>
                            <th>Jour de la semaine</th>
                            <th>Heure début</th>
                            <th>Heure fin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th  scope="row"></th>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                   <tfoot>
                   </tfoot>
                </table>
                </div>
            

                <div class="col">
                    <caption> <h4>Nos tarifs</h4> </caption>
                    <table class="table table-bordered table-striped table-condensed table-sm">

                    <thead>
                        <tr>
                            <th>Catégorie</th>
                            <th>Age</th>
                            <th>Prix</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>   
                    </table>
                </div>
            </div>
        </section>
        <div class="col-lg-2">
            <div class="row">
                <aside class="col-lg-12">
                    <ul class="list-group">
                        <li class="h6 list-group-item"><a href="../../index.php">Accueil</a></li>
                        <li class="h6 list-group-item"><a href="se_connecter.php">Se connecter</a></li>
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