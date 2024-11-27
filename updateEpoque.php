<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une Époque - ChronoVoyage</title>
    <!-- Fichiers CSS du template admin -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Style personnalisé pour le thème violet -->
    <style>
        /* Couleurs personnalisées pour le thème violet */
        body {
            background-color: #f8f9fc; /* Fond clair */
        }

        .sidebar {
            background-color: #6f42c1 !important; /* Couleur violette pour la barre latérale */
        }

        .sidebar .nav-item .nav-link {
            color: #ffffff; /* Texte blanc pour les liens */
        }

        .sidebar .nav-item .nav-link:hover {
            background-color: #5a31b1; /* Survol avec un violet plus foncé */
        }

        .sidebar .sidebar-brand {
            color: #ffffff; /* Texte blanc pour le logo */
        }

        .sidebar .sidebar-brand:hover {
            color: #d1d3e2; /* Couleur clair pour le survol */
        }

        .navbar {
            background-color: #4e73df; /* Violet foncé pour la barre de navigation */
        }

        .navbar-nav .nav-item .nav-link {
            color: #ffffff; /* Liens en blanc */
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #e3e6f0; /* Liens en couleur claire au survol */
        }

        .card {
            background-color: #ffffff; /* Fond blanc pour les cartes */
            border: 1px solid #d1d3e2; /* Bordure grise pour les cartes */
        }

        .btn-primary {
            background-color: #6f42c1; /* Couleur violette pour les boutons */
            border-color: #5a31b1;
        }

        .btn-primary:hover {
            background-color: #5a31b1;
            border-color: #4e2a8b;
        }
    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-history"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ChronoVoyage</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="dashboard.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tableau de Bord</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">Gestion des Époques</div>
            <li class="nav-item">
                <a class="nav-link" href="listEpoques.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Liste des Époques</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addEpoque.html">
                    <i class="fas fa-fw fa-plus-circle"></i>
                    <span>Ajouter une Époque</span>
                </a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Navbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                </nav>

                <!-- Page Content -->
                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">Modifier une Époque</h1>
                    <?php if ($error): ?>
                        <div class="alert alert-danger">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>

                    <form action="updateEpoque.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_epoque" value="<?php echo htmlspecialchars($_POST['id_epoque'] ?? ''); ?>">

                        <div class="form-group">
                            <label for="nom_epoque">Nom de l'Époque</label>
                            <input type="text" name="nom_epoque" id="nom_epoque" class="form-control" value="<?php echo htmlspecialchars($chrono['nom_epoque'] ?? ''); ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" rows="4" class="form-control" required><?php echo htmlspecialchars($chrono['description'] ?? ''); ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="periode_debut">Période de Début</label>
                            <input type="date" name="periode_debut" id="periode_debut" class="form-control" value="<?php echo htmlspecialchars($chrono['periode_debut'] ?? ''); ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="periode_fin">Période de Fin</label>
                            <input type="date" name="periode_fin" id="periode_fin" class="form-control" value="<?php echo htmlspecialchars($chrono['periode_fin'] ?? ''); ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="groupes_sociaux">Groupes Sociaux</label>
                            <textarea name="groupes_sociaux" id="groupes_sociaux" rows="3" class="form-control"><?php echo htmlspecialchars($chrono['groupes_sociaux'] ?? ''); ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="patrimoine">Patrimoine</label>
                            <textarea name="patrimoine" id="patrimoine" rows="3" class="form-control"><?php echo htmlspecialchars($chrono['patrimoine'] ?? ''); ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="realisation_majeures">Réalisations Majeures</label>
                            <textarea name="realisation_majeures" id="realisation_majeures" rows="3" class="form-control"><?php echo htmlspecialchars($chrono['realisation_majeures'] ?? ''); ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="faits_interessants">Faits Intéressants</label>
                            <textarea name="faits_interessants" id="faits_interessants" rows="3" class="form-control"><?php echo htmlspecialchars($chrono['faits_interessants'] ?? ''); ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control-file">
                        </div>

                        <button type="submit" class="btn btn-primary">Enregistrer les Modifications</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- JS et les scripts nécessaires du template Admin -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
