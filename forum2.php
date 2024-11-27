<?php

include '../../controller/geocontroller.php';

$error = "";

$chronogeo = null;
// Crée une instance du contrôleur
$geocontroller = new geocontroller();

// **Correction 1 : Vérification stricte avec `isset` pour éviter les avertissements**
if (
    isset($_POST["nom_lieu"]) && isset($_POST["latitude"]) && 
    isset($_POST["longitude"]) && isset($_POST["type_geographique"]) && 
    isset($_POST["importance_historique"]) && isset($_POST["fait_culturel"]) && 
    isset($_POST["description"]) 
) {
    // **Correction 2 : Vérification des champs non vides**
    if (
        !empty($_POST["nom_lieu"]) && !empty($_POST["latitude"]) && 
        !empty($_POST["longitude"]) && !empty($_POST["type_geographique"]) && 
        !empty($_POST["importance_historique"]) && !empty($_POST["fait_culturel"]) && 
        !empty($_POST["description"]) 
    ) {  
        
        if (is_numeric($_POST['latitude']) && is_numeric($_POST['longitude'])) {

        // Création de l'objet `chronogeo`
        $chronogeo = new chronogeo(
            null, // ID
            $_POST['nom_lieu'],
            floatval($_POST['latitude']),
            floatval($_POST['longitude']),
            $_POST['type_geographique'],
            $_POST['importance_historique'],
            $_POST['fait_culturel'],
            $_POST['description']
        );}

        // Ajout du géo
        $geocontroller->addgeo($chronogeo);

        // **Redirection après ajout**
        header('Location:listgeo.php');
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
    <title>Ajouter une Geo - ChronoVoyage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f0fa;
        }
        
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
                <a href="index.php">
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

        <!-- Formulaire pour ajouter une Geo -->
        <div class="container mt-5">
            <h1 class="mb-5">Ajouter une Geo</h1>

            <?php if ($error) { ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php } ?>

            <form action="" method="POST">
                <div class="mb-3">
                    <label for="nom_lieu" class="form-label">Nom de Geo</label>
                    <input type="text" id="nom_lieu" name="nom_lieu" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="latitude" class="form-label">Latitude</label>
                    <input type="text" id="latitude" name="latitude" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="longitude" class="form-label">Longitude</label>
                    <input type="text" id="longitude" name="longitude" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="type_geographique" class="form-label">Type géographique</label>
                    <textarea id="type_geographique" name="type_geographique" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="importance_historique" class="form-label">Importance historique</label>
                    <textarea id="importance_historique" name="importance_historique" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="fait_culturel" class="form-label">Fait culturel</label>
                    <textarea id="fait_culturel" name="fait_culturel" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea id="description" name="description" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Ajouter Geo</button>
                </div>
            </form>
        </div>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
