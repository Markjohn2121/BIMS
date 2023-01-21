<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/jquery-3.6.3.js"></script>
    <link rel="stylesheet" href="../bootstrap5/css/bootstrap.min.css">
    <script src="../bootstrap5/js/bootstrap.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="../loading/loading.css">
    <link rel="stylesheet" href="../dashboard/style/style.css">
    <link rel="stylesheet" href="../Header/style/header.css">
    <link rel="stylesheet" href="../menu/main/style/style.css">
    <link rel="stylesheet" href="../menu/officails/style/style.css">
    <link rel="stylesheet" href="../menu/resident/style/style.css">
    <title>Dashboard</title>
</head>

<body>

    <div class="grid-container">
        <nav id="nav" class="sm">
            <button id="back">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);">
                    <path fill="currentColor" d="m19.61 18l4.86-4.86a1 1 0 0 0-1.41-1.41l-4.86 4.81l-4.89-4.89a1 1 0 0 0-1.41 1.41L16.78 18L12 22.72a1 1 0 1 0 1.41 1.41l4.77-4.77l4.74 4.74a1 1 0 0 0 1.41-1.41Z" class="clr-i-outline clr-i-outline-path-1" />
                    <path fill="currentColor" d="M18 34a16 16 0 1 1 16-16a16 16 0 0 1-16 16Zm0-30a14 14 0 1 0 14 14A14 14 0 0 0 18 4Z" class="clr-i-outline clr-i-outline-path-2" />
                    <path fill="none" d="M0 0h36v36H0z" />
                </svg>
            </button>

            <div class="logo-con">

                <img id="logo" src="../assets/QSU Logo.png">
            </div>

            <div class="menu-1">
                <div class="dstitle">
                    <h3>Dashboard</h3>
                </div>

                <div class="menu">
                    <div class="dsmenu">
                        <button class="menu_btn">
                            <p class="menu_title"><svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20">
                                    <path fill="currentColor" d="M6.75 9a3.25 3.25 0 1 0 0-6.5a3.25 3.25 0 0 0 0 6.5ZM17 6.5a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0Zm-8 8c0-1.704.775-3.228 1.993-4.237A1.991 1.991 0 0 0 10 10H3.5a2 2 0 0 0-2 2s0 4 5.25 4c.953 0 1.733-.132 2.371-.347A5.522 5.522 0 0 1 9 14.5Zm3.065-3.058a2 2 0 0 1-1.43 2.478l-.462.118a4.734 4.734 0 0 0 .01 1.016l.35.083a2 2 0 0 1 1.456 2.519l-.127.422c.258.204.537.378.835.518l.325-.344a2 2 0 0 1 2.91.002l.337.358c.292-.135.568-.302.822-.498l-.156-.556a2 2 0 0 1 1.43-2.479l.46-.117a4.7 4.7 0 0 0-.01-1.017l-.348-.082a2 2 0 0 1-1.456-2.52l.126-.421a4.318 4.318 0 0 0-.835-.519l-.325.344a2 2 0 0 1-2.91-.001l-.337-.358a4.31 4.31 0 0 0-.821.497l.156.557Zm2.434 4.058a1 1 0 1 1 0-2a1 1 0 0 1 0 2Z" />
                                </svg> Barangay Officials</p>
                            <svg class="hover-effect" stroke-width="4" stroke="currentColor" viewbox="0 0 24 24" fill="none" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="dsmenu">
                        <button class="menu_btn">
                            <p class="menu_title"><svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20">
                                    <path fill="currentColor" d="M7.879 7.5c.504-.61 1.267-1 2.121-1c.854 0 1.617.39 2.121 1a2.75 2.75 0 1 1-4.243 0Zm5.871 1.75c0-.632-.156-1.228-.432-1.75H17.5A1.5 1.5 0 0 1 19 9v.5c0 1.587-1.206 3.212-3.315 3.784A2.5 2.5 0 0 0 13.5 12h-.95a3.74 3.74 0 0 0 1.2-2.75ZM13.5 13a1.496 1.496 0 0 1 1.5 1.5v.5c0 1.971-1.86 4-5 4c-3.14 0-5-2.029-5-4v-.5A1.496 1.496 0 0 1 6.5 13h7ZM1 9.5c0 1.587 1.206 3.212 3.315 3.784A2.5 2.5 0 0 1 6.5 12h.95a3.74 3.74 0 0 1-1.2-2.75c0-.632.156-1.228.433-1.75H2.5A1.5 1.5 0 0 0 1 9v.5Zm7.75-5.75a2.75 2.75 0 1 0-5.5 0a2.75 2.75 0 0 0 5.5 0Zm8 0a2.75 2.75 0 1 0-5.5 0a2.75 2.75 0 0 0 5.5 0Z" />
                                </svg>Residents</p>
                            <svg class="hover-effect" stroke-width="4" stroke="currentColor" viewbox="0 0 24 24" fill="none" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="dsmenu">
                        <button class="menu_btn">
                            <p class="menu_title"><svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);">
                                    <circle cx="22" cy="24" r="2" fill="currentColor" />
                                    <path fill="currentColor" d="M29.777 23.479A8.64 8.64 0 0 0 22 18a8.64 8.64 0 0 0-7.777 5.479L14 24l.223.521A8.64 8.64 0 0 0 22 30a8.64 8.64 0 0 0 7.777-5.479L30 24zM22 28a4 4 0 1 1 4-4a4.005 4.005 0 0 1-4 4zM7 17h5v2H7zm0-5h12v2H7zm0-5h12v2H7z" />
                                    <path fill="currentColor" d="M22 2H4a2.006 2.006 0 0 0-2 2v24a2.006 2.006 0 0 0 2 2h8v-2H4V4h18v11h2V4a2.006 2.006 0 0 0-2-2Z" />
                                </svg>Blotter Records</p>
                            <svg class="hover-effect" stroke-width="4" stroke="currentColor" viewbox="0 0 24 24" fill="none" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="dsmenu">
                        <button class="menu_btn">
                            <p class="menu_title"><svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 15 15">
                                    <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                                        <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0h12A1.5 1.5 0 0 1 15 1.5v4l-.8-.601a4.5 4.5 0 0 0-6.3 6.3l.1.134V15H1.5A1.5 1.5 0 0 1 0 13.5v-12ZM8 5H3V4h5v1ZM3 8h3V7H3v1Z" />
                                        <path d="M11.5 5A3.5 3.5 0 0 0 9 10.95v3.55a.5.5 0 0 0 .8.4l1.7-1.275l1.7 1.275a.5.5 0 0 0 .8-.4v-3.55A3.5 3.5 0 0 0 11.5 5ZM10 13.5v-1.837c.455.216.963.337 1.5.337s1.045-.12 1.5-.337V13.5l-1.2-.9a.5.5 0 0 0-.6 0l-1.2.9Z" />
                                    </g>
                                </svg>Certificates</p>
                            <svg class="hover-effect" stroke-width="4" stroke="currentColor" viewbox="0 0 24 24" fill="none" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="dsmenu">
                        <button class="menu_btn">
                            <p class="menu_title"><svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M17 17q.625 0 1.062-.438q.438-.437.438-1.062t-.438-1.062Q17.625 14 17 14t-1.062.438q-.438.437-.438 1.062t.438 1.062Q16.375 17 17 17Zm0 3q.775 0 1.425-.363q.65-.362 1.05-.962q-.55-.325-1.175-.5T17 18q-.675 0-1.3.175t-1.175.5q.4.6 1.05.962Q16.225 20 17 20Zm0 2q-2.075 0-3.537-1.462Q12 19.075 12 17q0-2.075 1.463-3.538Q14.925 12 17 12t3.538 1.462Q22 14.925 22 17q0 2.075-1.462 3.538Q19.075 22 17 22Zm-5 0q-3.475-.875-5.737-3.988Q4 14.9 4 11.1V5l8-3l8 3v5.675q-.65-.325-1.462-.5Q17.725 10 17 10q-2.9 0-4.95 2.05Q10 14.1 10 17q0 1.55.588 2.8q.587 1.25 1.487 2.175q-.025 0-.037.013Q12.025 22 12 22Z" />
                                </svg>Barangay Information</p>
                            <svg class="hover-effect" stroke-width="4" stroke="currentColor" viewbox="0 0 24 24" fill="none" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                        </button>
                    </div>

                </div>

                <!-- menu 2 -->

                <div class="menu-2">
                    <div class="dstitle">
                        <h3>Reports</h3>
                    </div>

                    <div class="menu">

                        <div class="dsmenu">
                            <p id="report_btn"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M7.2 11.2c1.77 0 3.2 1.43 3.2 3.2c0 1.77-1.43 3.2-3.2 3.2c-1.77 0-3.2-1.43-3.2-3.2c0-1.77 1.43-3.2 3.2-3.2m7.6 4.8a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m.4-12A4.8 4.8 0 0 1 20 8.8c0 2.65-2.15 4.8-4.8 4.8a4.8 4.8 0 0 1-4.8-4.8c0-2.65 2.15-4.8 4.8-4.8Z" />
                                </svg>Reports</p>
                        </div>
                        <br>
                        <div class="dsmenu">
                            <p id="logout_btn"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);">
                                    <path fill="currentColor" d="M16 13v-2H7V8l-5 4l5 4v-3z" />
                                    <path fill="currentColor" d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z" />
                                </svg>Logout</p>
                        </div>

                    </div>


                </div>

            </div>




        </nav>



        <section>




            <header>
                <button id="humburger_menu"><img src="../assets/menu-hamburger.svg" alt="" srcset=""></button>
                <?php include_once("../Header/header.php"); ?>
            </header>
            <div class="sec">Notif</div>
            <div class="sec "><?php include("../menu/main/main_menu.php"); ?></div>
            <div class="sec "><?php include("../menu/officails/officails_menu.php"); ?></div>
            <div class="sec selected"><?php include("../menu/resident/resident_menu.php"); ?></div>
            <div class="sec"><?php include("../menu/blotter/blotte_menu.php"); ?></div>
            <div class="sec"><?php include("../menu/certificate/certificate_menu.php"); ?></div>
            <div class="sec"><?php include("../menu/br_information/information_menu.php"); ?></div>
            <div class="sec">Reports</div>
            <div class="sec">LogOut</div>
            <!-- Main menu dashboards -->

        </section>

    </div>

    <!-- Official Modal -->
<?php include_once("../menu/officails/official-modal.php") ?>





<!-- Loading -->
<?php  include_once("../loading/loadingmodal.php") ?>  


    <!-- /////// -->
    <script src="../dashboard/js/ajax.js"></script>
    <script src="../dashboard/js/menu.js"></script>
    <script src="../menu/main/js/table.js"></script>
    <script src="../menu/officails/js/official.js"></script>
    <script src="../dashboard/js/GetData.js"></script>
    
</body>

</html>