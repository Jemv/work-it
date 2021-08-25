
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title id="title_leyes"></title>
        
        <link rel="stylesheet" type="text/css" href="style/categorias.css?<?php echo time(); ?>"/>

    
    </head>
    <body id="body-pd">

        <?php include_once '../includes/templates/header.php'?>

        
        <!--=====Table=====-->
        <header class="header">
            <h2>
                Hola
            </h2>
            <select name="" c>
                <option value="0">Escoje tu categoria:</option>
                <option value="">Abogados</option>
                <option value="">Notarios</option>
                <option value="">Despachos</option>
            </select>
        </header>
        
        
        <table>
            <tr>
                <th>
                    <select name="" id="">
                        <option value="">Escoje tu ciudad:</option>
                    </select>
                </th>
                <th>Precio</th>
                <th>Puntuacion</th>
            </tr>
            
        </table>
        
    </body>
</html>