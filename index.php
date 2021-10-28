

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>work-it</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link href="https://allfont.es/allfont.css?fonts=neuton-cursive" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="style/noselect.css">

        <link rel="stylesheet" href="style/app.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="test/css" href="plugins/sweetalert2.min.css">

        <link rel='stylesheet' type='test/css' href='plugins/sweetalert2.min.css'>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet"> 
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/estilos_001.css">

        

    </head>
    <body class="noselect">
        
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h1 class="center-align" style="font-family: 'Neuton Cursive', cursive;">Area:</h1>

                    <div class="carousel center-align">
                        <div class="carousel-item">
                            <h2 class="subtitulo">Leyes</h2>
                               <div class="linea-division"></div>
                            <img src="img/leyes.jpg" alt="">
                        </div>
    
                        <div class="carousel-item">
                            <h2 class="subtitulo">Medicos</h2>
                            <div class="linea-division"></div>
                            <img src="img/medico.jpg" alt="">
                        </div>
    
                        <div class="carousel-item">
                            <h2 class="subtitulo">Albañil</h2>
                            <div class="linea-division"></div>
                            <img src="img/albañil.jpg" alt="">
                        </div>
    
                        <div class="carousel-item">
                            <h2 class="subtitulo">Comunicaciones</h2>
                            <div class="linea-division"></div>
                            <img src="img/Reportero.jpg" alt="">
                        </div>

                        <div class="carousel-item">
                            <h2 class="subtitulo">Construccion</h2>
                            <div class="linea-division"></div>
                            <img src="img/construccion.jpg" alt="">
                        </div>

                        <div class="carousel-item">
                            <h2 class="subtitulo">Finanzas</h2>
                            <div class="linea-division"></div>
                            <img src="img/finanzas.jpg" alt="">
                        </div>

                        <div class="carousel-item">
                            <h2 class="subtitulo">Programacion</h2>
                            <div class="linea-division"></div>
                            <img src="img/programacion.jpg" alt="">
                        </div>
                    </div>
    
                    
                </div>
            </div>
        </div>

        <div class="fondo">
            <form id="form_2" class="container_2" method="POST">
                <style>
                    button{
                        height: 40px;
                        font-family: Arial, Helvetica, sans-serif;
                        margin-bottom: 15px;
                        width: 100%;
                        display: inline-block;
                        transition: 0.5s;
                        outline: none;
                        min-height: 30px;
                        border: 0px;
                        border-bottom: 2px solid #ccc;
                        border: none 0px transparent;
                        border-radius: 20px;
                    }
                    button:hover{
                        background-color: rgba(47, 255, 71, 0.638);
                        transform: scale(1.2);
                    }
                    input[type=submit]{
                        height: 40px;
                        font-family: Arial, Helvetica, sans-serif;
                        margin-bottom: 15px;
                        width: 100%;
                        display: inline-block;
                        transition: 0.5s;
                        outline: none;
                        min-height: 30px;
                        border: 0px;
                        border-bottom: 2px solid #ccc;
                        border: none 0px transparent;
                        border-radius: 20px;
                    }
                    input[type=submit]:hover{
                        background-color: rgba(47, 255, 71, 0.638);
                        transform: scale(1.2);
                    }
                </style>
                <div class="in">
                    <img src="style/img/work-it-black.png">

                    <input type="email" placeholder="email" name="email">
                    <input type="password" placeholder="contraseña" name="password">
                    
                    
                    <input type="submit" name="button" value="submit">

                </div>
                <div id="olvi-div">
                    <a href="" id="olvi">¿Olvidaste tu contraseña?</a>
                </div>
                <div id="main">
                    <hr class='line'>
                    <div class="o">o</div>
                    <hr class='line'>
                </div>

                <div id="regi">
                    <h4>¿No tienes una cuenta?</h4>
                    <a href="register.php">Registrate</a>
                </div>

            </form>
        </div>


        <script src="js/materialize.min.js"></script>
        <!-- JS Main -->
        <script src="js/main.js"></script>
        <style>
                .in input[type=submit]:hover{
                    background-color: rgba(47, 255, 71, 0.638);
                    transform: scale(1.1);
                }
                ::placeholder {
                    color: #555;
                    opacity: 1; /* Firefox */
                }

                :-ms-input-placeholder { /* Internet Explorer 10-11 */
                    color: #555;
                }

                ::-ms-input-placeholder { /* Microsoft Edge */
                    color: #555;
                }
            </style>
            
    </body>
    <script src='\work\plugins\sweetalert2.all.min.js'></script>
    <script src="js/sweetalert2@11.js"></script>
    
    <style>
        body{
            background-image: linear-gradient(-45deg, #ffffff 50%, #797979 50%);
        }
    </style>
    <?php 
        include ('database/login.php');
    ?>

    
</html>

