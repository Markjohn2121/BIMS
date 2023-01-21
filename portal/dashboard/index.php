<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./sampleQuery/jquery-3.6.3.js"></script>
    <link rel="stylesheet" href="../dashboard/style/style.css">
    <link rel="stylesheet" href="../Header/style/header.css">
   <link rel="stylesheet" href="../menu/main/style/style.css">
    <title>Dashboard</title>
</head>

<body>

    <div class="grid-container">
        <nav id="nav" class="sm">
            <button id="back">
            <img  src="../assets/remove-line.svg" alt="" srcset="">
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
                        <p class="menu_title"><img src="../assets/officails-20-filled.svg"> Barangay Officails</p>
                        <svg stroke-width="4" stroke="currentColor" viewbox="0 0 24 24" fill="none" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linejoin="round" stroke-linecap="round"></path>
                        </svg>
                    </button>
                    </div>

                    <div class="dsmenu">
                        <button class="menu_btn">
                        <p class="menu_title"><img src="../assets/poeple.svg">Residents</p>
                        <svg stroke-width="4" stroke="currentColor" viewbox="0 0 24 24" fill="none" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linejoin="round" stroke-linecap="round"></path>
                        </svg>
                    </button>
                    </div>

                    <div class="dsmenu">
                        <button class="menu_btn">
                        <p class="menu_title"><img src="../assets/data-view-alt.svg">Blotter Records</p>
                        <svg stroke-width="4" stroke="currentColor" viewbox="0 0 24 24" fill="none" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linejoin="round" stroke-linecap="round"></path>
                        </svg>
                    </button>
                    </div>

                    <div class="dsmenu">
                        <button class="menu_btn">
                        <p class="menu_title"><img src="../assets/certificate-solid.svg">Certificates</p>
                        <svg stroke-width="4" stroke="currentColor" viewbox="0 0 24 24" fill="none" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linejoin="round" stroke-linecap="round"></path>
                        </svg>
                    </button>
                    </div>

                    <div class="dsmenu">
                        <button class="menu_btn">
                        <p class="menu_title"><img src="../assets/admin-panel-settings.svg">Barangay Information</p>
                        <svg stroke-width="4" stroke="currentColor" viewbox="0 0 24 24" fill="none" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg">
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
                        <p><img src="../assets/report-bubble.svg">Reports</p>
                    </div>
                    <br>
                    <div class="dsmenu">
                        <p><img src="../assets/log-out.svg">Logout</p>
                    </div>

                </div>


            </div>

            </div>


        

        </nav>



        <section>

            <header>
            <button id="humburger_menu" ><img src="../assets/menu-hamburger.svg" alt="" srcset=""></button>
                <?php include_once("../Header/header.php"); ?>
            </header>

            <div class="sec"><?php include("../menu/main/main_menu.php"); ?></div>
<!-- Main menu dashboards -->

        </section>

    </div>

    <script src="../dashboard/js/menu.js"></script>
</body>

</html>