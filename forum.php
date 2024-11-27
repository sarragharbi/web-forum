<?php
include '../../controller/epoqueConroller.php';

$error = "";

$chrono = null;
// Crée une instance du contrôleur
$epoquecontroller = new epoquecontroller();

// **Correction 1 : Vérification stricte avec `isset` pour éviter les avertissements**
if (
    isset($_POST["nom_epoque"]) && isset($_POST["description"]) && 
    isset($_POST["periode_debut"]) && isset($_POST["periode_fin"]) && 
    isset($_POST["groupes_sociaux"]) && isset($_POST["patrimoine"]) && 
    isset($_POST["realisation_majeures"]) && isset($_POST["faits_interessants"])
) {
    // **Correction 2 : Vérification des champs non vides**
    if (
        !empty($_POST["nom_epoque"]) && !empty($_POST["description"]) && 
        !empty($_POST["periode_debut"]) && !empty($_POST["periode_fin"]) && 
        !empty($_POST["groupes_sociaux"]) && !empty($_POST["patrimoine"]) && 
        !empty($_POST["realisation_majeures"]) && !empty($_POST["faits_interessants"])
    ) {  
        // **Correction 3 : Gestion des dates avec `DateTime` et bloc `try-catch`**
        try {
            $periodeDebut = new DateTime($_POST['periode_debut']);
            $periodeFin = new DateTime($_POST['periode_fin']);
        } catch (Exception $e) {
            $error = "Les dates fournies ne sont pas valides.";
            echo $error;
            exit;
        }

        // Création de l'objet `chrono`
        $chrono = new chrono(
            null, // ID (null pour une nouvelle entrée)
            $_POST['nom_epoque'],
            $_POST['description'],
            $periodeDebut, // Objet `DateTime`
            $periodeFin,   // Objet `DateTime`
            $_POST['groupes_sociaux'],
            $_POST['patrimoine'],
            $_POST['realisation_majeures'],
            $_POST['faits_interessants']
        );

        // Ajout de l'époque
        $epoquecontroller->addEpoque($chrono);

        // **Redirection après ajout**
        header('Location:listEpoque.php');
        exit;
    } else {
        $error = "Informations manquantes.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ajouter une Époque - ChronoVoyage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        /* Style général pour le body */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f0fa;
        }

        /* Style pour la sidebar (barre de navigation à gauche) */
        .sidebar {
            width: 280px;
            background-color: #7a42f4;
            color: #fff;
            height: 100vh;
            position: fixed;
            padding: 20px 0;
        }

        .sidebar .logo {
            text-align: center;
            margin-bottom: 60px;
            font-size: 1 em;
            font-weight: bold;
        }

        .sidebar .menu {
            list-style: none;
            padding: 0;
        }

        .sidebar .menu li {
            padding: 15px 20px;
        }

        .sidebar .menu li a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .sidebar .menu li a i {
            margin-right: 10px;
        }

        .sidebar .menu li.active {
            background-color: #5c2bbd;
            border-radius: 5px;
        }

        .main--content {
            margin-left: 280px;
            padding: 40px;
        }

        .header--wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .header--title {
            color: #5c2bbd;
        }

        /* Table styling */
        .table th, .table td {
            vertical-align: middle;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <h1>ChronoVoyage</h1>
        </div>
        <ul class="menu">
            <li class="active">
                <a href="dashboard.php">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="index.php"> <!-- Cette page affiche la liste des époques -->
                    <i class="fas fa-history"></i>
                    <span>Gérer les Époques</span>
                </a>
            </li>
            <li>
                <a href="gerer_geos.php">
                    <i class="fas fa-globe"></i>
                    <span>Gérer les Géos</span>
                </a>
            </li>
            <li class="logout">
                <a href="#">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Déconnexion</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main--content">
        <!-- Header -->
        <div class="header--wrapper">
            <div class="header--title">
                <span>Bienvenue, Administrateur</span>
                <h2>ChronoVoyage</h2>
            </div>
        </div>

        <!-- Formulaire pour ajouter une époque -->
        <div class="container mt-5">
            <h1 class="mb-5">Ajouter une Époque</h1>

            <?php if ($error) { ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php } ?>

            <form action="" method="POST">
                <div class="mb-3">
                    <label for="nom_epoque" class="form-label">Nom de l'époque</label>
                    <input type="text" id="nom_epoque" name="nom_epoque" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea id="description" name="description" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="periode_debut" class="form-label">Période de début</label>
                    <input type="date" id="periode_debut" name="periode_debut" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="periode_fin" class="form-label">Période de fin</label>
                    <input type="date" id="periode_fin" name="periode_fin" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="groupes_sociaux" class="form-label">Groupes sociaux</label>
                    <textarea id="groupes_sociaux" name="groupes_sociaux" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="patrimoine" class="form-label">Patrimoine</label>
                    <textarea id="patrimoine" name="patrimoine" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="realisation_majeures" class="form-label">Réalisations majeures</label>
                    <textarea id="realisation_majeures" name="realisation_majeures" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="faits_interessants" class="form-label">Faits intéressants</label>
                    <textarea id="faits_interessants" name="faits_interessants" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Ajouter l'Époque</button>
                </div>
            </form>
        </div>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
