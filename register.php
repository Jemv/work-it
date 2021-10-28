
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>work-it Registrate</title>
        <link rel="stylesheet" href="style/app.css">
        <link rel="stylesheet" href="style/noselect.css">
        <link rel="stylesheet" href="style/scroll_bar.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel='stylesheet' type='test/css' href='plugins/sweetalert2.min.css'>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet"> 
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/estilos_001.css">


    </head>
    <body class="noselect">
        <style type="text/css">
            
            form{
                margin-bottom: 20px;
            }

        </style>
        <form id="form" name="form1" method="POST" onsubmit="return true">
            <div class="in">
                <img src="style/img/work-it-black.png">
                <input type="email" placeholder="email" id="email" name="email">

                <input type="password" placeholder="contraseña"  name="contra_1">
                <input type="password" placeholder="repita contraseña"  name="contra_2">
                <input type="date" placeholder="fecha de nacimiento" name="date" id="date">
                <style type="text/css">
                    select{
                        transition: 0.5s;
                        margin-top: 10px;
                        margin-bottom: 10px;
                        width: 100%;
                        border-radius: 12px;
                        border: solid 2px #ccc;
                        height: 35px;
                    }
                    select:focus{
                        width: 100%;
                        border-radius: 12px;
                        border: solid 2px #555;
                        height: 35px;
                    }
                </style>
                <input placeholder="telefono" type='number' name="phone">
                <select name="tipo_cuenta">
                    <option value="0">Escoje tu tipo de cuenta:</option>
                    <option value="1">Usuario</option>
                    <option value="2">Negocio</option>
                </select>
                
                <input type="submit" name="button" value="Registrarse">
                
                <div id="main">
                    <hr class='line'>
                    <div class="o">o</div>
                    <hr class='line'>
                </div>

                <div id="logi">
                    <h4>¿Ya tienes cuenta?</h4>
                    <a href="index.php">Inicia Sesion aqui</a>
                </div>

            </div>

        </form>

        <script src='\work\plugins\sweetalert2.all.min.js'></script>
        <script src="js/sweetalert2@11.js"></script>
        <style>
            body{
                background-image: linear-gradient(-45deg, #ffffff 50%, #797979 50%);
            }
        </style>
        <?php
            include('database/registro.php');
        ?>
    </body>
</html>