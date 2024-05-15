<?php
require_once '../../Model/report.php';
require_once '../../Controller/reportC.php';
if (isset ($_POST ["cause"]) && isset ($_POST ["description"])){
    if (!empty ($_POST ["cause"]) && !empty ($_POST ["description"])){
        $report1 = new report(NULL, $_GET ["idQuestion"], 1, $_POST ["cause"], $_POST["description"]);
        $reportC = new reportC();
        $reportC->createReport($report1);
        header('location:listQuestions.php');
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
    <label for="cause">Cause :</label>
    <select name="cause" id="cause">
        <option value="Violence">Violence</option>
        <option value="Terrorisme">Terrorisme</option>
        <option value="Harcélement">Harcélement</option>
        <option value="Discours haineux ">Discours haineux </option>
        <option value="Fausses Informations">Fausses Informations</option>
        <option value="Suicide">Suicide</option>
        <option value="Contenu indésirable">Contenu indésirable</option>
        <option value="Autre choses">Autres choses</option>
    </select>
    <br><br><br>
    <label for="description"> Description </label>
    <textarea name="description" id="description"></textarea>
    <br><br><br>
    <br>
    <br>
    <input type="submit" value="Submit">
    <br><br>
    <input type="reset" value="Reset">
    <br>
    <br>
</form>

<div id="alerte"> </div>

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
        select{
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
        label[for="description"], #contenu {
            display: inline-block;
            vertical-align: top;
        }
    </style>

<br><br>
<footer class="footer-section pt-120">
    <div class="footer-bg">
        <img src="../assets/images/bg/viewpc.jpg" alt="bg" />
    </div>
    <div class="footer-element">
        <img src="../assets/images/element/element-6.png" alt="element" />
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="footer-top">
                    <div class="footer-logo">
                        <a href="index.php" class="site-logo"
                        ><img src="../assets/images/logo.png" alt="logo"
                            /></a>
                    </div>
                    <ul class="footer-social">
                        <li>
                            <a href="#0"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="footer-widget">
                    <form class="subscribe-form">
                        <label class="subscribe-icon"
                        ><i class="las la-envelope"></i
                            ></label>
                        <input
                                type="text"
                                class="form--control"
                                placeholder="Enter Your Email Address"
                        />
                        <button type="submit" class="btn--base">GET ALART</button>
                    </form>
                    <ul class="footer-list">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="about.php">ABOUT US</a></li>
                        <li><a href="training.php">TRAINING</a></li>
                        <li><a href="master.php">MASTER</a></li>
                        <li><a href="blog.php">NEWS</a></li>
                        <li><a href="event.php">EVENT</a></li>
                        <li><a href="index.php">RECLAMATION</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <div class="copyright-area">
                    <p>Copyright 2024 PIXELPUNKS. Designed By WEBANG</p>
                </div>
            </div>
        </div>
    </div>
</footer>


<style>
    .response_marge {
        margin-top: 20px;
    }

    .some_text {
        font-size: 24px;
        font-weight: bold;
    }

    .some_text span {
        color: #e80000;
    }

    .response_table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-top: 20px;
    }

    .response_table th,
    .response_table td {
        border: 1px solid #e6e6e6;
        padding: 8px;
        text-align: left;
    }

    .response_table th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    /* PHP code for populating table dynamically is omitted */

</style>

</body>

<!-- Mirrored from themeim.com/demo/sword/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 14:45:50 GMT -->
</html>
