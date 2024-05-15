<?php
require_once '../../Controller/questionC.php';
require_once '../../Model/question.php';
$questionC = new questionC();
$list = $questionC->findQuestion($_GET['idQuestion']);
if (isset ($_POST ["titre"])&& isset ($_POST ["contenu"])){
    if (!empty ($_POST ["titre"])&& !empty ($_POST ["contenu"]) ){
        $question = new question(NULL, $_POST ["titre"], $_POST ["contenu"], 1, date('Y-m-d H:i:s'));
        $questionC = new questionC();
        $r=$questionC->updateQuestion($question,$_GET['idQuestion']);
        header('location:listQuestions.php');
    }
    else{
        echo "champ invalid";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themeim.com/demo/sword/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 14:45:50 GMT -->
<?php include 'head.php'; ?>
<body>
<?php include 'header.php';?>


<br><br>
<form action="" method="POST">
    <label for="titre"> Titre </label>
    <?php
    $contenue = $list ['contenu'];
    $contenue = str_replace('<br />', '', $contenue);
    ?>
    <input value ='<?php echo $list ['titre']; ?>' type="text" name="titre" id="titre" oninput="validateTitre()">
    <span id="titre_span"></span>
    <br>
    <label for="contenu"> Contenu </label>
    <textarea name="contenu" id="contenu" oninput="validateContenu()"> <?php echo $contenue ?> </textarea>
    <span id="contenu_span"></span>
    <br>
    <br>
    <br>
    <input type="submit" value="Submit">
    <br><br>
    <input type="reset" value="Reset">
    <br>
</form>
<div id="alerte"> </div>

<script>
    function validateTitre() {
        const titreInput = document.getElementById('titre');
        const titreSpan = document.getElementById('titre_span');

        if (titreInput.value.length >= 10) {
            titreSpan.innerText = 'Correct';
            titreSpan.style.color = 'green';
        } else {
            titreSpan.innerText = 'Le titre doit dépasser 10 caractères.';
            titreSpan.style.color = 'red';
        }
    }

    function validateContenu() {
        const contenuInput = document.getElementById('contenu');
        const contenuSpan = document.getElementById('contenu_span');

        if (contenuInput.value.length >= 20) {
            contenuSpan.innerText = 'Correct';
            contenuSpan.style.color = 'green';
        } else {
            contenuSpan.innerText = 'Le contenu doit dépasser 20 caractères.';
            contenuSpan.style.color = 'red';
        }
    }
</script>

<style>
    form {
        margin: 0 auto;
        width: 50%;
        text-align: center; /* Ajout d'un alignement centré pour les boutons */
    }
    label {
        display: inline-block;
        width: 20%;
        margin-bottom: 5px;
        text-align: right; /* Ajout d'un alignement à droite pour les labels */
    }
    input[type="text"], textarea, input[type="number"] {
        display: inline-block;
        width: 75%;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 10px;
    }
    #alerte {
        display: inline-block;
        color: red;
        margin-bottom: 10px;
        text-align: center;
    }
    .btn-container {
        margin-top: 10px; /* Ajout d'une marge supérieure pour le conteneur */
        text-align: center; /* Ajout d'un alignement centré pour le conteneur */
    }
    input[type="submit"], input[type="reset"] {
        background-color: #007C08FF;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 10px;
    }
    label[for="contenu"], #contenu {
        display: inline-block;
        vertical-align: top;
    }
</style>



<?php include 'footer.php';?>
</body>

<!-- Mirrored from themeim.com/demo/sword/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 14:45:50 GMT -->
</html>
