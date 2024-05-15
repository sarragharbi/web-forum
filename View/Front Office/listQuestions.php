<?php
require '../../Controller/questionC.php';
$questionC = new questionC();
$list = $questionC->listQuestions();
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themeim.com/demo/sword/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 14:45:50 GMT -->
<?php include 'head.php'; ?>
<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">

<style>
    body{
        margin-top:20px;
        background:#eee;
        color: #708090;
    }
    .icon-1x {
        font-size: 24px !important;
    }
    a{
        text-decoration:none;
    }
    .text-primary, a.text-primary:focus, a.text-primary:hover {
        color: #00ADBB!important;
    }
    .text-black, .text-hover-black:hover {
        color: #000 !important;
    }
    .font-weight-bold {
        font-weight: 700 !important;
    }
</style>
<body>
<?php include 'header.php';?>

<br><br>
<form method="GET" style="text-align: center; margin-left: 42%;">
    <div class="form-group row">
        <div>
            <input type="search" name="search" class="DocSearch-Input" placeholder="Search By Title">
        </div>
        <br>
        <br>
        <div>
            <div style="display: inline-block;">
                <button class="btn btn-success" type="submit" style="background-color: black;"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>
</form>


<br>
<br>

<div style="text-align: center;">
    <a href="createQuestion.php" style="background-color: #007C08FF;" class="btn btn-primary" >
        <i class="fa fa-plus-square" aria-hidden="true"></i> Add Question </a>
</div>
<br><br><br>
<iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2F0e85-154-107-246-183.ngrok-free.app%2Fprojet%2FView%2FFront%2FlistQuestions.php&layout&size&width=91&height=20&appId" width="91" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
<style>
    iframe {
        display: block;
        margin: auto;
        text-align: center;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
    }

</style>
<br>
<br>
<?php foreach ($list as $row){ ?>
    <?php
    require 'likesCount.php';
    require 'dislikesCount.php';
    $titre = $questionC->censorBadWords($row['titre']);
    $contenue = $questionC->censorBadWords($row['contenu']);
    ?>

<div class="container">
    <div class="row">
        <div class="col-lg-9 mb-3">
            <!-- End of post 1 -->
            <div class="card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
                <div class="row align-items-center">
                    <div class="col-md-8 mb-3 mb-sm-0">
                        <h5>
                            <a href="showOnce.php?idQuestion=<?= $row['idQuestion'] ?>" class="text-primary"><?= $titre ?></a>
                        </h5>
                        <p class="text-sm"><span class="op-6"><?= $contenue ?></span></p>
                        <div class="text-sm op-5"> <a class="text-black mr-2" href="#"><?= $row['id_auteur'] ?></a> <p><?= $row['date_publication'] ?></p> </div>
                    </div>
                    <div class="col-md-4 op-7">
                        <div class="row text-center op-7">
                            <div class="col px-1"> <span class="d-block text-sm"></span>
                                <a href="like.php?idQuestion=<?= $row['idQuestion'] ?>">
                                    <button class="btn-like" style="background-color: #22ff00;"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button>
                                    <span class="likes-count"><?=$likesCount?></span>
                                </a>
                            </div>
                            <div class="col px-1"> <span class="d-block text-sm"></span>
                                <a href="dislike.php?idQuestion=<?= $row['idQuestion'] ?>">
                                    <button class="btn-dislike" style="background-color: #bcbcbc;" data-question-id="<?= $row['idQuestion'] ?>"><i class="fa fa-thumbs-down" aria-hidden="true"></i></button>
                                    <span class="dislikes-count"><?=$dislikesCount?></span>
                                </a>
                            </div>
                            <div class="col px-1"> <span class="d-block text-sm"></span>
                                <a href="deleteQuestion.php?idQuestion=<?= $row['idQuestion'] ?>" style="background-color: #ff0000;" class="btn btn-primary">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col px-1"> <span class="d-block text-sm"></span>
                                <a href="updateQuestion.php?idQuestion=<?= $row['idQuestion'] ?>" style="background-color: #007c08;" class="btn btn-primary">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col px-1"><span class="d-block text-sm"></span>
                                <a href="showOnce.php?idQuestion=<?= $row['idQuestion'] ?>" style="background-color: #007c08;" class="btn btn-primary">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col px-1"><span class="d-block text-sm"></span>
                                <a href="report.php?idQuestion=<?= $row['idQuestion'] ?>" style="background-color: #ff0000;" class="btn btn-primary">
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
