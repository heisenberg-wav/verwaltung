<?php

?>
<!doctype html>

<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"> 
        
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="statistic.css">
        
        <title>Statistiken</title>

        <script>
            var today = new Date();
            var date = today.getDate()+'.'+(today.getMonth()+1)+'.'+today.getFullYear();
            var time = "0" + today.getHours() + ":" + today.getMinutes();

            function setTime(){
                time = 0;
                time = today.getHours() + ":" + today.getMinutes();
            }
            

            function writeTime(){
                document.write(time);
            }

            function writeDate(){
                document.write(date);
            }

            setInterval(setTime, 1000);
            setInterval(document.write(time), 1000);





            window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title:{
                    text: "Kontoverlauf"
                },
                backgroundColor: "transparent",
                data: [{        
                    type: "line",
                    lineColor: "black",
                    markerColor: "black",
                    
                    indexLabelFontSize: 16,
                    dataPoints: [
                        { y: 450 },
                        { y: 414},
                        { y: 520, markerColor: "lime", markerType: "triangle" },
                        { y: 460 },
                        { y: 450 },
                        { y: 500 },
                        { y: 480 },
                        { y: 480 },
                        { y: 410 , markerColor: "red", markerType: "cross" },
                        { y: 500 },
                        { y: 480 },
                        { y: 510 }
                    ]
                }]
            });
            chart.render();

            }
        </script>
    </head>
    <body id="body" style="background-color: #e2e1e0; width: 93%; overflow-x: hidden;">

        <!-- ////  //////  //// -->
        <!-- //// Sidebar  //// -->
        <!-- ////  //////  //// -->

        <div id="mySidenav" class="sidenav" id="sidebars">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="font-size: 40px;">&times;</a>

            <h4 class="text-center" style="margin-bottom: 10px; margin-top: 5px; color: #1EC1EA;">Men??</h4>

            <a href="#"><i class="bi bi-bank" style="margin-right: 10px;"></i> Finanzen</a>
            <a href="#"><i class="bi bi-box-seam" style="margin-right: 10px;"></i> Inventar</a>
            <a href="#"><i class="bi bi-file-earmark-person" style="margin-right: 10px;"></i> Personal</a>
            <a href="#"><i class="bi bi-globe" style="margin-right: 10px;"></i> Web</a>
            <a href="#"><i class="bi bi-calendar" style="margin-right: 10px;"></i> Termine</a>
        </div>

        <script>
            function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("mySideset").style.width = "0";
            }

            function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            }
        </script>

        <!-- ////      //////      //// -->
        <!-- ////  SettingsSidebar //// -->
        <!-- ////      //////      //// -->

        <div id="mySideset" class="sideset" id="sidebars">
            <a href="javascript:void(0)" class="closebtnset" onclick="closeSet()">&times;</a>

            <h4 class="text-center" style="margin-bottom: 10px; margin-top: 5px; color: #1EC1EA;">Einstellungen</h4>

            <a href="#"><i class="bi bi-person" style="margin-right: 10px;"></i> Konto</a>
            <a href="#" onclick="openDisplaySet()"><i class="bi bi-display" style="margin-right: 10px;"></i> Anzeige</a>

            <div id="displaySettings" class="display-settings">
                <button class="back-btn" onclick="closeDisplaySet()"><i class="bi bi-arrow-left"></i></button>

                <div class="container display-element position-relative">
                    <h5 class="text-center" style="color: #1EC1EA; font-weight: bold;">Light- / Darkmode</h5>

                    <div class="container mode-changer">
                        <button class="mode-btn" onclick="lightmode()"><i class="bi bi-brightness-high"></i></button> 
                        <button class="mode-btn" onclick="darkmode()"><i class="bi bi-moon-stars"></i></button>
                    </div>
                </div>
            </div>

            <script>
                function lightmode(){
                    document.getElementById("body").style.background = "var(--bg-color)";
                    document.getElementById("header").style.background = "var(--card-light)";
                    document.getElementById("card").style.background = "var(--card-light)";
                    document.getElementById("sidebars").style.background = "var(--bg-color)";
                }

                function darkmode(){
                    document.getElementById("body").style.background = "var(--bg-darkmode)";
                    document.getElementById("header").style.background = "var(--card-dark)";
                    document.getElementById("card").style.background = "var(--card-dark)";
                    document.getElementById("sidebars").style.background = "var(--bg-darkmode)";
                }
            </script>

            <a href="#"><i class="bi bi-shield-check" style="margin-right: 10px;"></i> Sicherheit</a>
            <a href="#"><i class="bi bi-life-preserver" style="margin-right: 10px;"></i> Hilfe</a>
            <a href="info.html"><i class="bi bi-info-circle" style="margin-right: 10px;"></i> Info</a>

            <!-- / --/ FOOTER /-- / -->
            <a href="#" style="position: absolute; bottom: 5px; left: 0; font-size: 15px;">Impressum</a>
            <a href="#" style="position: absolute; bottom: 5px; right: 25px; font-size: 15px;">Datenschutz</a>
        </div>

        <script>
            function openSet() {
            document.getElementById("mySideset").style.width = "250px";
            document.getElementById("mySidenav").style.width = "0";
            }

            function closeSet() {
            document.getElementById("mySideset").style.width = "0";
            }

            function openDisplaySet(){
                document.getElementById("displaySettings").style.width = "250px";
            }

            function closeDisplaySet(){
                document.getElementById("displaySettings").style.width = "0";
            }
        </script>

        <!-- ////  //////  //// -->
        <!-- ////  Header  //// -->
        <!-- ////  //////  //// -->

        <div class="container header" id="header" style="position: fixed; top: 0; padding-bottom: 20px; transform: translateY(-100vh); opacity: 0;">
            <span class="icon position-absolute" style="font-size: 40px; cursor: pointer; color: #1EC1EA;" onclick="openNav()">&#9776;</span>
            
            <h1 class="text-center" style="margin-top: 2.7vw; color: #1EC1EA;">Dashboard</h1>
        
            <span class="icon position-absolute" style="font-size: 40px; cursor: pointer; color: #1EC1EA; right: 8vw; top: 0vw;" onclick="openSet()"><i class="bi bi-gear"></i></span>
        </div>

        <div class="container space" style="height: 15vw; margin-bottom: 12px;"></div>

        <!-- //// //////  //// -->
        <!-- ////  Head  //// -->
        <!-- //// //////  //// -->

        <div class="container position-relative head" id="card" style=" z-index: -1; width: 170%; margin-left: 2.5%; height: 10vw; opacity: 0; transform: translateY(-100); transform: translateY(-100); background-color: #fff; border-radius: 12px; background-color: #fff; margin-top: 10px; margin-bottom: 10px; box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
            <h1 style="position: absolute; top: 2vw; left: 3vw; font-weight: bold; color: #1EC1EA;">Hallo, Colin!</h1>

            <h4 style="position: absolute; right: 5vw; top: 1vw; font-size: 70px; font-weight: 400; color: #1EC1EA;">
                <script>
                    setInterval(document.write(time), 1000);
                </script>
            </h4>
            <h4 style="position: absolute; right: 5vw; top: 20vw; font-size: 27px; font-weight: 400; color: #1EC1EA;">
                <script>
                    writeDate()
                </script>
            </h4>
   
   
            <div class="container ico-bar" id="card" style="position: absolute; bottom: 3vw; width: 94%; height: 15vw; border-radius: 12px; background-color: #fff; box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;">
                <div class="row" style="font-size: 40px; color: #1EC1EA;">
                    <div class="col-3 text-center"><a href="#" style="color: #1EC1EA;"><i class="bi bi-clipboard"></i><span class="position-absolute top-0 0  0 translate-middle badge rounded-pill bg-danger" style="font-size: 12px;">5</span></a></div>
                    <div class="col-3 text-center"><a href="#" style="color: #1EC1EA;"><i class="bi bi-bell"></i><span class="position-absolute top-0 0  0 translate-middle badge rounded-pill bg-danger" style="font-size: 12px;">34</span></a></div>
                    <div class="col-3 text-center"><a href="#" style="color: #1EC1EA;"><i class="bi bi-person"></i><span class="position-absolute top-0 0  0 translate-middle badge rounded-pill bg-danger" style="font-size: 12px;">2</span></a></div>
                    <div class="col-3 text-center"><a href="#" style="color: #1EC1EA;"><i class="bi bi-chat-dots"></i><span class="position-absolute top-0 0  0 translate-middle badge rounded-pill bg-danger" style="font-size: 12px;">99+</span></a></div>
                </div>
            </div>
        </div>

        <!-- //// //////  //// -->
        <!-- ////  Cards  //// -->
        <!-- //// //////  //// -->

        <!-- +++ Finanzen +++ -->

        <div class="container placeholder-1" id="card" title="Finanzen" style="transform: translateX(-100%); opacity: 0; z-index: -1; position: relative; height: 20vw; width: 102%; margin-left: 2.5%; border-radius: 12px; background-color: #fff; margin-top: 10px; margin-bottom: 10px; box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
            <a href="#" class="icon symbol position-absolute" style="position: absolute; left: 15px; top: 2px; font-size: 30px; color: #1EC1EA;"><i class="bi bi-bank"></i></a>
            <a href="#" class="icon position-absolute" style="position: absolute; right: 15px; top: 2px; font-size: 30px; color: #1EC1EA;"><i class="bi bi-three-dots"></i></a>
            <h5 style="position: absolute; left: 54px; top: 8px; font-size: 28px; color: #1EC1EA;">Finanzen</h5>


                <div class="container card-bdy" id="card" style="position: relative; top: 12vw; height: 80%; width: 100%; border-radius: 20px;">
                    <div class="container card-content" style="z-index: 5; position: absolute; width: 100%; height: 15%;">
                        <div class="container" id="chartContainer" style="z-index: 10; height: 25vh; width: 90vw; margin-left: -10vw;"></div>
                    </div>

                    <p class="text-center" style="font-size: 44px; color: #fff;"> <br>
                     </p>
                </div>

            <a href="#" style="position: absolute; bottom: 2px; right: 15px; font-size: 40px; color: #1EC1EA;"><i class="bi bi-arrow-right"></i></a>
        </div>

        <!-- Inventar -->

        <div class="container placeholder-2" id="card" title="Inventar" style="transform: translateX(-100%); opacity: 0; z-index: -1; position: relative; height: 20vw; width: 102%; margin-left: 2.5%; border-radius: 12px; background-color: #fff; margin-top: 10px; margin-bottom: 10px; box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
            <a href="#" class="icon symbol position-absolute" style="position: absolute; left: 15px; top: 2px; font-size: 30px; color: #1EC1EA;"><i class="bi bi-box-seam"></i></a>
            <a href="#" class="icon position-absolute" style="position: absolute; right: 15px; top: 2px; font-size: 30px; color: #1EC1EA;"><i class="bi bi-three-dots"></i></a>
            <h5 style="position: absolute; left: 54px; top: 8px; font-size: 28px; color: #1EC1EA;">Inventar</h5>


                <div class="container card-bdy" style="position: relative; top: 12vw; background-color: #C9C9C9; height: 70%; width: 100%; border-radius: 20px;">
                    <div class="container card-content" style="position: absolute; top: 2vw; left: 11vw;">
                        <div class="container row lang-logo" style="margin: 0; padding: 0;">
                            <div class="col-3"><a class="lng-ico" href="https://html.com/" target=???_blank??? title="HTML 5" style="font-size: 44px; color: #fff;"><i class="fab fa-html5" style="margin-top: 1vw; color: #fff;"></i></a></div>
                            <div class="col-3"><a class="lng-ico" href="https://www.javascript.com/" target=???_blank??? title="Java Script" style="font-size: 44px; color: #fff;"><i class="fab fa-js-square" style="margin-top: 1vw; color: #fff;"></i></a></div>
                            <div class="col-3"><a class="lng-ico" href="https://www.php.net/" target=???_blank??? title="PHP 8" style="font-size: 44px; color: #fff;"><i class="fab fa-php" style="margin-top: 1vw; color: #fff;"></i></a></div>
                        </div>

                        <!-- /// second row of the grid /// -->

                        <div class="container row lang-logo" style="margin: 0; padding: 0;">
                            <div class="col-3"><a class="lng-ico" href="https://www.w3.org/Style/CSS/" target=???_blank??? title="CSS 3" style="font-size: 44px; color: #fff;"><i class="fab fa-css3-alt" style="color: #fff;"></i></a></div>
                            <div class="col-3"><a class="lng-ico" href="https://getbootstrap.com/" target=???_blank??? title="Bootstrap 5" style="font-size: 44px; color: #fff;"><i class="fab fa-bootstrap" style="color: #fff;"></i></a></div>
                            <div class="col-3"><a class="lng-ico" href="https://fontawesome.com/" target=???_blank??? title="Font Awsome" style="font-size: 44px; color: #fff;"><i class="fab fa-font-awesome-alt" style="color: #fff;"></i></a></div>
                        </div>
                    </div>

                    <p class="text-center" style="font-size: 44px; color: #fff;"> <br>
                     </p>
                </div>

            <a href="#" style="position: absolute; bottom: 2px; right: 15px; font-size: 40px; color: #1EC1EA;"><i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="container placeholder-3" id="card" title="Personal" style="transform: translateX(-100%); opacity: 0; z-index: -1; position: relative; height: 20vw; width: 102%; margin-left: 2.5%; border-radius: 12px; background-color: #fff; margin-top: 10px; margin-bottom: 10px; box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
            <a href="#" class="icon symbol position-absolute" style="position: absolute; left: 15px; top: 2px; font-size: 30px; color: #1EC1EA;"><i class="bi bi-file-earmark-person"></i></a>
            <a href="#" class="icon position-absolute" style="position: absolute; right: 15px; top: 2px; font-size: 30px; color: #1EC1EA;"><i class="bi bi-three-dots"></i></a>
            <h5 style="position: absolute; left: 54px; top: 8px; font-size: 28px; color: #1EC1EA;">Personal</h5>


                <div class="container card-bdy" style="position: relative; top: 12vw; background-color: #C9C9C9; height: 70%; width: 100%; border-radius: 20px;">
                    <div class="container card-content" style="position: absolute; top: 2vw; left: 11vw;">
                        <div class="container row lang-logo" style="margin: 0; padding: 0;">
                            <div class="col-3"><a class="lng-ico" href="https://html.com/" target=???_blank??? title="HTML 5" style="font-size: 44px; color: #fff;"><i class="fab fa-html5" style="margin-top: 1vw; color: #fff;"></i></a></div>
                            <div class="col-3"><a class="lng-ico" href="https://www.javascript.com/" target=???_blank??? title="Java Script" style="font-size: 44px; color: #fff;"><i class="fab fa-js-square" style="margin-top: 1vw; color: #fff;"></i></a></div>
                            <div class="col-3"><a class="lng-ico" href="https://www.php.net/" target=???_blank??? title="PHP 8" style="font-size: 44px; color: #fff;"><i class="fab fa-php" style="margin-top: 1vw; color: #fff;"></i></a></div>
                        </div>

                        <!-- /// second row of the grid /// -->

                        <div class="container row lang-logo" style="margin: 0; padding: 0;">
                            <div class="col-3"><a class="lng-ico" href="https://www.w3.org/Style/CSS/" target=???_blank??? title="CSS 3" style="font-size: 44px; color: #fff;"><i class="fab fa-css3-alt" style="color: #fff;"></i></a></div>
                            <div class="col-3"><a class="lng-ico" href="https://getbootstrap.com/" target=???_blank??? title="Bootstrap 5" style="font-size: 44px; color: #fff;"><i class="fab fa-bootstrap" style="color: #fff;"></i></a></div>
                            <div class="col-3"><a class="lng-ico" href="https://fontawesome.com/" target=???_blank??? title="Font Awsome" style="font-size: 44px; color: #fff;"><i class="fab fa-font-awesome-alt" style="color: #fff;"></i></a></div>
                        </div>
                    </div>

                    <p class="text-center" style="font-size: 44px; color: #fff;"> <br>
                     </p>
                </div>

            <a href="#" style="position: absolute; bottom: 2px; right: 15px; font-size: 40px; color: #1EC1EA;"><i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="container placeholder-4" id="card" title="Web" style="transform: translateX(-100%); opacity: 0; z-index: -1; position: relative; height: 20vw; width: 102%; margin-left: 2.5%; border-radius: 12px; background-color: #fff; margin-top: 10px; margin-bottom: 10px; box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
            <a href="#" class="icon symbol position-absolute" style="position: absolute; left: 15px; top: 2px; font-size: 30px; color: #1EC1EA;"><i class="bi bi-globe"></i></a>
            <a href="#" class="icon position-absolute" style="position: absolute; right: 15px; top: 2px; font-size: 30px; color: #1EC1EA;"><i class="bi bi-three-dots"></i></a>
            <h5 style="position: absolute; left: 54px; top: 8px; font-size: 28px; color: #1EC1EA;">Web</h5>


                <div class="container card-bdy" style="position: relative; top: 12vw; background-color: #C9C9C9; height: 70%; width: 100%; border-radius: 20px;">
                    <div class="container card-content" style="position: absolute; top: 2vw; left: 11vw;">
                        <div class="container row lang-logo" style="margin: 0; padding: 0;">
                            <div class="col-3"><a class="lng-ico" href="https://html.com/" target=???_blank??? title="HTML 5" style="font-size: 44px; color: #fff;"><i class="fab fa-html5" style="margin-top: 1vw; color: #fff;"></i></a></div>
                            <div class="col-3"><a class="lng-ico" href="https://www.javascript.com/" target=???_blank??? title="Java Script" style="font-size: 44px; color: #fff;"><i class="fab fa-js-square" style="margin-top: 1vw; color: #fff;"></i></a></div>
                            <div class="col-3"><a class="lng-ico" href="https://www.php.net/" target=???_blank??? title="PHP 8" style="font-size: 44px; color: #fff;"><i class="fab fa-php" style="margin-top: 1vw; color: #fff;"></i></a></div>
                        </div>

                        <!-- /// second row of the grid /// -->

                        <div class="container row lang-logo" style="margin: 0; padding: 0;">
                            <div class="col-3"><a class="lng-ico" href="https://www.w3.org/Style/CSS/" target=???_blank??? title="CSS 3" style="font-size: 44px; color: #fff;"><i class="fab fa-css3-alt" style="color: #fff;"></i></a></div>
                            <div class="col-3"><a class="lng-ico" href="https://getbootstrap.com/" target=???_blank??? title="Bootstrap 5" style="font-size: 44px; color: #fff;"><i class="fab fa-bootstrap" style="color: #fff;"></i></a></div>
                            <div class="col-3"><a class="lng-ico" href="https://fontawesome.com/" target=???_blank??? title="Font Awsome" style="font-size: 44px; color: #fff;"><i class="fab fa-font-awesome-alt" style="color: #fff;"></i></a></div>
                        </div>
                    </div>

                    <p class="text-center" style="font-size: 44px; color: #fff;"> <br>
                     </p>
                </div>

            <a href="#" style="position: absolute; bottom: 2px; right: 15px; font-size: 40px; color: #1EC1EA;"><i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="container placeholder-5" id="card" title="Termine" style="transform: translateX(-100%); opacity: 0; z-index: -1; position: relative; height: 20vw; width: 102%; margin-left: 2.5%; border-radius: 12px; background-color: #fff; margin-top: 10px; margin-bottom: 10px; box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
            <a href="#" class="icon symbol position-absolute" style="position: absolute; left: 15px; top: 2px; font-size: 30px; color: #1EC1EA;"><i class="bi bi-calendar"></i></a>
            <a href="#" class="icon position-absolute" style="position: absolute; right: 15px; top: 2px; font-size: 30px; color: #1EC1EA;"><i class="bi bi-three-dots"></i></a>
            <h5 style="position: absolute; left: 54px; top: 8px; font-size: 28px; color: #1EC1EA;">Termine</h5>


                <div class="container card-bdy"  style="position: relative; top: 12vw; background-color: #C9C9C9; height: 70%; width: 100%; border-radius: 20px;">
                    <div class="container card-content" style="position: absolute; top: 2vw; left: 11vw;">
                        <div class="container row lang-logo" style="margin: 0; padding: 0;">
                            <div class="col-3"><a class="lng-ico" href="https://html.com/" target=???_blank??? title="HTML 5" style="font-size: 44px; color: #fff;"><i class="fab fa-html5" style="margin-top: 1vw; color: #fff;"></i></a></div>
                            <div class="col-3"><a class="lng-ico" href="https://www.javascript.com/" target=???_blank??? title="Java Script" style="font-size: 44px; color: #fff;"><i class="fab fa-js-square" style="margin-top: 1vw; color: #fff;"></i></a></div>
                            <div class="col-3"><a class="lng-ico" href="https://www.php.net/" target=???_blank??? title="PHP 8" style="font-size: 44px; color: #fff;"><i class="fab fa-php" style="margin-top: 1vw; color: #fff;"></i></a></div>
                        </div>

                        <!-- /// second row of the grid /// -->

                        <div class="container row lang-logo" style="margin: 0; padding: 0;">
                            <div class="col-3"><a class="lng-ico" href="https://www.w3.org/Style/CSS/" target=???_blank??? title="CSS 3" style="font-size: 44px; color: #fff;"><i class="fab fa-css3-alt" style="color: #fff;"></i></a></div>
                            <div class="col-3"><a class="lng-ico" href="https://getbootstrap.com/" target=???_blank??? title="Bootstrap 5" style="font-size: 44px; color: #fff;"><i class="fab fa-bootstrap" style="color: #fff;"></i></a></div>
                            <div class="col-3"><a class="lng-ico" href="https://fontawesome.com/" target=???_blank??? title="Font Awsome" style="font-size: 44px; color: #fff;"><i class="fab fa-font-awesome-alt" style="color: #fff;"></i></a></div>
                        </div>
                    </div>

                    <p class="text-center" style="font-size: 44px; color: #fff;"> <br>
                     </p>
                </div>

            <a href="#" style="position: absolute; bottom: 2px; right: 15px; font-size: 40px; color: #1EC1EA;"><i class="bi bi-arrow-right"></i></a>
        </div>

        <style>
            @keyframes slideInFromLeft {
                100% {
                    transform: translateX(0);
                    opacity: 1;
                }
            }

            @keyframes growHeightHead{
                100%{
                    height: 50vw;
                }
            }

            @keyframes growHeightCard{
                100%{
                    height: 70vw;
                }
            }

            @keyframes slideInFromTop {
                100% {
                    transform: translateY(0);
                    opacity: 1;
                }
            }

            @keyframes fadeDown {
                100% {
                    transform: translateY(0);
                    transform: translateX(0);
                    width: 102%;
                    height: 70vw;
                    opacity: 1;
                }
            }

            .header{
                animation: .5s forwards 0s 1 slideInFromTop;
                animation-delay: .2s;
            }

            .head{
                animation: 
                    .5s forwards 0s 1 fadeDown,
                    2.5s forwards 0s 1 growHeightHead;
                animation-delay: .4s;
            }

            .placeholder-1{  
                animation: 
                    .5s forwards 0s 1 slideInFromLeft,
                    4s forwards 0s 1 growHeightCard;
                animation-delay: .2s;
            }

            .placeholder-2{  
                animation: 
                    .5s forwards 0s 1 slideInFromLeft,
                    4s forwards 0s 1 growHeightCard;
                animation-delay: .4s;
            }

            .placeholder-3{  
                animation: 
                    .5s forwards 0s 1 slideInFromLeft,
                    4s forwards 0s 1 growHeightCard;
                animation-delay: .6s;
            }

            .placeholder-4{  
                animation: 
                    .5s forwards 0s 1 slideInFromLeft,
                    4s forwards 0s 1 growHeightCard;
                animation-delay: .8s;
            }

            .placeholder-5{  
                animation: 
                    .5s forwards 0s 1 slideInFromLeft,
                    4s forwards 0s 1 growHeightCard;
                animation-delay: 1s;
            }
        </style>
        

        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

        <script src="https://kit.fontawesome.com/b95e6b0355.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>