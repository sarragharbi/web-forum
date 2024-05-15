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
                                <a href="deleteQuestion.php?idQuestion=<?= $idOfTheQuestion ?>" style="background-color: #ff0000;" class="btn btn-primary">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col px-1"> <span class="d-block text-sm"></span>
                                <a href="updateQuestion.php?idQuestion=<?= $idOfTheQuestion ?>" style="background-color: #007c08;" class="btn btn-primary">
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