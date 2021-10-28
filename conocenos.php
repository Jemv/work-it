
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conocenos</title>
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

                            <a href="#" class="nav__link active">
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

            <?php include_once ('includes/templates/header.php')?>
            <!--Nav-->


            <!--Contenido-->
            <style>
                .contenido{
                    text-align: justify;
                    font-family: Arial, Helvetica, sans-serif;
                    font-size: 18px;
                }
                .title{
                    font-family: Neuton, cursive;
                    font-size: xxx-large;
                    margin-bottom: 20px;
                }

                .vision{
                    margin-top: 30px;
                }
                .grid{
                    display: grid;

                    grid-template-columns: minmax(auto, 1fr) minmax(auto, 1fr) minmax(auto, 1fr) minmax(auto, 1fr);
                    grid-template-rows: minmax(auto, 1fr) minmax(auto, 1fr) minmax(auto, 1fr);
                }

                
            </style>

            <div class="contactos" class="grid">
                <div>
                    <img class='facebook' src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggc3R5bGU9ImZpbGw6IzE5NzZEMjsiIGQ9Ik00NDgsMEg2NEMyOC43MDQsMCwwLDI4LjcwNCwwLDY0djM4NGMwLDM1LjI5NiwyOC43MDQsNjQsNjQsNjRoMzg0YzM1LjI5NiwwLDY0LTI4LjcwNCw2NC02NFY2NA0KCUM1MTIsMjguNzA0LDQ4My4yOTYsMCw0NDgsMHoiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiNGQUZBRkE7IiBkPSJNNDMyLDI1NmgtODB2LTY0YzAtMTcuNjY0LDE0LjMzNi0xNiwzMi0xNmgzMlY5NmgtNjRsMCwwYy01My4wMjQsMC05Niw0Mi45NzYtOTYsOTZ2NjRoLTY0djgwaDY0DQoJdjE3Nmg5NlYzMzZoNDhMNDMyLDI1NnoiLz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" />
                </div>
            </div>


            <div class="vision">
                <h2 class="title">
                    Vision
                </h2>
                <p class="contenido">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo modi, voluptas atque, est nemo officia ab accusantium unde vero odio id voluptatibus, quidem molestiae laudantium. Animi nobis facilis porro labore. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo esse, voluptatem possimus dolore iure voluptate obcaecati expedita quisquam fugit quos, tempore similique sunt quas molestias iusto sapiente earum. Deleniti, sapiente!
                </p>
            </div>

            
            <div class="mision">
                <h2 class="title">
                    Mision
                </h2>
                <p class="contenido">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo modi, voluptas atque, est nemo officia ab accusantium unde vero odio id voluptatibus, quidem molestiae laudantium. Animi nobis facilis porro labore. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo esse, voluptatem possimus dolore iure voluptate obcaecati expedita quisquam fugit quos, tempore similique sunt quas molestias iusto sapiente earum. Deleniti, sapiente!
                </p>
            </div>

            
    </body>
</html>