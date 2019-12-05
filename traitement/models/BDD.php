
<?php

    $table_utilisateurs = 'utilisateurs';
    $table_horaires = 'horaires';
    $table_animaux = 'animaux';
    $table_tarifs = 'tarifs';
    $table_reservations =  "reservations";




    function bdd() {
        try {
            $serveur = "mysql:host=localhost;dbname=zoo";
            $utilisateur = "root";
            $mot_de_passe = "";

            $connexion = new PDO($serveur, $utilisateur, $mot_de_passe); 
            return $connexion;
            
        } catch (Exception $e) {
            die ('Erreur : ' . $e -> getMessage());
            return NULL;
        }
    }



    function contenu($table) {
        if(empty($table) == FALSE) {
            $requete =  'SELECT * FROM ' . $table; 
            $resultat = bdd() -> query($requete);
            if($resultat) {   return $resultat;   } else {    return NULL;   }
        }
    }





    function inserer($donnees, $table) {

        $table = trim($table);

        if( (empty($donnees) == FALSE) && (empty($table) == FALSE) ) {

            if(strcmp($table, $GLOBALS['table_utilisateurs']) == 0) {
               
                $requete = bdd() -> prepare('INSERT INTO ' . $table . ' (id, nom, email, mot_de_passe, date_enregistrement, type)
                VALUES (NULL, :nom, :email, :mot_de_passe, :date_enregistrement, :type);');
               
                $requete -> execute(array(
                    'nom' => $donnees['nom'],
                    'email' => $donnees['email'],
                    'mot_de_passe' => $donnees['mot_de_passe'],
                    'date_enregistrement' => $donnees['date_enregistrement'],
                    'type' => $donnees['type']
                ));

                if($requete) { return TRUE } else { return FALSE; }
            }

            if(strcmp($table, $GLOBALS['table_horaires']) == 0) {

                $requete = bdd() -> prepare('INSERT INTO ' . $table . ' (id, heure_debut, heure_fin, date_debut, date_fin)
                VALUES (NULL, :heure_debut, :heure_fin, :date_debut, :date_fin);');

                $requete -> execute(array(
                    'heure_debut' => $donnees['heure_debut'],
                    'heure_fin' => $donnees['heure_fin'],
                    'date_debut' => $donnees['date_debut'],
                    'date_fin' => $donnees['date_fin']
                ));

                if($requete) { return TRUE } else { return FALSE; }
            }

            if(strcmp($table, $GLOBALS['table_animaux']) == 0) {

                $requete = bdd() -> prepare('INSERT INTO ' . $table . '(id, nom, categorie, nombre)
                VALUES (NULL, :nom, :categorie, :nombre);');

                $requete -> execute(array(
                    'nom' => $donnees['nom'],
                    'categorie' => $donnees['categorie'],
                    'nombre' => $donnees['nombre']
                ));

                if($requete) { return TRUE } else { return FALSE; }
            }

            if(strcmp($table, $GLOBALS['table_tarifs']) == 0) {

                $requete = bdd() -> prepare('INSERT INTO ' . $table . ' (id, categorie, prix)
                VALUES (NULL, :categorie, :prix);');

                $requete -> execute(array(
                    'categorie' => $donnees['categorie'],
                    'prix' => $donnees['prix']
                ));

                if($requete) { return TRUE } else { return FALSE; }
            }

            if(strcmp($table, $GLOBALS['table_reservations']) == 0) {

                $requete = bdd() -> prepare('
                INSERT INTO ' . $table . ' (id, id_utilisateur, date_reservation, heure_reservation, nombre_personnes, confirmation, prix)
                VALUES (NULL, :id_utilisateur, :date_reservation, :heure_reservation, :nombre_personnes, :confirmation, :prix');

                $requete -> execute(array(
                    'id_utilisateur' => $donnees['id_utilisateur'],
                    'date_reservation' => $donnees['heure_reservation'],
                    'heure_reservation' => $donnees['heure_reservation'],
                    'nombre_personnes' => $donnees['nombre_personnes'],
                    'confirmation' => $donnees['confirmation'],
                    'prix' => $donnees['prix']
                ));

                if($requete) { return TRUE } else { return FALSE; }
            }
        }

    }





    function mettre_a_jour($donnees, $table) {
        
        $table = trim($table);

        if( (empty($donnees) == FALSE) && (empty($table) == FALSE)) {

            if(strcmp($table, $GLOBALS['table_utilisateurs']) == 0) {

                $requete = bdd() -> prepare('UPDATE ' . $table . '
                 SET nom = :nom, email = :email, mot_de_passe = :mot_de_passe, date_enregistrement = :date_enregistrement, type = :type WHERE id = :id;');

                $requete -> execute(array(
                    'id' => $donnees['id'],
                    'nom' => $donnees['nom'],
                    'email' => $donnees['email'],
                    'mot_de_passe' => $donnees['mot_de_passe'],
                    'date_enregistrement' => $donnees['date_enregistrement'],
                    'type' => $donnees['type']
                ));

                if($requete) { return TRUE } else { return FALSE; }
            }

            if(strcmp($table, $GLOBALS['table_horaires']) == 0) {

                $requete = bdd() -> prepare('UPDATE' . $table . '
                 SET heure_debut = :heure_debut, heure_fin = :heure_fin, date_debut = :date_debut, date_fin = :date_fin WHERE id = :id;');

                $requete -> execute(array(
                    'id' => $donnees['id'],
                    'heure_debut' => $donnees['heure_debut'],
                    'heure_fin' => $donnees['heure_fin'],
                    'date_debut' => $donnees['date_debut'],
                    'date_fin' => $donnees['date_fin']
                ));

                if($requete) { return TRUE } else { return FALSE; }
            }

            if(strcmp($table, $GLOBALS['table_animaux']) == 0) {

                $requete = bdd() -> prepare('UPDATE ' . $table . ' SET nom = :nom, categorie = :categorie, nombre = :nombre WHERE id = :id;');

                $requete -> execute(array(
                    'id' => $donnees['id'],
                    'nom' => $donnees['nom'],
                    'categorie' => $donnees['categorie'],
                    'nombre' => $donnees['nombre']
                ));

                if($requete) { return TRUE } else { return FALSE; }
            }

            if(strcmp($table, $GLOBALS['table_tarifs']) == 0) {

                $requete = bdd() -> prepare('UPDATE ' . $table . ' SET categorie = :categorie, prix = :prix WHERE id = :id;');

                $requete -> execute(array(
                    'id' => $donnees['id'],
                    'categorie' => $donnees['categorie'],
                    'prix' => $donnees['prix']
                ));

                if($requete) { return TRUE } else { return FALSE; }
            }


            if(strcmp($table, $GLOBALS['table_reservations']) == 0) {

                $requete = bdd() -> prepare('
                UPDATE ' . $table . ' SET date_reservation = :date_reservation, heure_reservation = :heure_reservation, nombre_personnes = :nombre_personnes, confirmation = :confirmation, prix =  :prix WHERE id = :id;');

                $requete -> execute(array(
                    'id' => $donnees['id'],
                    'date_reservation' => $donnees['heure_reservation'],
                    'heure_reservation' => $donnees['heure_reservation'],
                    'nombre_personnes' => $donnees['nombre_personnes'],
                    'confirmation' => $donnees['confirmation'],
                    'prix' => $donnees['prix']
                ));

                if($requete) { return TRUE } else { return FALSE; }
            }
        }
    }




    function supprimer($id, $table) {

        if( (empty($id) == FALSE) && (empty($table) == FALSE) ) {
            $requete = 'DELETE FROM ' . $table . ' WHERE id = ' . $id; 
            $resultat = bdd() -> exec($requete);
            if($resultat) {   return TRUE;   } else {    return FALSE;   }
        }

    }

    function count($tabel) {
        $table = trim($table);
        if( empty($table) == FALSE) {
            $resultat = bdd() -> exec('SELECT COUNT(*) AS nombre FROM ' . $table );
        }
        if($requete != NULL) { return $resultat; } else { return NULL; }
    }