<?php

include '../../controller/geoConroller.php';
$geocontroller = new geocontroller();
$list = $geocontroller->listgeo();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Liste des geo</title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <div class="container mt-5">
      <h1 class="text-center">Liste des Époques</h1>
      <table class="table table-striped mt-4">
        <thead>
          <tr>
                  <th>#ID</th>
                  <th>Nom</th>
                  <th>latitude</th>
                  <th>long</th>
                  <th>type</th>
                  <th>hist</th>
                  <th>imp</th>
                  <th>fait</th>
                  <th>descrp</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($list as $chronogeo) { // Start of foreach loop with curly braces
          ?>
            <tr>
                <td><?= $chronogeo['id_geographique']; ?></td>
                <td><?= $chronogeo['nom_lieu']; ?></td>
                <td><?= $chronogeo['latitude']; ?></td>
                <td><?= $chronogeo['longitude']; ?></td>
                <td><?= $chronogeo['type_geographique']; ?></td>
                <td><?= $chronogeo['importance_historique']; ?></td>
                <td><?= $chronogeo['fait_culturel']; ?></td>
                <td><?= $chronogeo['description']; ?></td>
                
                <td align="center">
                    <form method="POST" action="updateEpoque.php">
                      <input type="submit" name="update" value="Update">
                      <input type="hidden" value=<?PHP echo $chronogeo['id_geographique']; ?> name="id_geographique">
                    </form>
                </td>
                <td>
                  <a href="deletegeo.php?id_geographique=<?php echo $chronogeo['id_geographique']; ?>">Delete</a>
                  <input type="hidden" value=<?PHP echo $chronogeo['id_geographique']; ?> name="id_geographique">

                </td>
            </tr>
          <?php
          } // End of foreach loop
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
