

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="style/grid.css">
        <link rel="stylesheet" href="style/scroll_bar.css">
        <link rel="stylesheet" href="style/noselect.css">
        

        <title>Home</title>
        <script src="includes/templates/js/main.js"></script>
    </head>
    <body id="body-pd" class="noselect">

        <!--Nav-->

        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>

            <div class="logo_div">
                <img src="\work\includes\templates\img\logo-black.png" id="logo">
            </div>

            <div class="header__img">
                <img src="\work\includes\templates\img\6165180.jpg" alt="">
            </div>
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <img src="\work\includes\templates\img\logo.png" class="nav__logo-name" style="width: 2.5%;">
                    </a>

                    <div class="nav__list">
                        <a href="\work\home.php" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Home</span>
                        </a>    

                        <a href="\work\user.php#" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Cuenta</span>
                        </a>
                        
                        <a href="#" class="nav__link">
                            <i class='bx bx-message-square-detail nav__icon' ></i>
                            <span class="nav__name">Mensagues</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-bookmark nav__icon' ></i>
                            <span class="nav__name">Favoritos</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-bar-chart-alt-2 nav__icon' ></i>
                            <span class="nav__name">Empresas</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-user-voice nav__icon'></i>
                            <span class="nav__name">Conocenos</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-receipt nav__icon' ></i>
                            <span class="nav__name">Terminos</span>
                        </a>


                        
                    </div>
                </div>

                <a href="#" class="nav__link">
                    <i class='bx bx-log-out nav__icon' id="log_out"></i>
                    <span class="nav__name" id='log_out'>Salir</span>
                </a>
            </nav>
        </div>

        <?php include_once 'includes/templates/header.php'?>
        <!--Nav-->

        <div class="grid">


            <!-- Grid 1----------------------------------------->
            <div class='element'>
                <a href="\work\categorias\1.php">
                    <div class='title'>
                        Leyes
                    </div>
                    <img src="img/leyes.jpg">
                </a>
            </div>
            <div class='element'>
                <a href="">
                    <div class='title'>
                        Comunicacion
                    </div>
                    <img src="img/Reportero.jpg">
                </a>
            </div>
            <div class='element'>
                <a href="">
                    <div class='title'>
                        Medica
                    </div>
                    <img src="img/medico.jpg">
                </a>
            </div>
            <div class='element'>
                <a href="">
                    <div class='title'>
                        Industrial
                    </div>
                    <img src="img/industrias.jpg">
                </a>
            </div>
            <!-- Grid 2----------------------------------------->
            <div class='element'>
                <a href="">
                    <div class='title'>
                        Oficios
                    </div>
                    <img src="img/albañil.jpg">
                </a>
            </div>
            <div class='element'>
                <a href="">
                    <div class='title'>
                        Publicidad
                    </div>
                    <img src="img/Publicidad.jpg">
                </a>
            </div>
            <div class='element'>
                <a href="">
                    <div class='title'>
                        Construccion
                    </div>
                    <img src="img/construccion.jpg">
                </a>
            </div>
            <div class='element'>
                <a href="">
                    <div class='title'>
                        Educativo
                    </div>
                    <img src="img/educacion.jpg">
                </a>
            </div>
            <!-- Grid 3----------------------------------------->
            <div class='element'>
                <a href="">
                    <div class='title'>
                        Gatronomia
                    </div>
                    <img src="img/gastronomia.jpg">
                </a>
            </div>
            <div class='element'>
                <a href="">
                    <div class='title'>
                        Programacion
                    </div>
                    <img src="img/programacion.jpg">
                </a>
            </div>
            <div class='element'>
                <a href="">
                    <div class='title'>
                        Finanzas
                    </div>
                    <img src="img/finanzas.jpg">
                </a>
            </div>
            <div class='element'>
                <a href="">
                    <div class='title'>
                        Otros
                    </div>
                    <img src="img/test.jpg">
                </a>
            </div>
            
            
            <!-- Grid Final------------------------------------->
            
        </div>
    </body>
</html>