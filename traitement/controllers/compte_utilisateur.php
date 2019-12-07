
<?php

    session_start();
    
    require_once '../models/BDD.php';
    require_once '../controllers/fonctions_auxiliares.php';
    

    $table = 'utilisateurs';

   

  
    if( isset($_POST['form_creer_compte']) == TRUE) {

        $nom = trim(htmlspecialchars($_POST['nom']));
        $email = trim(htmlspecialchars($_POST['email']));
        $mot_de_passe = trim(htmlspecialchars($_POST['mot_de_passe']));
        $confirmation = trim(htmlspecialchars($_POST['confirmation']));
        
        $donnees = array('nom' => $nom, 'email' => $email, 'mot_de_passe' => $mot_de_passe);
        
        if( vide($donnees) == NULL ) {
            header('Location: ../vues/creer_compte.php?valeur=aucune_donnee');
            exit;
        }   

        if( empty($email) == TRUE ) {
            header('Location: ../vues/creer_compte.php?valeur=email_manquant');
            exit;
        }

        if( empty($mot_de_passe) == TRUE ) {
            header('Location: ../vues/creer_compte.php?valeur=mot_de_passe_manquant');
            exit;
        }

        if( strlen($mot_de_passe) < 8 || strlen($mot_de_passe) > 45) {
            header('Location: ../vues/creer_compte.php?valeur=mot_de_passe_court');
            exit;
        }

        if( strcmp($mot_de_passe, $confirmation) != 0) {
            header('Location: ../vues/creer_compte.php?valeur=confirmation_incorrect');
            exit;
        }
        

        if( inserer($donnees, $GLOBALS['table']) == TRUE  ) {
            header('Location: ../vues/se_connecter.php?valeur=compte_cree');
        } 
        else {
            echo '<h4>Erreur à l\'insertion des données</h4>';
            exit; 
        }
    }

    if( isset($_POST['form_se_connecter']) == TRUE) {


        $email = trim(htmlspecialchars($_POST['email']));
        $mot_de_passe = trim(htmlspecialchars($_POST['mot_de_passe'])); 

        
        if(empty($email) == TRUE && empty($mot_de_passe) == TRUE) {
            echo '<h4>Erreur : Veuillez entrer les données.</h4>';
            header('Location: ../vues/se_connecter.php?valeur=aucune_donnee');
            exit;
        }

        if( empty($email) == TRUE ) {
            header('Location: ../vues/se_connecter.php?valeur=email_manquant');
            exit;
        }

        if( empty($mot_de_passe) == TRUE ) {
            header('Location: ../vues/se_connecter.php?valeur=mot_de_passe_manquant');
            exit;
        }

        $utilisateur = utilisateur($email, $mot_de_passe);

        if( $utilisateur == NULL) {
            header('Location: ../vues/se_connecter.php?valeur=login_incorrect');
            exit;
        } else {
            $_SESSION = array(
                'id' => $utilisateur['id'],
                'nom' => $utilisateur['nom'],
                'email' => $utilisateur['email'],
                'date_enregistrement' => $utilisateur['date_enregistrement'],
                'type' => $utilisateur['type']
            );
    
            header('Location: ../../index.php');
        }
    }

    if( isset($_GET['se_deconnecter']) == TRUE) {
        
        echo 'Hello';
        $_SESSION = array();

        session_destroy();

        setcookie('id', '');
        setcookie('nom', '');
        setcookie('email', '');
        setcookie('mot_de_passe', '');
        setcookie('date_enregistrement', '');
        setcookie('type', '');


        header('Location : ../../../../index.php');
    } 