<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/konrix/layouts/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 19:44:21 GMT -->
<head>
    <meta charset="utf-8">
    <title>Dashboard | Konrix - Responsive Tailwind Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="coderthemes" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>
</head>

<style>
    .table-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50vh; /* Set container height to full viewport height */
    }

    .table {
        width: 90%; /* Adjust the width as needed */
        border-collapse: collapse; /* Collapse the borders so adjacent cells share borders */
    }

    .table th,
    .table td {
        border: 1px solid #ddd; /* Add border to table cells */
        padding: 8px; /* Add padding to table cells for better readability */
    }

    .table th {
        background-color: #f2f2f2; /* Add background color to table header cells */
    }

    .centered-div {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<body>

<div class="flex wrapper">

    <!-- Sidenav Menu -->
    <div class="app-menu">

        <!-- Sidenav Brand Logo -->
        <a href="index.php" class="logo-box">
            <!-- Light Brand Logo -->
            <div class="logo-light">
                <img src="assets/images/logo-light.png" class="logo-lg h-6" alt="Light logo">
                <img src="assets/images/logo-sm.png" class="logo-sm" alt="Small logo">
            </div>

            <!-- Dark Brand Logo -->
            <div class="logo-dark">
                <img src="assets/images/logo-dark.png" class="logo-lg h-6" alt="Dark logo">
                <img src="assets/images/logo-sm.png" class="logo-sm" alt="Small logo">
            </div>
        </a>

        <!-- Sidenav Menu Toggle Button -->
        <button id="button-hover-toggle" class="absolute top-5 end-2 rounded-full p-1.5">
            <span class="sr-only">Menu Toggle Button</span>
            <i class="mgc_round_line text-xl"></i>
        </button>

        <!--- Menu -->
        <div class="srcollbar" data-simplebar>
            <ul class="menu" data-fc-type="accordion">
                <li class="menu-title">Menu</li>

                <li class="menu-item">
                    <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                        <span class="menu-icon"><i class="mgc_file_check_line"></i></span>
                        <span class="menu-text"> Forum </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="sub-menu hidden">
                        <li class="menu-item">
                            <a href="viewForum.php" class="menu-link">
                                <span class="menu-text">Forum</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Help Box Widget -->
            <div class="my-10 mx-5">
                <div class="help-box p-6 bg-black/5 text-center rounded-md">
                    <div class="flex justify-center mb-4">
                        <svg width="30" height="18" aria-hidden="true">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15 0c-4 0-6.5 2-7.5 6 1.5-2 3.25-2.75 5.25-2.25 1.141.285 1.957 1.113 2.86 2.03C17.08 7.271 18.782 9 22.5 9c4 0 6.5-2 7.5-6-1.5 2-3.25 2.75-5.25 2.25-1.141-.285-1.957-1.113-2.86-2.03C20.42 1.728 18.718 0 15 0ZM7.5 9C3.5 9 1 11 0 15c1.5-2 3.25-2.75 5.25-2.25 1.141.285 1.957 1.113 2.86 2.03C9.58 16.271 11.282 18 15 18c4 0 6.5-2 7.5-6-1.5 2-3.25 2.75-5.25 2.25-1.141-.285-1.957-1.113-2.86-2.03C12.92 10.729 11.218 9 7.5 9Z" fill="#38BDF8"></path>
                        </svg>
                    </div>
                    <h5 class="mb-2">Unlimited Access</h5>
                    <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                    <a href="javascript: void(0);" class="btn btn-sm bg-secondary text-white">Upgrade</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Sidenav Menu End  -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="page-content">

        <!-- Topbar Start -->
        <header class="app-header flex items-center px-4 gap-3">
            <!-- Sidenav Menu Toggle Button -->
            <button id="button-toggle-menu" class="nav-link p-2">
                <span class="sr-only">Menu Toggle Button</span>
                <span class="flex items-center justify-center h-6 w-6">
                    <i class="mgc_menu_line text-xl"></i>
                </span>
            </button>

            <!-- Topbar Brand Logo -->
            <a href="index.php" class="logo-box">
                <!-- Light Brand Logo -->
                <div class="logo-light">
                    <img src="assets/images/logo-light.png" class="logo-lg h-6" alt="Light logo">
                    <img src="assets/images/logo-sm.png" class="logo-sm" alt="Small logo">
                </div>

                <!-- Dark Brand Logo -->
                <div class="logo-dark">
                    <img src="assets/images/logo-dark.png" class="logo-lg h-6" alt="Dark logo">
                    <img src="assets/images/logo-sm.png" class="logo-sm" alt="Small logo">
                </div>
            </a>

            <!-- Topbar Search Modal Button -->
            <button type="button" data-fc-type="modal" data-fc-target="topbar-search-modal" class="nav-link p-2 me-auto">
                <span class="sr-only">Search</span>
                <span class="flex items-center justify-center h-6 w-6">
                    <i class="mgc_search_line text-2xl"></i>
                </span>
            </button>

            <!-- Language Dropdown Button -->
            <div class="relative">
                <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button" class="nav-link p-2 fc-dropdown">
                    <span class="flex items-center justify-center h-6 w-6">
                        <img src="assets/images/flags/us.jpg" alt="user-image" class="h-4 w-6">
                    </span>
                </button>
                <div class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-40 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                    <!-- item-->
                    <a href="javascript:void(0);" class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                        <img src="assets/images/flags/germany.jpg" alt="user-image" class="h-4">
                        <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                        <img src="assets/images/flags/italy.jpg" alt="user-image" class="h-4">
                        <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                        <img src="assets/images/flags/spain.jpg" alt="user-image" class="h-4">
                        <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                        <img src="assets/images/flags/russia.jpg" alt="user-image" class="h-4">
                        <span class="align-middle">Russian</span>
                    </a>
                </div>
            </div>

            <!-- Fullscreen Toggle Button -->
            <div class="md:flex hidden">
                <button data-toggle="fullscreen" type="button" class="nav-link p-2">
                    <span class="sr-only">Fullscreen Mode</span>
                    <span class="flex items-center justify-center h-6 w-6">
                        <i class="mgc_fullscreen_line text-2xl"></i>
                    </span>
                </button>
            </div>

            <!-- Notification Bell Button -->
            <div class="relative md:flex hidden">
                <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button" class="nav-link p-2">
                    <span class="sr-only">View notifications</span>
                    <span class="flex items-center justify-center h-6 w-6">
                        <i class="mgc_notification_line text-2xl"></i>
                    </span>
                </button>
                <div class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-80 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg">

                    <div class="p-2 border-b border-dashed border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between">
                            <h6 class="text-sm"> Notification</h6>
                            <a href="javascript: void(0);" class="text-gray-500 underline">
                                <small>Clear All</small>
                            </a>
                        </div>
                    </div>

                    <div class="p-4 h-80" data-simplebar>

                        <h5 class="text-xs text-gray-500 mb-2">Today</h5>

                        <a href="javascript:void(0);" class="block mb-4">
                            <div class="card-body">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <div class="flex justify-center items-center h-9 w-9 rounded-full bg text-white bg-primary">
                                            <i class="mgc_message_3_line text-lg"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow truncate ms-2">
                                        <h5 class="text-sm font-semibold mb-1">Datacorp <small class="font-normal text-gray-500 ms-1">1 min ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript:void(0);" class="block mb-4">
                            <div class="card-body">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <div class="flex justify-center items-center h-9 w-9 rounded-full bg-info text-white">
                                            <i class="mgc_user_add_line text-lg"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow truncate ms-2">
                                        <h5 class="text-sm font-semibold mb-1">Admin <small class="font-normal text-gray-500 ms-1">1 hr ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">New user registered</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript:void(0);" class="block mb-4">
                            <div class="card-body">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/users/avatar-2.jpg" class="rounded-full h-9 w-9" alt="">
                                    </div>
                                    <div class="flex-grow truncate ms-2">
                                        <h5 class="text-sm font-semibold mb-1">Cristina Pride <small class="font-normal text-gray-500 ms-1">1 day ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <h5 class="text-xs text-gray-500 mb-2">Yesterday</h5>

                        <a href="javascript:void(0);" class="block mb-4">
                            <div class="card-body">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <div class="flex justify-center items-center h-9 w-9 rounded-full bg-primary text-white">
                                            <i class="mgc_message_1_line text-lg"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow truncate ms-2">
                                        <h5 class="text-sm font-semibold mb-1">Datacorp</h5>
                                        <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript:void(0);" class="block">
                            <div class="card-body">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/users/avatar-4.jpg" class="rounded-full h-9 w-9" alt="">
                                    </div>
                                    <div class="flex-grow truncate ms-2">
                                        <h5 class="text-sm font-semibold mb-1">Karen Robinson</h5>
                                        <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <a href="javascript:void(0);" class="p-2 border-t border-dashed border-gray-200 dark:border-gray-700 block text-center text-primary underline font-semibold">
                        View All
                    </a>
                </div>
            </div>

            <!-- Light/Dark Toggle Button -->
            <div class="flex">
                <button id="light-dark-mode" type="button" class="nav-link p-2">
                    <span class="sr-only">Light/Dark Mode</span>
                    <span class="flex items-center justify-center h-6 w-6">
                        <i class="mgc_moon_line text-2xl"></i>
                    </span>
                </button>
            </div>

            <!-- Profile Dropdown Button -->
            <div class="relative">
                <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button" class="nav-link">
                    <img src="assets/images/users/user-6.jpg" alt="user-image" class="rounded-full h-10">
                </button>
                <div class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-44 z-50 transition-[margin,opacity] duration-300 mt-2 bg-white shadow-lg border rounded-lg p-2 border-gray-200 dark:border-gray-700 dark:bg-gray-800">
                    <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="pages-gallery.php">
                        <i class="mgc_pic_2_line  me-2"></i>
                        <span>Gallery</span>
                    </a>
                    <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="apps-kanban.php">
                        <i class="mgc_task_2_line  me-2"></i>
                        <span>Kanban</span>
                    </a>
                    <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="auth-login.php">
                        <i class="mgc_lock_line  me-2"></i>
                        <span>Lock Screen</span>
                    </a>
                    <hr class="my-2 -mx-2 border-gray-200 dark:border-gray-700">
                    <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="auth-login.php">
                        <i class="mgc_exit_line  me-2"></i>
                        <span>Log Out</span>
                    </a>
                </div>
            </div>
        </header>
        <!-- Topbar End -->



        <?php
        require_once '../../Controller/questionC.php';
        $questionC = new questionC();
        $list = $questionC->listQuestions();
        ?>

        <br><br>
        <h2 style="text-align: center;">Forum</h2>
        <br>
        <br>
        <div class="d-flex justify-content-center align-items-center">
            <form method="GET">
                <div class="form-group row" style="align-items: center; margin-left: 42%">
                    <div>
                        <input type="search" name="search" class="DocSearch-Input form-control" placeholder="Search By Title">
                    </div>
                    <div>
                        <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>

        <br>
        <div class="centered-div">
            <a href="addQuestion.php">
                <button type="button" class="btn btn-secondary" style="height:40px;" data-toggle="modal" data-target="#myModal">
                    Add Question
                </button>
            </a>
            <button onclick="window.print();" id="print-btn" type="button" class="btn btn-secondary" style="height:40px;"> Print</button>
        </div>
        <br><br><br><br><br><br>
        <div class="table-container">
            <table class="table">
                <thead>
                <tr>
                    <th class="text-center">ID Question</th>
                    <th class="text-center">Titre</th>
                    <th class="text-center">Contenu</th>
                    <th class="text-center">Id Auteur</th>
                    <th class="text-center">Date Publication</th>
                    <th class="text-center">Likes</th>
                    <th class="text-center">Dislikes</th>
                    <th class="text-center">Reports</th>
                    <th class="text-center" colspan="3">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($list as $row) { ?>
                    <?php
                    require 'likesCount.php';
                    require 'dislikesCount.php';
                    require 'reportsCount.php';
                    ?>
                    <tr>
                        <td><?= $row["idQuestion"] ?></td>
                        <td><?= $row["titre"] ?></td>
                        <td><?= $row["contenu"] ?></td>
                        <td><?= $row["id_auteur"] ?></td>
                        <td><?= $row["date_publication"] ?></td>
                        <td><?= $likesCount ?></td>
                        <td><?= $dislikesCount ?></td>
                        <td><?= $reportsCount ?></td>
                        <td><a href="viewAnswers.php?idQuestion=<?= $row['idQuestion'] ?>"><button class="btn btn-primary" style="height:40px">Réponses</button></a></td>
                        <td><a href="updateQuestionAdmin.php?idQuestion=<?= $row['idQuestion'] ?>"><button class="btn btn-primary" style="height:40px">Edit</button></a></td>
                        <td><a href="deleteQuestionAdmin.php?idQuestion=<?= $row['idQuestion'] ?>"><button class="btn btn-danger" style="height:40px">Delete</button></a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <br><br><br><br><br>

        <br><br><br>
    </div>

</div>

<!-- Back to Top Button -->

<!-- Plugin Js -->
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/libs/%40frostui/tailwindcss/frostui.js"></script>

<!-- App Js -->
<script src="assets/js/app.js"></script>

<!-- Apexcharts js -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Dashboard Project Page js -->
<script src="assets/js/pages/dashboard.js"></script>

</body>


<!-- Mirrored from coderthemes.com/konrix/layouts/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 19:44:21 GMT -->
</html>