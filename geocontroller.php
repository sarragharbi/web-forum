<?php
include (__DIR__.'/../config.php');
include (__DIR__.'/../model/geoModel.php');

class geocontroller
{
    public function listgeo()
    {
        $sql = "SELECT * FROM chronogeo";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    public function deletegeo($id_geographique)
    {
        $sql = "DELETE FROM chronogeo WHERE id_geographique = :id_geographique";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_geographique', $id_geographique);

        try {
            $req->execute();
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    public function addgeo($chronogeo)
    {
        $sql = "INSERT INTO chronogeo (nom_lieu, latitude, longitude, type_geographique, importance_historique, fait_culturel, description) 
                VALUES (:nom_lieu, :latitude, :longitude, :type_geographique, :importance_historique, :fait_culturel, :description)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom_lieu' => $chronogeo->get_name(),
                'latitude' => $chronogeo->get_latitude(),
                'longitude' => $chronogeo->get_longitude(),
                'type_geographique' => $chronogeo->get_type(),
                'importance_historique' => $chronogeo->get_histoire(),
                'fait_culturel' => $chronogeo->get_culture(),
                'description' => $chronogeo->get_descri(),
                
            ]);
        } catch (Exception $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    public function updateEpoque($chronogeo, $id_geographique) {
        try {
            // Requête SQL pour la mise à jour
            $query = "UPDATE chronogeo SET 
                      nom_lieu = :nom_lieu, 
                      latitude = :latitude, 
                      longitude = :longitude, 
                      type_geographique = :type_geographique, 
                      importance_historique = :importance_historique, 
                      fait_culturel = :fait_culturel, 
                      description = :description, 
                      faits_interessants = :faits_interessants, 
                      image = :image 
                      WHERE id_geographique = :id_geographique"; // Le paramètre id_geographique doit aussi être lié
    
            // Connexion à la base de données
            $db = config::getConnexion();
            $stmt = $db->prepare($query);
    
            // Exécution de la requête avec les paramètres
            $stmt->execute([
                'nom_lieu' => $chronogeo->get_name(), 
                'latitude' => $chronogeo->get_latitude(), 
                'longitude' => $chronogeo->get_longitude(), 
                'type_geographique' => $chronogeo->get_type(), 
                'importance_historique' => $chronogeo->get_histoire(),
                'fait_culturel' => $chronogeo->get_culture(),
                'description' => $chronogeo->get_descri(),
                'id_geographique' => $id_geographique // L'ID de l'époque doit être lié également
            ]);
    
            // Retourne le nombre de lignes mises à jour
            return $stmt->rowCount();
            
        } catch (PDOException $e) {
            // En cas d'erreur, afficher et enregistrer l'erreur
            error_log("Erreur lors de la mise à jour du geo : " . $e->getMessage());
            echo "Erreur : " . $e->getMessage();  // Affichage pour le débogage
            return false;
        }
    }
    
    
    public function showgeo($id_geographique)
    {
        $sql = "SELECT * FROM chronogeo WHERE id_geographique = :id_geographique";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['id_geographique' => $id_geographique]);

            $chronogeo = $query->fetch();
            return $chronogeo;
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
