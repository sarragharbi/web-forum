<?php
require_once 'showQuestion.php';
require_once '../../Controller/answerC.php';
require_once '../../Model/answer.php';
$idOfTheQuestion = $_GET['idQuestion'];
if (isset ($_POST ["validate"]) AND isset($_GET['idQuestion'])){
    if (!empty ($_POST ["contenu"]) && !empty($_GET['idQuestion'])){
        $answer1 = new answer(NULL, $_POST ["answer"], 1, date('Y-m-d H:i:s'), $idOfTheQuestion);
        $answerC = new answerC();
        $answerC->createAnswer($answer1);
    }
}
$answerC = new answerC();
$list = $answerC->listAnswers($idOfTheQuestion);

?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themeim.com/demo/sword/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 14:45:50 GMT -->
<?php include 'head.php'; ?>
<body>
<?php include 'header.php';?>


<?php
    require 'likesCount.php';
    require 'dislikesCount.php';
?>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-9 mb-3">
            <!-- End of post 1 -->
            <div class="card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
                <div class="row align-items-center">
                    <div class="col-md-8 mb-3 mb-sm-0">
                        <h5>
                            <a href="showOnce.php?idQuestion=<?= $idOfTheQuestion ?>" class="text-primary"><?= $titre ?></a>
                        </h5>
                        <p class="text-sm"><span class="op-6"><?= $contenu ?></span></p>
                        <div class="text-sm op-5"> <a class="text-black mr-2" href="#"><?= $id_auteur ?></a> <p><?= $date_publication ?></p> </div>
                    </div>
                    <div class="col-md-4 op-7">
                        <div class="row text-center op-7">
                            <div class="col px-1"> <span class="d-block text-sm"></span>
                                <a href="like.php?idQuestion=<?= $idOfTheQuestion ?>">
                                    <button class="btn-like" style="background-color: #22ff00;"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button>
                                    <span class="likes-count"><?=$likesCount1?></span>
                                </a>
                            </div>
                            <div class="col px-1"> <span class="d-block text-sm"></span>
                                <a href="dislike.php?idQuestion=<?= $idOfTheQuestion ?>">
                                    <button class="btn-dislike" style="background-color: #bcbcbc;" data-question-id="<?= $idOfTheQuestion ?>"><i class="fa fa-thumbs-down" aria-hidden="true"></i></button>
                                    <span class="dislikes-count"><?=$dislikesCount1?></span>
                                </a>
                            </div>
                            <div class="col px-1"> <span class="d-block text-sm"></span>
                                <a href="deleteQuestion.php?idQuestion=<?= $idOfTheQuestion ?>" style="background-color: #ff0000;" class="btn btn-primary">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col px-1"> <span class="d-block text-sm"></span>
                                <a href="updateQuestion.php?idQuestion=<?= $idOfTheQuestion ?>" style="background-color: #007c08;" class="btn btn-primary">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col px-1"><span class="d-block text-sm"></span>
                                <a href="showOnce.php?idQuestion=<?= $idOfTheQuestion ?>" style="background-color: #007c08;" class="btn btn-primary">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col px-1"><span class="d-block text-sm"></span>
                                <a href="report.php?idQuestion=<?= $idOfTheQuestion ?>" style="background-color: #ff0000;" class="btn btn-primary">
                                    <i class="fa fa-flag" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /End of post 1 -->
        </div>
    </div>
</div>
    <br>
    <hr style="border: 5px solid black;">
    <br>


    <form action="" method="POST">
        <label for="contenu"> Contenu </label>
        <textarea name="contenu" id="contenu" oninput="validateContenu()"></textarea>
        <span id="contenu_span"></span>
        <br>
        <br>
        <br>
        <input type="submit" value="Reply" name= "validate">
        <br>
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
    <br><br>
    <div class="card-header">
        <h2> Replies </h2>
    </div>
    <br><br>

    <?php foreach ($list as $row){ ?>
        <?php
        $contenu = $questionC->censorBadWords($row['contenu']);
        ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-9 mb-3">
                    <!-- End of post 1 -->
                    <div class="card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
                        <div class="row align-items-center">
                            <div class="col-md-8 mb-3 mb-sm-0">
                                <p class="text-sm"><span class="op-6"><?= $contenu ?></span></p>
                                <div class="text-sm op-5"> <a class="text-black mr-2" href="#"><?= $id_auteur ?></a> <p><?= $row['date_publication'] ?></p> </div>
                            </div>
                            <div class="col-md-4 op-7">
                                <div class="row text-center op-7">
                                    <div class="col px-1"> <span class="d-block text-sm"></span>
                                        <a href="deleteAnswer.php?idAnswer=<?= $row['idAnswer']  ?>" style="background-color: #ff0000;" class="btn btn-primary">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="col px-1"> <span class="d-block text-sm"></span>
                                        <a href="updateAnswer.php?idAnswer=<?= $row['idAnswer']  ?>" style="background-color: #007c08;" class="btn btn-primary">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /End of post 1 -->
                </div>
            </div>
        </div>
        <br>
        <br>
        <?php
    }
    ?>




    <br>
    <br>


<?php include 'footer.php';?>
</body>

<!-- Mirrored from themeim.com/demo/sword/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 14:45:50 GMT -->
</html>
