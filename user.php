

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>user - {id:name}</title>
        
        <!-- ===== CSS ===== -->    
        <link rel="stylesheet" href="style/scroll_bar.css">
        <link rel="stylesheet" href="style/noselect.css">
        <link rel="stylesheet" href="style/user.css">

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
                        <a href="\work\home.php" class="nav__link">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Home</span>
                        </a>    

                        <a href="\work\user.php#" class="nav__link active">
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

        <div class="user-header">

            <div class="grid_user">
                
                <!--========-->                
                <div class="user_img">
                    <img src="/work/gorilla.png">
                </div>
                <!--========-->
                <div class="user_box_left">
                    <div class="title_user_left">Datos Personales</div>
                    <div class="grid_user_datospersonales">
                        <!--========-->
                        <div class="user_dato">Nombre</div>
                        <div>Ricky</div>                        
                        <!--========-->
                        <div class="user_dato">Telefono</div>
                        <div>868 796 8684</div>
                        <!--========-->
                        <div class="user_dato">Email</div>
                        <div>emiliomontesv@hotmail.com</div>
                        <!--========-->
                        <div class="user_dato">Edad</div>
                        <div>24</div>
                        <!--========-->
                        <div class="user_dato">Ciudad</div>
                        <div>Matamoros</div>
                        <!--========-->

                    </div>
                </div>
                <!--========-->
            
                <div class="user_box_rigth">
                    <div class="title_user_rigth">Perfil</div>
                    <div class="content_user"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus consectetur quisquam eum magnam aliquam tenetur perspiciatis doloribus voluptatibus! Suscipit dolore magnam vero tempore odit, deleniti incidunt dolor debitis saepe? Perferendis.</div>
                </div>


        </div>
        <!--========-->
        <div class="grid_bottom">
            <div class='content_bottom border'>
                <div class="title_bottom">
                    Experencia Labroral
                </div>
                <div class='exp_laboral_content'>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, modi, beatae labore praesentium nemo dolores sequi numquam officiis possimus magni impedit voluptatem rerum adipisci vel sapiente dicta maxime temporibus? Expedita?
                </div>
            </div>
            <div class='content_bottom'>
                <div class='title_bottom'>
                    Educacion
                </div>
                <div class='educacion_content'>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat molestias modi, deserunt sint veniam neque officiis similique error qui illo facilis delectus sit eius dolor omnis cum dicta eligendi praesentium.
                </div>
            </div>
        </div>
        <!--========-->
        
        <div class='espacio'></div>

    </body>
</html>