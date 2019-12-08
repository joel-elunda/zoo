
<?php


    require_once '../../models/BDD.php';
    require_once '../../controllers/fonctions_auxiliares.php';

    $table_utilisateurs = 'utilisateurs';
    $table_reservations = "reservations";
    $table_animaux = "animaux";
    $table_horaires = 'horaires';

   
    if( isset($_POST['gerer_visiteurs'])) {
        header('Location:   ../../vues/vues_admin/gerer-visiteurs.php');
    }


    if( isset($_POST['form_ajouter_animal'])) {

        $nom = trim(htmlspecialchars($_POST['nom']));
        $categorie = trim(htmlspecialchars($_POST['categorie']));
        $photo = trim(htmlspecialchars($_POST['photo']));
        $nombre = trim(htmlspecialchars($_POST['nombre']));
        
        if( empty($nom) == TRUE && empty($categorie) == TRUE) {
            header('Location: ../../vues/vues_admin/gerer-animaux.php?valeur=aucune_donnee');
            exit;
        }

        if (empty($nom) == TRUE) {
            header('Location: ../../vues/vues_admin/gerer-animaux.php?valeur=nom_manquant');
            exit;
        }

        if (empty($categorie) == TRUE) {
            header('Location: ../../vues/vues_admin/gerer-animaux.php?valeur=categorie_manquant');
            exit;
        }

        $animal = array('nom' => $nom, 'categorie' => $categorie, 'nombre' => $nombre, 'photo' => $photo);
        if( inserer($animal, $GLOBALS['table_animaux']) == TRUE) {
            header('Location: ../../vues/vues_admin/gerer-animaux.php?valeur=donnees_inserees');
        } else {
            header('Location: ../../vues/vues_admin/gerer-animaux.php?valeur=erreur_insertion');
            exit;
        }
    }

    if( isset($_POST['form_horaires']) ) {
        
        $date_debut = trim(htmlspecialchars($_POST['date_debut']));
        $date_fin = trim(htmlspecialchars($_POST['date_fin']));
        $heure_debut = trim(htmlspecialchars($_POST['heure_debut']));
        $heure_fin = trim(htmlspecialchars($_POST['heure_fin']));
        $evenement = trim(htmlspecialchars($_POST['evenement']));

        $horaire = array(
            'date_debut' => $date_debut,
            'date_fin' =>  $date_fin,
            'heure_debut' => $heure_debut,
            'heure_fin' => $heure_fin,
            'evenement' => $evenement
        );
        
        if( empty ($date_debut) == TRUE) {
            header('Location: ../../vues/vues_admin/gerer-horaires.php?valeur=date_debut_manquant');
            exit;
        }
        if( empty ($date_fin) == TRUE) {
            header('Location: ../../vues/vues_admin/gerer-horaires.php?valeur=date_fin_manquant');
            exit;
        }
        if( empty ($heure_debut) == TRUE) {
            header('Location: ../../vues/vues_admin/gerer-horaires.php?valeur=heure_debut_manquant');
            exit;
        }
        if( empty ($heure_fin) == TRUE) {
            header('Location: ../../vues/vues_admin/gerer-horaires.php?valeur=heure_fin_manquant');
            exit;
        }
        
        
        if( inserer($horaire, $GLOBALS['table_horaires']) == TRUE ) {
            header('Location: ../../vues/vues_admin/gerer-horaires.php?valeur=donnees_inserees');
        } else {
            header('Location: ../../vues/vues_admin/gerer-horaires.php?valeur=erreur_insertion');
            exit;
        }
    }