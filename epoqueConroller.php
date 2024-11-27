<?php
include (__DIR__.'/../config.php');
include (__DIR__.'/../model/EpoqueModel.php');

class epoquecontroller
{
    public function listEpoque()
    {
        $sql = "SELECT * FROM chrono";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    public function deleteEpoque($id_epoque)
    {
        $sql = "DELETE FROM chrono WHERE id_epoque = :id_epoque";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_epoque', $id_epoque);

        try {
            $req->execute();
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    public function addEpoque($chrono)
    {
        $sql = "INSERT INTO chrono (nom_epoque, description, periode_debut, periode_fin, groupes_sociaux, patrimoine, realisation_majeures, faits_interessants) 
                VALUES (:nom_epoque, :description, :periode_debut, :periode_fin, :groupes_sociaux, :patrimoine, :realisation_majeures, :faits_interessants)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom_epoque' => $chrono->get_name(),
                'description' => $chrono->get_description(),
                'periode_debut' => $chrono->get_periode_debut()->format('Y-m-d'),
                'periode_fin' => $chrono->get_periode_fin()->format('Y-m-d'),
                'groupes_sociaux' => $chrono->get_groupes_sociaux(),
                'patrimoine' => $chrono->get_patrimoine(),
                'realisation_majeures' => $chrono->get_realisation_majeures(),
                'faits_interessants' => $chrono->get_faits_interessants(),
            ]);
        } catch (Exception $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    public function updateEpoque($chrono, $id_epoque) {
        try {
            // Requête SQL pour la mise à jour
            $query = "UPDATE chrono SET 
                      nom_epoque = :nom_epoque, 
                      description = :description, 
                      periode_debut = :periode_debut, 
                      periode_fin = :periode_fin, 
                      groupes_sociaux = :groupes_sociaux, 
                      patrimoine = :patrimoine, 
                      realisation_majeures = :realisation_majeures, 
                      faits_interessants = :faits_interessants, 
                      image = :image 
                      WHERE id_epoque = :id_epoque"; // Le paramètre id_epoque doit aussi être lié
    
            // Connexion à la base de données
            $db = config::getConnexion(); 
            $stmt = $db->prepare($query);
    
            // Exécution de la requête avec les paramètres
            $stmt->execute([
                'nom_epoque' => $chrono->get_name(), 
                'description' => $chrono->get_description(), 
                'periode_debut' => $chrono->get_periode_debut()->format('Y-m-d'), 
                'periode_fin' => $chrono->get_periode_fin()->format('Y-m-d'), 
                'groupes_sociaux' => $chrono->get_groupes_sociaux(),
                'patrimoine' => $chrono->get_patrimoine(),
                'realisation_majeures' => $chrono->get_realisation_majeures(),
                'faits_interessants' => $chrono->get_faits_interessants(),
                'id_epoque' => $id_epoque // L'ID de l'époque doit être lié également
            ]);
    
            // Retourne le nombre de lignes mises à jour
            return $stmt->rowCount();
            
        } catch (PDOException $e) {
            // En cas d'erreur, afficher et enregistrer l'erreur
            error_log("Erreur lors de la mise à jour de l'époque : " . $e->getMessage());
            echo "Erreur : " . $e->getMessage();  // Affichage pour le débogage
            return false;
        }
    }
    
    
    public function showEpoque($id_epoque)
    {
        $sql = "SELECT * FROM chrono WHERE id_epoque = :id_epoque";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['id_epoque' => $id_epoque]);

            $chrono = $query->fetch();
            return $chrono;
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
