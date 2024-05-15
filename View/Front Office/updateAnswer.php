<?php
require_once '../../Controller/answerC.php';
require_once '../../Model/answer.php';
$idAnswer = $_GET['idAnswer'];
$answerC = new answerC();
$list1 = $answerC->findAnswer($_GET['idAnswer']);
if (isset ($_POST ["contenu"])){
    if (!empty ($_POST ["contenu"])){
        $idQuestion = $answerC->getIdQuestion1($_GET["idAnswer"]);
        $answer = new answer(NULL, $_POST ["contenu"], 1, date('Y-m-d H:i:s'), $idQuestion);
        $r=$answerC->updateAnswer($answer,$_GET["idAnswer"]);
        header('location:showOnce.php?idQuestion=' . $idQuestion);
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
    <?php
    $contenu = $list1['contenu'];
    $contenue = str_replace('<br />', '', $contenu);
    ?>
    <label for="contenu"> Contenu </label>
    <textarea name="contenu" id="contenu" oninput="validateContenu()"> <?php echo $contenue ?> </textarea>
    <span id="contenu_span"></span>
    <br>
    <br>
    <input type="submit" value="Submit">
    <br><br>
    <input type="reset" value="Reset">
    <br>
</form>
<div id="alerte"> </div>
<script>
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
