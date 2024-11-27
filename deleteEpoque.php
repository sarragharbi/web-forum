<?php
// Inclure le contrôleur
include '../../controller/epoqueConroller.php';

// Vérifier si le paramètre id_epoque est défini
if (isset($_GET["id_epoque"])) {
    // Créer une instance du contrôleur
    $chrono = new epoquecontroller();

    // Supprimer l'époque
    $chrono->deleteEpoque($_GET["id_epoque"]);

    // Rediriger vers la liste des époques
    header('Location: listEpoque.php');
    exit();
} else {
    // Afficher une erreur si l'ID est manquant
    echo "Erreur : Aucun identifiant fourni pour la suppression.";
}
?>
