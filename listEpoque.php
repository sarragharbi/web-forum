<?php
include '../../controller/epoqueConroller.php';
$epoquecontroller = new epoquecontroller();
$list = $epoquecontroller->listEpoque();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Liste des Époques - ChronoVoyage</title>
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
            <li>
                <a href="dashboard.php">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="active">
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

        <!-- Liste des époques -->
        <div class="container mt-5">
            <h1 class="text-center">Liste des Époques</h1>
            <table class="table table-striped mt-4">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>PD</th>
                        <th>PF</th>
                        <th>GS</th>
                        <th>PAT</th>
                        <th>RM</th>
                        <th>FI</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list as $chrono) { ?>
                        <tr>
                            <td><?= $chrono['id_epoque']; ?></td>
                            <td><?= $chrono['nom_epoque']; ?></td>
                            <td><?= $chrono['description']; ?></td>
                            <td><?= $chrono['periode_debut']; ?></td>
                            <td><?= $chrono['periode_fin']; ?></td>
                            <td><?= $chrono['groupes_sociaux']; ?></td>
                            <td><?= $chrono['patrimoine']; ?></td>
                            <td><?= $chrono['realisation_majeures']; ?></td>
                            <td><?= $chrono['faits_interessants']; ?></td>
                            <td align="center">
                                <form method="POST" action="updateEpoque.php">
                                    <input type="submit" name="update" value="Update" class="btn btn-warning">
                                    <input type="hidden" value="<?= $chrono['id_epoque']; ?>" name="id_epoque">
                                </form>
                            </td>
                            <td>
                                <a href="deleteEpoque.php?id_epoque=<?= $chrono['id_epoque']; ?>" class="btn btn-danger">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
